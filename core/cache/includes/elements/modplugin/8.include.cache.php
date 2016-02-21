<?php
if ($modx->event->name == 'OnDocFormPrerender') {    
	if (!$id = $modx->controller->resourceArray['id']) {
		return;
	}
    $childTemplates = "Контекст: <b>".$resource->get('context_key')."</b>";
	
	$modx->controller->addHtml('
	<script>'."
		Ext.onReady(function() {		
			var title = Ext.select('#modx-resource-header');
			var pagetitle = Ext.select('#modx-resource-pagetitle');
			
			title.createChild('<p style=\"padding-bottom: 15px;\">$childTemplates</p>');
			pagetitle.on('keyup', function(){
				title.createChild('<p style=\"padding-bottom: 15px;\">$childTemplates</p>');
			});			
		});					
		</script>	
	".'</script>');
	
	return;
}
return;
