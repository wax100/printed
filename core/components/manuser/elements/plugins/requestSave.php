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
    
    if ($modx->event->name != 'OnDocFormSave' || $modx->context->key == 'mgr' ) {return;}
    
    $order = $modx->getObject('modResource', $id);
    $order->set('published', 1);
    $order->joinGroup(2); // добавим в группу только для СТО
    $order->save();
    $properties=array();
    $properties['vin'] = $order->get('pagetitle');
    $properties['content'] = $order->get('content');
    $properties['name'] = $order->getTVvalue('name');
    $properties['phone'] = $order->getTVvalue('phone');
    $properties['email'] = $order->getTVvalue('email');
    $properties['city'] = (string)$order->getTVvalue('city');
    $properties['marka'] = $order->getTVvalue('marka');
    $properties['model'] = $order->getTVvalue('model');
    $properties['year'] = $order->getTVvalue('year');
    $properties['url'] = $modx->makeUrl($id,'','','full');
    
    $q = $modx->newQuery('modUserProfile');
    $q->innerJOIN('modUser','User', 'modUserProfile.internalKey = User.id');
    $q->select('User.id, modUserProfile.email');
    $where = array(
    // 'gender'=>1,
    'active'=>1,
    'User.primary_group'=>3
    //,'comment:>'=>0
    );
    if ($properties['city']!=""){
        $where['city']=$properties['city'];
    }
    
    $q->where($where);
    $q->prepare();
    $result = $modx->query($q->toSQL());
    $subject ='Новый заказ на '.$modx->getOption('site_name');
    $msg = $modx->getChunk('orderEmail',$properties); // админу письмо со всеми данными
    
    if ($result){
        $users = $result->fetchAll(PDO::FETCH_ASSOC);
        $properties['phone'] = '';
        $properties['email'] = '';
        $msg = $modx->getChunk('orderEmail',$properties); // СТО контакты не шлем
        
        foreach($users as $user){
            $user_id=$user['id'];
            // добавляем в таблицу 
             $sql="INSERT INTO  `modx_crashfix_access` (`id` ,`ticket_id` ,`user_id`) VALUES (NULL ,  $id,  $user_id);";
                $q=$modx->prepare($sql);
                $q->execute();
            /*
            
                // уменьшаем кол-во доступных заявок на сегодня
                $sql="UPDATE modx_user_attributes SET comment = comment - 1 WHERE id = $user_id";
                $q=$modx->prepare($sql);
                $q->execute();
                
                $sql="SELECT comment, zip  FROM `modx_user_attributes` WHERE id=$user_id";
                $result = $modx->query($sql);
                $amountArr = $result->fetchAll(PDO::FETCH_ASSOC);
                $amount = (int)$amountArr[0]['comment'];
                $tariff = (int)$amountArr[0]['zip'];
            */
            send($user['email'], $msg, $subject);
            
            // если тариф не анлим и заявок 0 и меньше - то блокируем
            /* if ($amount < 1 && $tariff != 1) {
                $sql="UPDATE modx_user_attributes SET gender = 0 WHERE id = $user_id";
                $q=$modx->prepare($sql);
                $q->execute();
            }*/
        }
    }
    
    
    $admin = $modx->getOption('crashfix_email');
    $admins = split(',', $admin);
    foreach ($admins as $adm){
        send($adm, $msg, $subject);
    }
    
   /* if (count($users) ==0) {
        send($admin, $msg, $subject);
    }*/