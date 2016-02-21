<?php
    $corePath = $modx->getOption('ymaps.core_path', null, $modx->getOption('core_path') . 'components/ymaps/');
    $modx->lexicon->load('ymaps:default');
    switch ($modx->event->name) {
        case 'OnTVInputRenderList':
        $modx->event->output($corePath . 'elements/tv/input/');
        break;
        case 'OnTVInputPropertiesList':
        $modx->event->output($corePath . 'elements/tv/inputoptions/');
        break;
        case 'OnDocFormPrerender':
        $modx->regClientStartupScript('http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU');
        $modx->regClientStartupScript('http://code.jquery.com/jquery-latest.js');
        break;
    }
    return '$_lang';
