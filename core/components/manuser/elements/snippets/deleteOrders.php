<?php
$tickets = $_POST['ticket_id'];
$resources = array();
$output ='';
if (count($tickets) > 0){
    $output = implode(",", $tickets);
    $user_id = $modx->user->id;
    //$sql ="DELETE FROM `modx_crashfix_access` where user_id = $user_id AND ticket_id IN ($output)";
    
    $sql="UPDATE modx_crashfix_access SET deleted = 1 WHERE user_id = $user_id AND ticket_id IN ($output)";
    $q=$modx->prepare($sql);
    $q->execute();
    
    $q=$modx->prepare($sql);
    $q->execute();
}