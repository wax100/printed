id: 23
source: 3
name: clearCache
description: 'При сохранении ресурса, чистится кеш только КОНТЕКСТА этого ресурса, а не всей системы'
properties: 'a:0:{}'

-----

switch($modx->event->name) {
  case 'OnDocFormRender':
	$resource->set('syncsite', 0);
  break;
  
  case 'OnDocFormSave':
    if ($modx->event->params['mode'] != 'upd') {return;}
    $key = $resource->context_key;
    $paths = array('resource/'.$key.'/');
    $options = array('objects' => null, 'extensions' => array('.php', '.log'));
    $s=$modx->cacheManager->clearCache($paths, $options);
  break;
}