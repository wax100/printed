<?php
if (is_null($modx->cacheManager->get('year'))) {
        $year = date('Y');
        $output='';
        for ($i=0; $i<50; $i++) {
            $output.="<option value='".$year."'>".$year."</option>";
            $year--;
        }
        $modx->cacheManager->set('year',$output);
    }
    else{
        $output= $modx->cacheManager->get('year');
    }
return $output;