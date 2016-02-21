<?php
$user_id = $modx->user->id;
    $sql = "SELECT ticket_id FROM  `modx_crashfix_access` WHERE user_id = $user_id AND deleted = 0 ORDER BY  `take` DESC ";
    $result = $modx->query($sql);
    $tickets = $result->fetchAll(PDO::FETCH_ASSOC);
    $resources = array();
    foreach($tickets as $t){
        $resources[] = $t['ticket_id'];
    }
    $output ='';
    $output = implode(",", $resources);
    
$modx->setPlaceholder('ordersIds', $output);