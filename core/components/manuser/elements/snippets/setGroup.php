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


$user = $hook->getValue('register.user');
$user->set('primary_group',3);
$user->save();

$profile = $user->getOne('Profile');
$ext = $profile->get('extended');
$ext['phoneActive'] = 0;
$profile->set('extended', $ext);
$profile->set('photo', time());
$profile->save();

$admin = $modx->getOption('crashfix_email');
$subject = 'Регистрация новой СТО';
$msg = "Была зарегистрирована новая СТО №".$user->id;
    $admins = split(',', $admin);
    foreach ($admins as $adm){
        send($adm, $msg, $subject);
    }