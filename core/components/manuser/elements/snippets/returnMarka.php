<?php
//$modx->cacheManager->delete('markaAuto');
 if (is_null($modx->cacheManager->get('markaAuto'))) {
    $sql="SELECT id,marka  FROM `modx_crashfix_marka`";
    $result = $modx->query($sql);
    $markas = $result->fetchAll(PDO::FETCH_ASSOC);
    $markaArr = array(); // массив тарифов
    $output='';
    foreach($markas as $marka) {
        $output.="<option data-marka='".$marka['id']."' value='".$marka['marka']."'>".$marka['marka']."</option>";
    }
     
     $modx->cacheManager->set('markaAuto',$output);
 }
 else{
     $output= $modx->cacheManager->get('markaAuto');
 }

return $output;