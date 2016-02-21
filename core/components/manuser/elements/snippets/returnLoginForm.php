<?php
$group = $modx->user->primary_group;

switch($group){
    case 3: 
        $chunk = 'logoutHeaderSto';
        break;
    case 5:
        $chunk = 'logoutHeaderRef';
        break;
    default:
        $chunk = 'loginTpl';
}
return $modx->getChunk($chunk);