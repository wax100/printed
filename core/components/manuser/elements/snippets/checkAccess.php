<?php
$user_id =$modx->user->id;
$res_id = $modx->resource->id;
$group_id = $modx->user->primary_group;

if ($group_id==1) return;

$sql = "SELECT id FROM  `modx_crashfix_access` WHERE user_id = $user_id AND ticket_id = $res_id";

$result = $modx->query($sql);
$tickets = $result->fetchAll(PDO::FETCH_ASSOC);
$count = count($tickets);
if ($count > 0){
    return;
}

$url=$modx->makeUrl(2);
$modx->sendRedirect($url);