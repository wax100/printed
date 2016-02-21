<?php
$now=time();
$period = 3600;
$path = $modx->getOption('assets_path').'images/tickets/0/';
$dir = opendir($path) or die("Не могу открыть папку");

while ($file = readdir($dir)){
    if ($file != "." && $file != ".."){
        $time_file=filemtime($path.$file); 
        $time_diff = $now-$time_file;
        if ($time_diff > $period){
            unlink($path.$file);
            $sql = "DELETE FROM `modx_tickets_files` WHERE `file`= '$file'";
            $q=$modx->prepare($sql);
            $q->execute();
        }
       // var_Dump($time_diff);
    }
}