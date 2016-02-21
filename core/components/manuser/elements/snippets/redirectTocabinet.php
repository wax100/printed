<?php
$group = $modx->user->primary_group;
$res = $modx->resource->id;

$idSto = $modx->getChildIds(4,1);
$idSto[]=$id;

$idRef = $modx->getChildIds(105,1);
$idRef[]=$id;

if ($group == 3){
    if (in_array($res, $idRef)) {
        $url = $modx->makeUrl(105);
        $modx->sendRedirect($url);
    }
}
if ($group == 5){
    if (in_array($res, $idSto)) {
        $url = $modx->makeUrl(4);
        $modx->sendRedirect($url);
    }
}