<?php
if ((int)$id<1){
    $id=1;
}
$url=$modx->makeUrl($id);
$modx->sendRedirect($url);