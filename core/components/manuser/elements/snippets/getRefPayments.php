<?php
$path = MODX_CORE_PATH . 'components/pdotools/model/pdotools/';
$pdoFetch = $modx->getService('pdofetch','pdoFetch', $path, $scriptProperties);

ini_set('display_errors',1);

$leftJoin=array();
$class = 'CrashfixAccess';
$where = array('ref_id' => $modx->user->id);

// Fields to select
$select = array(
	'CrashfixAccess' => $modx->getSelectColumns($class, $class)
);

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
	//'leftJoin' => $modx->toJSON($leftJoin),
	'select' => $modx->toJSON($select),
	'sortby' => 'date_take',
	'sortdir' => 'DESC',
	'groupby' => $class.'.id'
);

$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$rows = $pdoFetch->run();

return $rows;