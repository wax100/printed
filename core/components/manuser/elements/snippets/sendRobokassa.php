<?php
header("Content-Type: text/html; charset=utf-8");
$out_summ = (float)$_POST['summ'];
//$out_summ =100.55;

if (isset($_POST['payment']) && $out_summ > 0){
    
    $sql="SELECT paid, summ  FROM `modx_crashfix_summ` WHERE id = $out_summ";
    $result = $modx->query($sql);
    $summa = $result->fetchAll(PDO::FETCH_ASSOC);
    if (count($summa)==0){
        return 'Неправильная сумма оплаты!';
    }
    $out_summ = $summa[0]['paid'];
    $bonus_summ = $summa[0]['summ'];
    
    $user_id=$modx->user->id;
    $now = time();
    $sql="INSERT INTO  `modx_crashfix_payments` (`id` ,`summ` ,`bonus_summ` ,`user_id`, `date`, `status`, `type`) VALUES (NULL,  $out_summ, $bonus_summ,  $user_id, $now, 0, 0);";
    $q=$modx->prepare($sql);
    $q->execute();
    $inv_id = $modx->lastInsertId();
    // Оплата заданной суммы с выбором валюты на сайте ROBOKASSA
    // регистрационная информация (логин, пароль #1)
    $url = 'https://auth.robokassa.ru/Merchant/Index.aspx?';// Тестовый адрес отправки клиента
    
   // $url = 'https://auth.robokassa.ru/Merchant/Handler/MrchSumPreview.ashx?';  // Тестовый адрес отправки клиента
    $url ='http://test.robokassa.ru/Index.aspx?';
    $mrh_login =  $modx->getOption('crashfix_robokassa_login');
    $mrh_pass1 = $modx->getOption('crashfix_robokassa_pass1');
    $mrh_pass2 = $modx->getOption('crashfix_robokassa_pass2');
    
    $shp_item = 1;// Тип товара
    $in_curr = "";// Предлагаемая валюта платежа
    $encoding ="utf-8";
    $culture = 'ru'; // язык
    $inv_desc = urlencode('Пополнение счета на сайте '.$modx->getOption('site_name'));// описание заказа
    $crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=1");// формирование подписи

    // $postdata ="sMerchantLogin=$mrh_login&nOutSum=$out_summ&nInvId=$inv_id&sInvDesc=$inv_desc&sSignatureValue=$crc&sIncCurrLabel=$in_curr&sCulture=$culture&Encoding=$encoding";
    $postdata ="MrchLogin=$mrh_login&OutSum=$out_summ&InvId=$inv_id&Desc=$inv_desc&SignatureValue=$crc&IncCurrLabel=$in_curr&Culture=$culture&Encoding=$encoding&Shp_item=$shp_item";
   // var_dump($postdata);
   // exit();
    header( 'Location: '.$url.$postdata); 
}
return ;