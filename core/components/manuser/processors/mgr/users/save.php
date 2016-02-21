<?php
    
    if (empty($scriptProperties['id'])) 
    return $modx->error->failure('Ошибка, пользователь не найден.');
    
    $data = json_decode($scriptProperties['data'],1);
    //if (empty($data['fullname']) || empty($data['phone']) ||empty($data['email']) || empty($data['city']) ||empty($data['inn']) ||empty($data['kpp']) ||empty($data['zip']) ){
    if (empty($data['fullname']) || empty($data['phone']) ||empty($data['email']) || empty($data['city']) ||empty($data['inn']) ||empty($data['kpp']) ){
        return $modx->error->failure('Необходимо заполнить все поля!');
    }
    
    $expr = '/^[+][7][-]\d{3}[-]\d{3}[-]\d{2}[-]\d{2}$/';
    $phone = $data['phone'];
    
    if (preg_match($expr, $phone)){
        $sql ="SELECT `id` from `modx_user_attributes` WHERE `phone` = '$phone'";
        $result = $modx->query($sql);
        $resultArr = $result->fetchAll(PDO::FETCH_ASSOC);
        $id = (int)$resultArr[0]['id'];
        //var_Dump($sql);
        
        if ($id!=0 && $id!=(int)$scriptProperties['id']){
            return $modx->error->failure('Такой телефон уже зарегистрирован!');
        }
    }else {
        return $modx->error->failure('Неправильный формат телефона. Необходимый формат +7-xxx-xxx-xx-xx');
    }
    
    $email =$data['email'];
    $sql ="SELECT `id` from `modx_user_attributes` WHERE `email` = '$email'";
        $result = $modx->query($sql);
        $resultArr = $result->fetchAll(PDO::FETCH_ASSOC);
        $id = (int)$resultArr[0]['id'];
        if ($id!=0 && $id!=$scriptProperties['id']){
            return $modx->error->failure('Такой email уже зарегистрирован!');
        }
    
    $user = $modx->getObject('modUser', $scriptProperties['id']);
    $profile = $user->getOne('Profile');
    $user->set('username', $email);
    $return = $user->save();
    if ($return == false) {
        return $modx->error->failure('Ошибка при сохранении');
    }
    $extended = $profile->get('extended');
    foreach($extended as $key => $value){
        if ($value != $data[$key]){
            $extended[$key] = $data[$key];
        }
    }
    $profile->set('extended', $extended );
    
    foreach($data as $key => $value){
        if ($profile->get($key) != $value){
            $profile->set($key, $value);
        }
    }
    $return = $profile->save();
    
    if ($return == false) {
        return $modx->error->failure('Ошибка при сохранении');
    }
    return $modx->error->success('');
?>
