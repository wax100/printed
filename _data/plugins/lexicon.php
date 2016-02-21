id: 22
source: 3
name: lexicon
properties: 'a:0:{}'

-----

$eventName = $modx->event->name;
switch ($eventName) {
    case 'OnLoadWebDocument':
        $modx->lexicon->load('sitelang:default');
        break;
}