<?php
class ManuserGetlistManagerController extends modExtraManagerController {
    public function process(array $scriptProperties = array()) {}
    
    public function initialize() {
        
        $bu = $this->modx->getOption('base_url').'assets/components/manuser/';
        
		$this->addCSS($bu.'css/style.css?v=8');
		$this->addJavascript($bu.'js/mgr/widgets/users/grid.js?v=8');
		$this->addJavascript($bu.'js/mgr/widgets/users/settings.js?v=8');

		parent::initialize();
	}
     public function getTemplateFile() {
        return 'index.tpl';
    }
 
   
}