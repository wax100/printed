<?php
header("Content-Type: text/html; charset=utf-8");
    
    $now = time();   // текущее время
    $sql = "SELECT start , end FROM  `modx_crashfix_pays_period` ORDER BY start DESC LIMIT 0 , 1";
    $result = $modx->query($sql);
    $period = $result->fetchAll(PDO::FETCH_ASSOC);
    
    $start = (int)$period[0]['start']; // начало периода
    $end = (int)$period[0]['end']; // конец  периода
    
   
    if ($now > $start && $now < $end){
        return ;
    }
    
    $new_start = $end + 86400;
    $end1 = strtotime ( '+1 month' , $new_start ) ;
    $new_end = $end1-86400;
    
     $sql="INSERT INTO  `modx_crashfix_pays_period` (`id` ,`start` ,`end`) VALUES (NULL ,  $new_start,  $new_end);";
    $q=$modx->prepare($sql);
    $q->execute();
    
    $start = $new_start;
    $end = $new_end;
    
    // тарифы
    $sql="SELECT id,summ,procent  FROM `modx_crashfix_ref_programm`";
    $result = $modx->query($sql);
    $tariffs = $result->fetchAll(PDO::FETCH_ASSOC);
    $tariffArr = array(); // массив тарифов
    foreach($tariffs as $tariff) {
        $t_id= $tariff['id'];
        $tariffArr[$t_id] = array(
        'id'=>$t_id,
        'procent'=>$tariff['procent'],
        'summ'=>$tariff['summ']
        );
    }
    
    //выбираем все суммы
    //$sql="SELECT ref_id, SUM(summ) as total_summ  FROM `modx_crashfix_ref_payments` WHERE (date > $start AND date < $end) GROUP BY ref_id HAVING SUM(summ) > 0 ORDER BY total_summ LIMIT 0, 1000";
    
    $sql="SELECT ref_id, SUM(summ) as total_summ  FROM `modx_crashfix_access` WHERE (date_take > $start AND date_take < $end) GROUP BY ref_id HAVING SUM(summ) > 0 ORDER BY total_summ LIMIT 0, 1000";
    
    $result = $modx->query($sql);
    $referals = $result->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($referals as $ref){
        $salary = (float)$ref['total_summ'];
        $procent = 0;
        foreach($tariffArr as $tariff){
            if ($salary > (float)$tariff['summ']){
                $procent = (int)$tariff['procent'];
            }
            else {
                break;
            }
        }
        $money = $salary * $procent / 100;
        
        $ref_id= (int)$ref['ref_id'];
        $sql="";
        //var_Dump($salary);
        $sql="UPDATE modx_user_attributes SET fax = fax + $money WHERE id = $ref_id";
        $q=$modx->prepare($sql);
        $q->execute();
    }