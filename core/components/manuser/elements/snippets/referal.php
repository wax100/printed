<?php
$ref = $_GET['ref'];
if (!is_null($ref)){
    $_SESSION['referal']=$ref;
    $_SESSION['referal_url'] = $_SERVER['HTTP_REFERER'];
}
$modx->setPlaceholder('referal', $_SESSION['referal']);
$modx->setPlaceholder('referal_url', $_SESSION['referal_url']);