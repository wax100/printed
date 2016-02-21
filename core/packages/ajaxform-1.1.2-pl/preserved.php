<?php return array (
  'ef72af78aed8d76a962856623ac5f5c3' => 
  array (
    'criteria' => 
    array (
      'name' => 'ajaxform',
    ),
    'object' => 
    array (
      'name' => 'ajaxform',
      'path' => '{core_path}components/ajaxform/',
      'assets_path' => '',
    ),
  ),
  'bd90020fe9c5a9e0735b297e81128bca' => 
  array (
    'criteria' => 
    array (
      'category' => 'AjaxForm',
    ),
    'object' => 
    array (
      'id' => 15,
      'parent' => 0,
      'category' => 'AjaxForm',
      'rank' => 0,
    ),
  ),
  'e7bc5353621e211ba6cc3d57c861a294' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.AjaxForm.example',
    ),
    'object' => 
    array (
      'id' => 42,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.AjaxForm.example',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '<form action="" method="post" class="ajax_form af_example form-horizontal">

	<div class="control-group">
		<label class="control-label" for="af_name">[[%af_label_name]]</label>
		<div class="controls">
			<input type="text" id="af_name" name="name" value="[[+fi.name]]" placeholder="" class="span4" />
			<span class="error_name">[[+fi.error.name]]</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="af_email">[[%af_label_email]]</label>
		<div class="controls">
			<input type="email" id="af_email" name="email" value="[[+fi.email]]" placeholder="" class="span4" />
			<span class="error_email">[[+fi.error.email]]</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="af_message">[[%af_label_message]]</label>
		<div class="controls">
			<textarea id="af_message" name="message" class="span4" rows="5">[[+fi.message]]</textarea>
			<span class="error_message">[[+fi.error.message]]</span>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button type="reset" class="btn btn-default">[[%af_reset]]</button>
			<button type="submit" class="btn btn-primary">[[%af_submit]]</button>
		</div>
	</div>
	
	[[+fi.success:is=`1`:then=`
		<div class="alert alert-success">[[+fi.successMessage]]</div>
	`]]
	[[+fi.validation_error:is=`1`:then=`
		<div class="alert alert-danger">[[+fi.validation_error_message]]</div>
	`]]
</form>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/ajaxform/elements/chunks/chunk.example.tpl',
      'content' => '<form action="" method="post" class="ajax_form af_example form-horizontal">

	<div class="control-group">
		<label class="control-label" for="af_name">[[%af_label_name]]</label>
		<div class="controls">
			<input type="text" id="af_name" name="name" value="[[+fi.name]]" placeholder="" class="span4" />
			<span class="error_name">[[+fi.error.name]]</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="af_email">[[%af_label_email]]</label>
		<div class="controls">
			<input type="email" id="af_email" name="email" value="[[+fi.email]]" placeholder="" class="span4" />
			<span class="error_email">[[+fi.error.email]]</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="af_message">[[%af_label_message]]</label>
		<div class="controls">
			<textarea id="af_message" name="message" class="span4" rows="5">[[+fi.message]]</textarea>
			<span class="error_message">[[+fi.error.message]]</span>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button type="reset" class="btn btn-default">[[%af_reset]]</button>
			<button type="submit" class="btn btn-primary">[[%af_submit]]</button>
		</div>
	</div>
	
	[[+fi.success:is=`1`:then=`
		<div class="alert alert-success">[[+fi.successMessage]]</div>
	`]]
	[[+fi.validation_error:is=`1`:then=`
		<div class="alert alert-danger">[[+fi.validation_error_message]]</div>
	`]]
</form>',
    ),
  ),
  '592871a93c1a8c85e1b8b5d731cf3f44' => 
  array (
    'criteria' => 
    array (
      'name' => 'AjaxForm',
    ),
    'object' => 
    array (
      'id' => 36,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'AjaxForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 15,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {return false;}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
	$content = $pdo->getChunk($tpl, $scriptProperties);
}
/** @var modChunk $chunk */
elseif (!$content = $modx->getChunk($tpl, $scriptProperties)) {
	return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'/<form.*?class="(.*?)"/\', $content, $matches)) {
	$classes = explode(\' \', $matches[1]);
	if (!in_array($formSelector, $classes)) {
		$classes[] = $formSelector;
		$classes = str_replace(\'class="\' . $matches[1] . \'"\', \'class="\' . implode(\' \', $classes) . \'"\', $matches[0]);
		$content = str_replace($matches[0], $classes, $content);
	}
}
else {
	$content = str_replace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'/<form.*?method="(.*?)"/\', $content)) {
	$content = preg_replace(\'/<form(.*?)method="(.*?)"/\', \'<form\\\\1method="post"\', $content);
}
else {
	$content = str_replace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((strpos($content, \'</form>\') !== false)) {
	if (preg_match(\'/<input.*?name="af_action".*?>/\', $content, $matches)) {
		$content = str_replace($matches[0], \'\', $content);
	}
	$content = str_replace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
	? $_REQUEST[\'af_action\']
	: $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
      'locked' => 0,
      'properties' => 'a:7:{s:4:"form";a:7:{s:4:"name";s:4:"form";s:4:"desc";s:18:"ajaxform_prop_form";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"tpl.AjaxForm.example";s:7:"lexicon";s:19:"ajaxform:properties";s:4:"area";s:0:"";}s:7:"snippet";a:7:{s:4:"name";s:7:"snippet";s:4:"desc";s:21:"ajaxform_prop_snippet";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"FormIt";s:7:"lexicon";s:19:"ajaxform:properties";s:4:"area";s:0:"";}s:12:"frontend_css";a:7:{s:4:"name";s:12:"frontend_css";s:4:"desc";s:26:"ajaxform_prop_frontend_css";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"[[+assetsUrl]]css/default.css";s:7:"lexicon";s:19:"ajaxform:properties";s:4:"area";s:0:"";}s:11:"frontend_js";a:7:{s:4:"name";s:11:"frontend_js";s:4:"desc";s:25:"ajaxform_prop_frontend_js";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:27:"[[+assetsUrl]]js/default.js";s:7:"lexicon";s:19:"ajaxform:properties";s:4:"area";s:0:"";}s:9:"actionUrl";a:7:{s:4:"name";s:9:"actionUrl";s:4:"desc";s:23:"ajaxform_prop_actionUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"[[+assetsUrl]]action.php";s:7:"lexicon";s:19:"ajaxform:properties";s:4:"area";s:0:"";}s:12:"formSelector";a:7:{s:4:"name";s:12:"formSelector";s:4:"desc";s:26:"ajaxform_prop_formSelector";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"ajax_form";s:7:"lexicon";s:19:"ajaxform:properties";s:4:"area";s:0:"";}s:10:"objectName";a:7:{s:4:"name";s:10:"objectName";s:4:"desc";s:24:"ajaxform_prop_objectName";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"AjaxForm";s:7:"lexicon";s:19:"ajaxform:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/ajaxform/elements/snippets/snippet.ajaxform.php',
      'content' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {return false;}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
	$content = $pdo->getChunk($tpl, $scriptProperties);
}
/** @var modChunk $chunk */
elseif (!$content = $modx->getChunk($tpl, $scriptProperties)) {
	return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'/<form.*?class="(.*?)"/\', $content, $matches)) {
	$classes = explode(\' \', $matches[1]);
	if (!in_array($formSelector, $classes)) {
		$classes[] = $formSelector;
		$classes = str_replace(\'class="\' . $matches[1] . \'"\', \'class="\' . implode(\' \', $classes) . \'"\', $matches[0]);
		$content = str_replace($matches[0], $classes, $content);
	}
}
else {
	$content = str_replace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'/<form.*?method="(.*?)"/\', $content)) {
	$content = preg_replace(\'/<form(.*?)method="(.*?)"/\', \'<form\\\\1method="post"\', $content);
}
else {
	$content = str_replace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((strpos($content, \'</form>\') !== false)) {
	if (preg_match(\'/<input.*?name="af_action".*?>/\', $content, $matches)) {
		$content = str_replace($matches[0], \'\', $content);
	}
	$content = str_replace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
	? $_REQUEST[\'af_action\']
	: $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
    ),
  ),
);