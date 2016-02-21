<?php 
    header('Content-Type: text/html; charset=utf-8'); 
    $tpl='emailTpl';
    
    foreach($_POST as $k => $v) {
        $properties[$k] = $v ;
    }
    
    $rid=(int)$properties['manager'];
    
    
    
    if ($rid < 0 || $_POST['antispam'] != "" ){
        $return['error'] = true;
        $return['text'] = 'Ошибка! Свяжитесь с менеджером!';
        return json_encode($return);
    }
    
    
    $obj = $modx->getObject('modResource', $rid);
    $email_to = $obj->getTVvalue('manager');
    $sn = $modx->getOption('site_name');
    
    if ($subject == ""){
        $subject = 'Заявка с сайта';
    }
    $subject.=' '.$sn;
    
    
    $msg = $modx->getChunk($tpl,$properties);
    require_once('sendMail.class.php');
    $Box = new sendMail($modx);
    $sent = $Box->SendMessage($msg, $email_from, $subject, $email_to);
    
    if (!$sent){
        $modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$modx->mail->mailer->ErrorInfo);
    }
    if ($sent==false){
        $return['error'] = true;
        $return['text'] = "Ошибка отправки сообщения.";
    }
    
    else{
    $return['error'] = false;
            $return['text'] = "Сообщение успешно отправлено. Менеджер скоро свяжется с Вами.";
            }
    return json_encode($return);
?>