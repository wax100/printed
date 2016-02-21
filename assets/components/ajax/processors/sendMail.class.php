<?php

class sendMail { 
   private $modx;
    
    public function __construct($modx)        {
         $this->modx=$modx;
        }

    public function SendMessage($msg, $email_from, $subject, $email_to){

        $this->modx->getService('mail', 'mail.modPHPMailer');
         $this->modx->mail->set(modMail::MAIL_BODY, $msg);
         if ($email_from ==""){
             $email_from = $this->modx->getOption('emailsender');
         }
         $this->modx->mail->set(modMail::MAIL_FROM, $email_from);
         $this->modx->mail->set(modMail::MAIL_FROM_NAME,  $this->modx->getOption('site_name'));
         $this->modx->mail->set(modMail::MAIL_SUBJECT, $subject);
         $this->modx->mail->address('to', $email_to);
         $this->modx->mail->setHTML(true);
        
        $sent =  $this->modx->mail->send();
         $this->modx->mail->reset();
        return $sent;
    }

}