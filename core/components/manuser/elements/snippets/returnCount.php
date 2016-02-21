<?php
$sql="SELECT count(*)  FROM `modx_site_content` WHERE parent = 6";
$result = $modx->query($sql);
$orders = $result->fetchAll(PDO::FETCH_ASSOC);
$totalOrders = 6300+$orders[0]['count(*)'];

$sql="SELECT count(*)  FROM `modx_users` WHERE primary_group = 3";
$result = $modx->query($sql);
$sto = $result->fetchAll(PDO::FETCH_ASSOC);
$totalSto = 400+$sto[0]['count(*)'];

$modx->setPlaceholder('totalOrders', $totalOrders);
$modx->setPlaceholder('totalSto', $totalSto);