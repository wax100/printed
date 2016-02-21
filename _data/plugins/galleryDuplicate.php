id: 21
source: 3
name: galleryDuplicate
properties: 'a:0:{}'

-----

if ($modx->event->name=='OnResourceDuplicate') 
{
  $newResource = $modx->event->params['newResource'];
  $id=$newResource->get('id');
  $tv = $modx->getObject('modTemplateVarResource',array ('tmplvarid'=>2,'contentid' => $id));
  if (isset($tv))
   {
     $tv->remove();
   }
}