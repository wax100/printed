<?php
$path = MODX_CORE_PATH . 'components/pdotools/model/pdotools/';
    $pdoFetch = $modx->getService('pdofetch','pdoFetch', $path, $scriptProperties);
    
    //ini_set('display_errors',1);
    
    $leftJoin=array(
    'Pays' => array('class' => 'CrashfixAccess', 'on' => '`Pays`.`user_id` = `modUserProfile`.`id`')
    );
    $class = 'modUserProfile';
    $where = array('mobilephone' => $modx->user->id);
    
    // Fields to select
    $select = array(
	'modUserProfile' => $modx->getSelectColumns($class, $class, '', array('id', 'mobilephone', 'website','photo'))
    );
    $select['Pays'] = 'SUM(Pays.summ) as total_summ';
    
    // Add custom parameters
    foreach (array('where','select','leftJoin') as $v) {
        if (!empty($scriptProperties[$v])) {
            $tmp = $modx->fromJSON($scriptProperties[$v]);
            if (is_array($tmp)) {
                $$v = array_merge($$v, $tmp);
            }
        }
        unset($scriptProperties[$v]);
    }
    
    $default = array(
	'class' => $class,
	'where' => $modx->toJSON($where),
	'leftJoin' => $modx->toJSON($leftJoin),
	'select' => $modx->toJSON($select),
	'sortby' => 'photo',
	'sortdir' => 'DESC',
	'groupby' => 'modUserProfile.id'
    );
    
    $pdoFetch->setConfig(array_merge($default, $scriptProperties));
    $rows = $pdoFetch->run();
return $rows;