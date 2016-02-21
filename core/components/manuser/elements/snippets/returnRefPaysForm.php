<?php
$profile = $modx->user->getOne('Profile');
$money = (float)$profile->fax;

$minMoney = $modx->getOption('crashfix_referal_min');

if ($money <=$minMoney ){
    return "Недостаточная сумма для вывода. Минимальная сумма $minMoney";
}

$extended = $profile->get('extended');
$wm = (int)$extended['webmoney'];
$yd =(int)$extended['yandex'];
$sb = (int)$extended['sberbank'];

$options['wm']=0;
$options['yd']=0;
$options['sb']=0;
$options['money']=$money;
$payType=0;

if ($wm >0){
    $options['wm']=1;
    $payType=$payType+1;
}
if ($yd >0){
    $options['yd']=1;
   $payType=$payType+1;
}
if ($sb >0){
    $options['sb']=1;
    $payType=$payType+1;
}
if ($payType==0){
     return "Заполните в Профиле счета для вывода денег.";
}

return $modx->getChunk('cabinetRefPaysForm', $options);