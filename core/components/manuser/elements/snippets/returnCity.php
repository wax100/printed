<?php
//$modx->cacheManager->delete('markaAuto');
 //if (is_null($modx->cacheManager->get('cityList'))) {
    $sql="SELECT city  FROM `modx_crashfix_city`";
    $result = $modx->query($sql);
    $city = $result->fetchAll(PDO::FETCH_ASSOC);
    //$output='<option value="">Выберите город</option>';
    foreach($city as $c) {
        if ($c['city'] == $selected){
            $output.="<option selected value='".$c['city']."'>".$c['city']."</option>";
        }
        else{
            $output.="<option value='".$c['city']."'>".$c['city']."</option>";
        }
        
    }
     $modx->cacheManager->set('cityList',$output);
/* }
 else{
     $output= $modx->cacheManager->get('cityList');
 }*/

return $output;