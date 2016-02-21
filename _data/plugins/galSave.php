id: 7
source: 3
name: galSave
properties: 'a:0:{}'

-----

var_Dump($modx->event->name);

switch ($modx->event->name)
{

    case 'OnResourceDuplicate':{
        $newResource = $modx->event->params['newResource'];
          $id=$newResource->get('id');
          $tv = $modx->getObject('modTemplateVarResource',array ('tmplvarid'=>2,'contentid' => $id));
          if (isset($tv))
           {
             $tv->remove();
           }
           break;
    }
    
    case 'OnDocFormSave':
        var_dump($mode);
        
        $GalleryProcessorPath = $modx->getOption('gallery.core_path',$config,$modx->getOption('core_path').'components/gallery/').'processors/';
        $options = array('processors_path'=>$GalleryProcessorPath);
    
    
        if (is_null($resource)){
            $resource = $modx->event->params['newResource'];
        }
        /*if ($mode == 'new'){
            $resource = $modx->event->params['newResource'];
        }*/
        
        $galleryName = $resource->get('pagetitle');

        //Получаем все TV текущего ресурса
        $tvs = $resource->getTemplateVars();
        foreach($tvs as $tv) {
            //нам нужны только TV с типом galleryalbumview
            if ($tv->get('type')=='galleryalbumview') {
                $tvvalue = $tv->getValue($id);
                if (empty($tvvalue)) {
                    //Параметры TV
                    $tv_prop = $tv->get('properties');
                    //Создаем альбом
                    $album = array(
                        'name' => $galleryName,
                        'parent' => isset($tv_prop['galParentId']['value'])?$tv_prop['galParentId']['value']:0,
                        'description' => '',
                        'active' => 1,
                        'prominent' => 0
                    );
                    $resp = $modx->runProcessor('mgr/album/create',$album,$options);
                    if (!$resp->isError()) {
                        $album = $resp->getObject();
                        $tv->setValue($id,$album['id']);
                        $tv->save();
                    }
                    
                } else {
                    // TV уже есть, обновим название альбома
                    $resp = $modx->runProcessor('mgr/album/get',array('id'=>$tvvalue),$options);
                    if (!$resp->isError()) {
                        $album = $resp->getObject();
                        $album['name'] = $galleryName;
                        $modx->runProcessor('mgr/album/update',$album,$options);    
                    }

                }
            }
        }
        break;
}