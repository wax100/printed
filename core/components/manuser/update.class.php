<?php
    /**
        * @package modx
        * @subpackage manager.controllers
    */
    /**
        * Loads update user page
        *
        * @package modx
        * @subpackage manager.controllers
    */
    class ManuserUpdateManagerController extends modManagerController {
        /** @var string $onUserFormRender */
        public $onUserFormRender = '';
        /** @var array $extendedFields */
        public $extendedFields = array();
        /** @var array $remoteFields */
        public $remoteFields = array();
        /** @var modUser $user */
        public $user;
        
        /**
            * Check for any permissions or requirements to load page
            * @return bool
        */
        public function checkPermissions() {
            $uid = (int)$_GET['id'];
            $cur_uid = $this->modx->user->get('id');
            $exclude =  $this->modx->getOption('exclude_users');
            $exclude=  is_array($exclude) ? $exclude : explode(',',$exclude);
            
            foreach ($exclude as $ex ){
                $ex = (int)$ex;
                if ($ex == $uid && $cur_uid !=$uid){
                    $this->failure('У вас нет прав на редактирование этого пользователя');
                    return false;
                }
            }
            
            
            return $this->modx->hasPermission('edit_user');
        }
        
        /**
            * Register custom CSS/JS for the page
            * @return void
        */
        public function loadCustomCssJs() {
            $mgrUrl = $this->modx->getOption('manager_url',null,MODX_MANAGER_URL);
            $this->addHtml('<script type="text/javascript">
            // <![CDATA[
            MODx.onUserFormRender = "'.$this->onUserFormRender.'";
            // ]]>
            </script>');
            
            $bu = $this->modx->getOption('base_url').'assets/components/manuser/';
            /* register JS scripts */
            $this->addJavascript($mgrUrl.'assets/modext/widgets/core/modx.orm.js');
            $this->addJavascript($mgrUrl.'assets/modext/widgets/core/modx.grid.settings.js');
            $this->addJavascript($bu.'js/mgr/widgets/security/modx.grid.user.settings.js');
            $this->addJavascript($bu.'js/mgr/widgets/security/modx.grid.user.group.js');
            $this->addJavascript($bu.'js/mgr/widgets/security/modx.panel.user.js');
            $this->addJavascript($bu.'js/mgr/widgets/security/update.js');
            $this->addHtml('<script type="text/javascript">
            // <![CDATA[
            Ext.onReady(function() {
            MODx.load({
            xtype: "modx-page-user-update"
            ,user: "'.$this->user->get('id').'"
            '.(!empty($this->remoteFields) ? ',remoteFields: '.$this->modx->toJSON($this->remoteFields) : '').'
            '.(!empty($this->extendedFields) ? ',extendedFields: '.$this->modx->toJSON($this->extendedFields) : '').'
            });
            });
            // ]]>
            </script>');
        }
        
        /**
            * Custom logic code here for setting placeholders, etc
            * @param array $scriptProperties
            * @return mixed
        */
        public function process(array $scriptProperties = array()) {
            $placeholders = array();
            
            /* get user */
            if (empty($scriptProperties['id']) || strlen($scriptProperties['id']) !== strlen((integer)$scriptProperties['id'])) {
                return $this->failure($this->modx->lexicon('user_err_ns'));
            }
            $this->user = $this->modx->getObject('modUser', array('id' => $scriptProperties['id']));
            if ($this->user == null) return $this->failure($this->modx->lexicon('user_err_nf'));
            
            /* process remote data, if existent */
            $this->remoteFields = array();
            $remoteData = $this->user->get('remote_data');
            if (!empty($remoteData)) {
                $this->remoteFields = $this->_parseCustomData($remoteData);
            }
            
            /* parse extended data, if existent */
            $this->user->getOne('Profile');
            if ($this->user->Profile) {
                $this->extendedFields = array();
                $extendedData = $this->user->Profile->get('extended');
                if (!empty($extendedData)) {
                    $this->extendedFields = $this->_parseCustomData($extendedData);
                }
            }
            
            /* invoke OnUserFormPrerender event */
            $onUserFormPrerender = $this->modx->invokeEvent('OnUserFormPrerender', array(
            'id' => $this->user->get('id'),
            'user' => &$this->user,
            'mode' => modSystemEvent::MODE_UPD,
            ));
            if (is_array($onUserFormPrerender)) {
                $onUserFormPrerender = implode('',$onUserFormPrerender);
            }
            $placeholders['OnUserFormPrerender'] = $onUserFormPrerender;
            
            /* invoke OnUserFormRender event */
            $onUserFormRender = $this->modx->invokeEvent('OnUserFormRender', array(
            'id' => $this->user->get('id'),
            'user' => &$this->user,
            'mode' => modSystemEvent::MODE_UPD,
            ));
            if (is_array($onUserFormRender)) $onUserFormRender = implode('',$onUserFormRender);
            $this->onUserFormRender = str_replace(array('"',"\n","\r"),array('\"','',''),$onUserFormRender);
            $placeholders['OnUserFormRender'] = $this->onUserFormRender;
            
            return $placeholders;
        }
        
        private function _parseCustomData(array $remoteData = array(),$path = '') {
            $fields = array();
            foreach ($remoteData as $key => $value) {
                $field = array(
                'name' => $key,
                'id' => (!empty($path) ? $path.'.' : '').$key,
                );
                if (is_array($value)) {
                    $field['iconCls'] = 'icon-folder';
                    $field['text'] = $key;
                    $field['leaf'] = false;
                    $field['children'] = $this->_parseCustomData($value,$key);
                    } else {
                    $v = $value;
                    if (strlen($v) > 30) { $v = substr($v,0,30).'...'; }
                    $field['iconCls'] = 'icon-terminal';
                    $field['text'] = $key.' - <i>'.$v.'</i>';
                    $field['leaf'] = true;
                    $field['value'] = $value;
                }
                $fields[] = $field;
            }
            return $fields;
        }
        
        /**
            * Return the pagetitle
            *
            * @return string
        */
        public function getPageTitle() {
            return $this->modx->lexicon('user').': '.$this->user->get('username');
        }
        
        /**
            * Return the location of the template file
            * @return string
        */
        public function getTemplateFile() {
            return 'update.tpl';
        }
        
        /**
            * Specify the language topics to load
            * @return array
        */
        public function getLanguageTopics() {
            return array('user','setting','access');
        }
        
        /**
            * Get the Help URL
            * @return string
        */
        public function getHelpUrl() {
            return 'Users';
        }
    }