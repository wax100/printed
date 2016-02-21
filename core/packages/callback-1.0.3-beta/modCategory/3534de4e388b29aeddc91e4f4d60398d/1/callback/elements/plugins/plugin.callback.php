<?php
    $corePath = $modx->getOption('callback.core_path', null, $modx->getOption('core_path') . 'components/callback/');
    $modx->lexicon->load('callback:default');
    switch ($modx->event->name) {
       case 'OnLoadWebDocument':{
            $modx->regClientCSS('assets/components/callback/css/callback.css');
            $modx->regClientScript('assets/components/callback/js/jquery.maskedinput.js');
            $modx->regClientScript('assets/components/callback/js/jquery.countDown.js');
            $modx->regClientScript('assets/components/callback/js/callback.js');
            }
    }
    return '$_lang';
