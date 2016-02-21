<?php
function send($email_to, $msg, $subject){
        global $modx;
        
        //$user = $modx->getObject('modUser', 1);
        //$profile = $user->getOne('Profile');
        //$email_from = $profile->get('email');
        $email_from = 'admin@crashfix.ru';
        $modx->getService('mail', 'mail.modPHPMailer');
        $modx->mail->set(modMail::MAIL_BODY, $msg);
        // $modx->mail->set(modMail::MAIL_FROM, $modx->getOption('emailsender'));
        $modx->mail->set(modMail::MAIL_FROM, $email_from);
        $modx->mail->set(modMail::MAIL_FROM_NAME, $modx->getOption('site_name'));
        $modx->mail->set(modMail::MAIL_SUBJECT, $subject);
        $modx->mail->address('to', $email_to);
        $modx->mail->setHTML(true);
        
        $sent = $modx->mail->send();
        $modx->mail->reset();
        if (!$sent){
            $modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$modx->mail->mailer->ErrorInfo);
        }
        return $sent;
    }
    
    $sql="SELECT id,price,amount  FROM `modx_crashfix_tariff`";
    $result = $modx->query($sql);
    $tariffs = $result->fetchAll(PDO::FETCH_ASSOC);
    $tariffArr = array(); // массив тарифов
    foreach($tariffs as $tariff) {
        $t_id= $tariff['id'];
        $tariffArr[$t_id] = array(
        'id'=>$t_id,
        'price'=>$tariff['price'],
        'amount'=>$tariff['amount']
        );
    }
    
    $q = $modx->newQuery('modUserProfile');
    $q->innerJOIN('modUser','User', 'modUserProfile.internalKey = User.id');
    $q->select('User.id, modUserProfile.zip, modUserProfile.fax, modUserProfile.comment, modUserProfile.dob, modUserProfile.gender');
    $where = array('User.primary_group'=>3);
    $q->where($where);
    $q->prepare();
    $result = $modx->query($q->toSQL());
    $users = $result->fetchAll(PDO::FETCH_ASSOC);
    $today =  date('d.m.Y 00:00:00');
    $timestamp = strtotime($today);
    
    foreach($users as $user) {
        $user_id=$user['id'];
        $tarifId = $user['zip']; // id тарифа 
        $userMoney = $user['fax']; // денег  на счету
        
        $tarifPrice = $tariffArr[$tarifId]['price'];
        $tarifAmount = $tariffArr[$tarifId]['amount'];
       // var_dump($tariffArr[$tarifId]);
        if ($tarifPrice > $userMoney){
            $sql="UPDATE modx_user_attributes SET gender = 0, comment =0, dob=0 WHERE id = $user_id";
        }
        else{
            $newUserMoney = $userMoney - $tarifPrice;
            $lastDate = $timestamp + floor($newUserMoney / $tarifPrice)*24*3600;// кол-во дней до бана
            
            $sql="UPDATE modx_user_attributes SET gender = 1, fax = $newUserMoney, comment =$tarifAmount, dob=$lastDate WHERE id = $user_id";
        }

    $q=$modx->prepare($sql);
    $q->execute();
}