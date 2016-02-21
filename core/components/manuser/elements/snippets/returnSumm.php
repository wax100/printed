<?php
//$modx->cacheManager->delete('markaAuto');
 if (is_null($modx->cacheManager->get('summList'))) {
    $sql="SELECT id, paid  FROM `modx_crashfix_summ` ORDER BY summ ASC";
    $result = $modx->query($sql);
    $city = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach($city as $c) {
        $output.="<option value='".$c['id']."'>".$c['paid']." руб.</option>";
    }
     $modx->cacheManager->set('summList',$output);
 }
 else{
     $output= $modx->cacheManager->get('summList');
 }

return $output;