<?php  return '$eventName = $modx->event->name;
switch ($eventName) {
    case \'OnLoadWebDocument\':
        $modx->lexicon->load(\'sitelang:default\');
        break;
}
return;
';