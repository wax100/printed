<?php
$res_id = $modx->resource->id;
$user_id= $modx->user->id;

$sql="SELECT id  FROM `modx_crashfix_access` WHERE user_id=$user_id AND ticket_id=$res_id AND take=1";
$result = $modx->query($sql);

    $buy = $result->fetchAll(PDO::FETCH_ASSOC);
    $out='<a data-res="[[*id]]" href="[[~[[*id]]]]" id="show_cont">Показать контакты</a>';


if ($buy){
    $phone = $modx->resource->getTVvalue('phone');
    $email = $modx->resource->getTVvalue('email');
    $out = $modx->getChunk('contactsTpl', array('email'=>$email, 'phone'=>$phone));
}
return $out;