<?php
header('Content-Type: text/html; charset=utf-8');
$return['error'] = true;
//ini_set ('display_errors', 1);

    foreach($_POST as $k => $v) {
        $properties[$k] = $v ;
    }
    
    $return['error'] = true;
    $return['text'] =  'Неправильный формат номера';
    
 //  var_dump(($return));
    if (strlen($properties['phone']) == 16){
        if ((int)$_SESSION['smstime']>0) {
            $now = time();
            $diff = $now - $_SESSION['smstime'];
            if ($diff < 300) {
           // var_dump(2);
                $return['error'] = true;
                $return['text'] = 'Сообщение было отправлено менее 5 минут назад! Пожалуйста, подождите.';
                return json_encode($return);
            }
        }
        
        $cb_login = $modx->getOption('callback.login');
        $cb_pass = $modx->getOption('callback.password');
        $sms_phone = $modx->getOption('callback.phone');
        
        $error_bool = $modx->getOption('callback.error_bool');
       
        
        if ($cb_login == "" || $cb_pass=="" || $sms_phone=="") {
     //   var_dump(3);
            $return['error'] = true;
            $return['text'] ='Ошибка! Неверно настроен компонент. Проверьте логин, пароль и телефон.';
            if ($error_bool){
                $return['text'] = $modx->getOption('callback.error');
            }
        }
        require_once('sms.php');
        define("SMSC_LOGIN",  $cb_login);
        define("SMSC_PASSWORD", $cb_pass);
        define("SMSC_POST", 0);
        define("SMSC_HTTPS", 0);
        define("SMSC_CHARSET", "utf-8");
        define("SMSC_DEBUG", 1);
        //define("SMTP_FROM", $modx->getOption('sms_email'));
        
        $sms_phone=str_replace ('-','',$sms_phone);
        $sms_phone=str_replace ('+','',$sms_phone);
        
        
        //$msg = rand(1000, 9999);
        //$_SESSION['smskod']=$msg;
        $_SESSION['smstime']=time();
        
        $msg = $modx->getChunk('callback_sms', $properties);
        //$city.'. Перезвоните по номеру '.$phone;
        //$data = send_sms($phone, $msg, $modx->getOption('sms_from'));
        
        $data = send_sms($sms_phone, $msg, $modx->getOption('site_name'));
        $dataResp = (int)$data[1] ;
        if ($dataResp > 0){
            $return['error'] = false;
            $return['text'] ='Ожидайте звонка!';
        }
        else{
     //   var_dump(4);
            $return['error'] = true;
            $return['text'] ='Произошла ошибка! Скорей всего менеджер не сможет с Вами связаться.';

            if ($error_bool){
                $return['text'] = $modx->getOption('callback.error');
            }
        }
    }
    
return json_encode($return);