<?php
$modx->setDebug(E_ALL & ~E_NOTICE); // sets error_reporting to everything except NOTICE remarks
    $modx->log(modX::LOG_LEVEL_ERROR, $_GET['InvId']);
    $modx->log(modX::LOG_LEVEL_ERROR, $_GET['InvId']);
    $modx->log(modX::LOG_LEVEL_ERROR, 'POST invId: '.$_GET['InvId']);
    
    $InvId = (int)($_GET['InvId']); // получаем номер транзакции
    if ($InvId > 0) {
        $pwd2 = $modx->getOption('crashfix_robokassa_pass2');
        
        $sql ="SELECT `summ`, `bonus_summ`, `user_id` from `modx_crashfix_payments` WHERE `id` = $InvId";
        $result = $modx->query($sql);
        $resultArr = $result->fetchAll(PDO::FETCH_ASSOC);
        $sum = (int)$resultArr[0]['summ'];
        $user_id = (int)$resultArr[0]['user_id'];
        $bonus_summ = (int)$resultArr[0]['bonus_summ'];
        //$sum =100.55;
        
        $modx->log(modX::LOG_LEVEL_ERROR, 'POST OutSum: '.$_GET['OutSum']);
        $modx->log(modX::LOG_LEVEL_ERROR, 'Sum: '.$sum);
        
        if ( $sum != (float)$_GET['OutSum'] ){
            echo "Неправильная сумма. Для решения вопроса свяжитесь с Администратором.";
            $modx->log(modX::LOG_LEVEL_ERROR
            , 'Payment error. Order'. $InvId . 'sum error');
            exit();
            
        }
        
        //$sign = strtolower(md5(number_format($sum, 6, '.', '') . ":" . $InvId . ":" . $pwd2 . ":Shp_item=1"));
        
        $sign = strtolower(md5("$sum:$InvId:$pwd2:Shp_item=1"));
        $modx->log(modX::LOG_LEVEL_ERROR, 'POST SignatureValue: '.$_GET['SignatureValue']);
        $modx->log(modX::LOG_LEVEL_ERROR, 'sign: '.$sign);
        
        
        if ( strtolower($_GET['SignatureValue']) != $sign) {
            echo "Неправильная подпись. Для решения вопроса свяжитесь с Администратором.";
            $modx->log(modX::LOG_LEVEL_ERROR
            , 'Payment error. Order'. $InvId . 'sign error');
            exit();
        }
        
        $sql="UPDATE modx_crashfix_payments SET status = 1 WHERE id = $InvId";
        $q=$modx->prepare($sql);
        $q->execute();
        
        $refPays = $modx->newObject('CrashfixRefPayments');
        $refPays->payMoney($user_id, $sum, $bonus_summ, 0);
        //sendMail($order);
        echo 'OK'.$InvId;
        exit();
    }
    else{ 
        echo "Неправильный ID. Для решения вопроса свяжитесь с Администратором.";
        $modx->log(modX::LOG_LEVEL_ERROR
        , 'Payment error. Order id error');
        exit();
    }
    
//return $modx->lexicon('payment.error_id');// Не совпала сумма