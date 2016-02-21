<?php
/**
 * Resolve creating db tables
 *
 * @var xPDOObject $object
 * @var array $options
 */

if ($object->xpdo) {
	/* @var modX $modx */
	$modx =& $object->xpdo;

	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
		case xPDOTransport::ACTION_UPGRADE:
			$modelPath = $modx->getOption('core_path') .'components/lmims/model/';
			$modx->addPackage('lmims',$modelPath);

			$manager = $modx->getManager();

			$manager->removeObjectContainer('modLMIMS');
			$manager->createObjectContainer('modLMIMS');

			/*$level = $modx->getLogLevel();
			$modx->setLogLevel(xPDO::LOG_LEVEL_FATAL);

			$manager->removeField('modLMIMS', 'html');
			$manager->addField('modLMIMS', 'hash', array('after' => 'date'));
			$manager->addField('modLMIMS', 'resource', array('after' => 'hash'));

			$modx->setLogLevel($level);*/

		break;

		case xPDOTransport::ACTION_UNINSTALL:
			break;
	}
}
return true;