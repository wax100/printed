<?php
$group = $user->get('primary_group');
$id=0;

switch($group){
    case 3: 
        $id = 4;
        break;
    case 5:
        $id = 105;
        break;
    default:
     //   $id = 2;
}


if ($id>0){
    //var_Dump($group);
    $url = $modx->makeUrl($id);
    $modx->sendRedirect($url);  
    //return;
}