id: 20
name: selfLink
description: 'To navigate up, next or previous from the current resource or from the given resource'
properties: null

-----

/**
 * selfLink
 * To navigate up, next or previous from the current resource or from the given resource
 *
 * Options
 *
 * id - The id where the direction is from. Default the current resource id
 * direction - To create a link in the direction up, previous or next
 * tpl - The chunkname wich is used for the view of the link
 * linktext - The text used for the link instead of the pagetitle
 * linkcls - The class set for the link. Default set to "direction" value.
 * sortby - The field to sort on. Default set to "menuindex".
 *
 * Example usage:
 * [[selfLink? &id=`[[*id]]` &direction=`next` &tpl=`commonName`]]
 *
 * @author Bert Oost at OostDesign <bert@oostdesign.com>
 * @author Bruno Perner <b.perner@gmx.de>
 * @supporter: Anselm Hannemann (www.novolo.de)
 * @version 1.0.0-pl
 */
$resource = $modx->getOption('id', $scriptProperties, $modx->resource->get('id'));
$resourceClass = $modx->getOption('class_key', $scriptProperties, 'modResource');
$direction = $modx->getOption('direction', $scriptProperties, false);
$tpl = $modx->getOption('tpl', $scriptProperties, false);
$linktxt = $modx->getOption('linktext', $scriptProperties, false);
$linkcls = $modx->getOption('linkcls', $scriptProperties, '');
$sortby = $modx->getOption('sortby', $scriptProperties, 'menuindex');

if($res = $modx->getObject($resourceClass, $resource)) {
	
	$menuindex = $res->get('menuindex');
	$parentid = $res->get('parent');
	$c = $modx->newQuery($resourceClass);
	$c->limit(1);

	switch($direction) {
		case 'up':
		case 'parent':
			$c->where(array('id' => $parentid));
		break;
        
		case 'next':
		case 'prev':
		case 'previous':
			$c->where(array('id:!=' => $resource));
			$c->where(array('parent' => $parentid));
			$c->where(array('published' => true));
			$c->where(array('deleted' => false));
		break;
	}
	
	switch($direction) {
		case 'next':
			$c->where("IF(menuindex = ". $menuindex .", id > ". $resource .", menuindex >". $menuindex . ")" , xPDOQuery::SQL_AND);		
			$c->sortby($sortby,'ASC');
		break;
        
		case 'prev':
		case 'previous':
			$c->where("IF(menuindex = ". $menuindex .", id < ". $resource .", menuindex <". $menuindex . ")" , xPDOQuery::SQL_AND);		
			$c->sortby($sortby,'DESC');
		break;
	}
	
	if($linkResource = $modx->getObject($resourceClass, $c)) {
		
		// build placeholders
		$placeholders = array(
			'id' => $linkResource->get('id'),
			'pagetitle' => (!empty($linktxt)) ? $linktxt : $linkResource->get('pagetitle'), 
			'longtitle' => (!empty($linktxt)) ? $linktxt : $linkResource->get('longtitle'),
			'menutitle' => (!empty($linktxt)) ? $linktxt : $linkResource->get('menutitle'),
            'linkcls' => (!empty($linkcls)) ? $linkcls : $direction,
		);
		
		// parse chunk
		$chunk = $modx->getObject('modChunk', array('name' => $tpl));
		if(empty($chunk) || !is_object($chunk)) {
            
			$useChunk = '<a href="[[~[[+id]]]]" class="[[+linkcls]]">[[+menutitle:isempty=`[[+pagetitle]]`]]</a>';
			$chunk = $modx->newObject('modChunk');
			$chunk->setCacheable(false);
			$chunk->setContent($useChunk);
		}
		
		return $chunk->process($placeholders);
	}
}