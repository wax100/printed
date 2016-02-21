<?php

class manuserGroupGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'modUserGroup';
    public $languageTopics = array('user','access','messages');
    public $permission = 'usergroup_view';

    public function initialize() {
        $initialized = parent::initialize();
        $this->setDefaultProperties(array(
            'addAll' => false,
            'addNone' => false,
            'combo' => false,
            'exclude' => $this->modx->getOption('exclude_groups'),
        ));
        return $initialized;
    }

    public function beforeIteration(array $list) {
        if ($this->getProperty('addAll',false)) {
            $list[] = array(
                'id' => '',
                'name' => '('.$this->modx->lexicon('all').')',
                'description' => '',
                'parent' => 0,
            );
        }
        if ($this->getProperty('addNone',false)) {
            $list[] = array(
                'id' => 0,
                'name' => $this->modx->lexicon('none'),
                'description' => '',
                'parent' => 0,
            );
        }
        if ($this->getProperty('combo',false)) {
            $list[] = array(
                'id' => '',
                'name' => ' ('.$this->modx->lexicon('anonymous').') ',
                'description' => '',
                'parent' => 0,
            );
        }
        return $list;
    }

    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $exclude = $this->getProperty('exclude','');
        if (!empty($exclude)) {
            $c->where(array(
                'id:NOT IN' => is_array($exclude) ? $exclude : explode(',',$exclude),
            ));
        }
        return $c;
    }
}
return 'manuserGroupGetListProcessor';
