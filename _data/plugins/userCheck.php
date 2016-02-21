id: 10
source: 3
name: userCheck
properties: 'a:0:{}'

-----

$uid = (int)$_GET['id'];
$admin = $modx->user->get('id');
$exclude =  $modx->getOption('exclude_users');
$exclude=  is_array($exclude) ? $exclude : explode(',',$exclude);

// разрешаем админам смотреть 
foreach ($exclude as $ex ){
    $ex = (int)$ex;
    if ($ex == $admin){
        return true;
    }else{
        if ($_GET['a'] == 'security/user/update'){
            $modx->sendRedirect("/manager/?a=update&namespace=manuser&id=".$uid);
            exit();
        }
    }
}
/*
foreach ($exclude as $ex ){
    $ex = (int)$ex;
    if ($ex == $uid){
        if ($_GET['a'] == 'security/user/update'){
             $modx->sendRedirect("/manager/?a=update&namespace=manuser&id=".$uid);
        exit();
        }
    }
}
*/