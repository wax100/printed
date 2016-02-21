<?php
$sql="SELECT *  FROM `modx_crashfix_ref_programm` limit 0,100";
    $result = $modx->query($sql);
    $progs = $result->fetchAll(PDO::FETCH_ASSOC);
    $output='';
    $idx=0;
    foreach($progs as $prog){
        $idx++;
        $prog['idx']=$idx;
        $output.=$modx->getChunk('cabinetRefProgrammsTpl', $prog);
    }
    return $output;