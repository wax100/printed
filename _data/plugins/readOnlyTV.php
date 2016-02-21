id: 26
source: 3
name: readOnlyTV
properties: 'a:0:{}'
disabled: 1

-----

$modx->controller->addHtml('
	<script>'."
		Ext.onReady(function() {		
            document.getElementById(\"tv16\").setAttribute(\"disabled\", \"disabled\");
		});					
		</script>	
	".'</script>');