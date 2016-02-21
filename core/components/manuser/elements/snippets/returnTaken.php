<?php
//$sql="SELECT count(*), user_id  FROM `modx_crashfix_access` WHERE ticket_id = $id AND take=1";
$sql="SELECT id, deleted, take  FROM `modx_crashfix_access` WHERE ticket_id = $id AND take=1";
$result = $modx->query($sql);
$orders = $result->fetchAll(PDO::FETCH_ASSOC);
$total=0;
 $deleted ='';
 $take ='';

if ($orders){
    $total = count($orders);
    $user_id = $modx->user->id;
    $sql="SELECT deleted, take  FROM `modx_crashfix_access` WHERE ticket_id = $id AND user_id = $user_id";
    $result = $modx->query($sql);
    $orders = $result->fetchAll(PDO::FETCH_ASSOC);
    
    $deleted = (int)$orders[0]['deleted'];
    if ($deleted){
        $deleted='danger';
    }
    else{
    $deleted='';
    }
    $take = (int)$orders[0]['take'];
    if ($take){
        $take='success';
    }else{
    $take='';
    }

}
    $modx->setPlaceholder('deleted', $deleted);
    $modx->setPlaceholder('take', $take);
    $modx->setPlaceholder('totalTaken', $total);
return $total;