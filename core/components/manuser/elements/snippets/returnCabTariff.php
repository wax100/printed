<?php
$tar_id=(int)$tar_id;
if ($tar_id<1) return;
$sql="SELECT *  FROM `modx_crashfix_tariff` WHERE id=$tar_id";
$result = $modx->query($sql);
$progs = $result->fetchAll(PDO::FETCH_ASSOC);

$name = $progs[0]['name'];
$amount = $progs[0]['amount'];

$modx->setPlaceholder('tariff_name', $name);
$modx->setPlaceholder('tariff_amount', $amount);