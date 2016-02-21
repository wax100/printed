<?php
header('Content-Type: text/html; charset=utf-8');

require_once (dirname((dirname(dirname(dirname(__FILE__)))))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$action = array(
    'send_message',
 );

//if ($_REQUEST['action'] == 'ajax') 
if (in_array($_REQUEST['action'], $action))
{
    $version = $modx->getVersionData();
    if (version_compare($version['full_version'],'2.1.1-pl') >= 0) 
    {
        if ($modx->user->hasSessionContext($modx->context->get('key'))) 
        {
            $_SERVER['HTTP_MODAUTH'] = $_SESSION["modx.{$modx->context->get('key')}.user.token"];
        } else 
        {
            $_SESSION["modx.{$modx->context->get('key')}.user.token"] = 0;
            $_SERVER['HTTP_MODAUTH'] = 0;
        }
    } 
    else 
    {
        $_SERVER['HTTP_MODAUTH'] = $modx->site_id;
    }
    $_REQUEST['HTTP_MODAUTH'] = $_SERVER['HTTP_MODAUTH'];
}
$modx->request->handleRequest(array(
    'processors_path' => $modx->getOption('assets_path').'components/ajax/processors/'
    ,'location' => ''
));