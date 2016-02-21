<?php  return array (
  'config' => 
  array (
  ),
  'aliasMap' => 
  array (
    'index/' => 1,
    '404.html' => 2,
    'sitemap.xml' => 3,
    'contacts.html' => 4,
  ),
  'resourceMap' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 2,
      2 => 3,
      3 => 4,
    ),
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnChunkFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnDocFormPrerender' => 
    array (
      2 => '2',
      1 => '1',
      6 => '6',
    ),
    'OnDocFormRender' => 
    array (
      18 => '18',
      14 => '14',
      27 => '27',
      23 => '23',
    ),
    'OnDocFormSave' => 
    array (
      27 => '27',
      5 => '5',
      23 => '23',
      7 => '7',
      14 => '14',
    ),
    'OnEmptyTrash' => 
    array (
      5 => '5',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnFileEditFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnHandleRequest' => 
    array (
      8 => '8',
    ),
    'OnLoadWebDocument' => 
    array (
      14 => '14',
      5 => '5',
      28 => '28',
      22 => '22',
    ),
    'OnPageNotFound' => 
    array (
      27 => '27',
      5 => '5',
    ),
    'OnPluginFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnResourceDuplicate' => 
    array (
      14 => '14',
      21 => '21',
      7 => '7',
    ),
    'OnRichTextBrowserInit' => 
    array (
      4 => '4',
      15 => '15',
    ),
    'OnRichTextEditorInit' => 
    array (
      4 => '4',
      15 => '15',
    ),
    'OnRichTextEditorRegister' => 
    array (
      1 => '1',
      4 => '4',
      15 => '15',
    ),
    'OnSiteRefresh' => 
    array (
      5 => '5',
      3 => '3',
    ),
    'OnSnipFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnTempFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnTVInputPropertiesList' => 
    array (
      6 => '6',
      2 => '2',
    ),
    'OnTVInputRenderList' => 
    array (
      6 => '6',
      2 => '2',
    ),
    'OnTVOutputRenderList' => 
    array (
      2 => '2',
    ),
    'OnTVOutputRenderPropertiesList' => 
    array (
      2 => '2',
    ),
    'OnUserFormPrerender' => 
    array (
      10 => '10',
    ),
    'OnUserSave' => 
    array (
      5 => '5',
    ),
    'OnWebPageComplete' => 
    array (
      5 => '5',
    ),
    'OnWebPagePrerender' => 
    array (
      5 => '5',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_default\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        switch (true) {
            case $mimeType == \'text/html\' && $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $mimeType == \'text/html\' && $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
        }

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'GalleryCustomTV',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Handles plugin events for Gallery\'s Custom TV
 * 
 * @package gallery
 */
$corePath = $modx->getOption(\'gallery.core_path\',null,$modx->getOption(\'core_path\').\'components/gallery/\');
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/inputoptions/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    case \'OnManagerPageBeforeRender\':
        $gallery = $modx->getService(\'gallery\',\'Gallery\',$modx->getOption(\'gallery.core_path\',null,$modx->getOption(\'core_path\').\'components/gallery/\').\'model/gallery/\',$scriptProperties);
        if (!($gallery instanceof Gallery)) return \'\';

        $snippetIds = \'\';
        $gallerySnippet = $modx->getObject(\'modSnippet\',array(\'name\' => \'Gallery\'));
        if ($gallerySnippet) {
            $snippetIds .= \'GAL.snippetGallery = "\'.$gallerySnippet->get(\'id\').\'";\'."\\n";
        }
        $galleryItemSnippet = $modx->getObject(\'modSnippet\',array(\'name\' => \'GalleryItem\'));
        if ($galleryItemSnippet) {
            $snippetIds .= \'GAL.snippetGalleryItem = "\'.$galleryItemSnippet->get(\'id\').\'";\'."\\n";
        }

        $jsDir = $modx->getOption(\'gallery.assets_url\',null,$modx->getOption(\'assets_url\').\'components/gallery/\').\'js/mgr/\';
        $modx->controller->addLexiconTopic(\'gallery:default\');
        $modx->controller->addJavascript($jsDir.\'gallery.js\');
        $modx->controller->addJavascript($jsDir.\'tree.js\');
        $modx->controller->addHtml(\'<script type="text/javascript">
        Ext.onReady(function() {
            GAL.config.connector_url = "\'.$gallery->config[\'connectorUrl\'].\'";
            \'.$snippetIds.\'
        });
        </script>\');
        break;
    case \'OnDocFormPrerender\':
        $gallery = $modx->getService(\'gallery\',\'Gallery\',$modx->getOption(\'gallery.core_path\',null,$modx->getOption(\'core_path\').\'components/gallery/\').\'model/gallery/\',$scriptProperties);
        if (!($gallery instanceof Gallery)) return \'\';

        /* assign gallery lang to JS */
        $modx->controller->addLexiconTopic(\'gallery:tv\');

        /* @var modAction $action */
        $action = $modx->getObject(\'modAction\',array(
            \'namespace\' => \'gallery\',
            \'controller\' => \'index\',
        ));
        $modx->controller->addHtml(\'<script type="text/javascript">
        Ext.onReady(function() {
            GAL.config = {};
            GAL.config.connector_url = "\'.$gallery->config[\'connectorUrl\'].\'";
            GAL.action = "\'.($action ? $action->get(\'id\') : 0).\'";
        });
        </script>\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/tv/Spotlight.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/gallery.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/widgets/album/album.items.view.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/widgets/album/album.tree.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/tv/gal.browser.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/tv/galtv.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/utils/ddview.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/utils/fileuploader.js\');
        $modx->controller->addJavascript($gallery->config[\'assetsUrl\'].\'js/mgr/widgets/album/album.panel.js\');
        $modx->controller->addCss($gallery->config[\'cssUrl\'].\'mgr.css\');
        $modx->controller->addCss($gallery->config[\'cssUrl\'].\'fileuploader.css\');
        break;
        
        
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'phpThumbOfCacheManager',
      'description' => 'Handles cache cleaning when clearing the Site Cache.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * phpThumbOf
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * phpThumbOf is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * phpThumbOf is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package phpthumbof
 */
/**
 * Handles cache management for phpthumbof filter
 *
 * @var \\modX $modx
 * @var array $scriptProperties
 *
 * @package phpthumbof
 */
if (empty($results)) $results = array();

switch ($modx->event->name) {
    case \'OnSiteRefresh\':
        if (!$modx->loadClass(\'modPhpThumb\',$modx->getOption(\'core_path\').\'model/phpthumb/\',true,true)) {
            $modx->log(modX::LOG_LEVEL_ERROR,\'[phpThumbOf] Could not load modPhpThumb class in plugin.\');
            return;
        }
        $assetsPath = $modx->getOption(\'phpthumbof.assets_path\',$scriptProperties,$modx->getOption(\'assets_path\').\'components/phpthumbof/\');
        $phpThumb = new modPhpThumb($modx);
        $cacheDir = $assetsPath.\'cache/\';

        /* clear local cache */
        if (!empty($cacheDir)) {
            /** @var DirectoryIterator $file */
            foreach (new DirectoryIterator($cacheDir) as $file) {
                if (!$file->isFile()) continue;
                @unlink($file->getPathname());
            }
        }

        /* if using amazon s3, clear our cache there */
        $useS3 = $modx->getOption(\'phpthumbof.use_s3\',$scriptProperties,false);
        if ($useS3) {
            $modelPath = $modx->getOption(\'phpthumbof.core_path\',null,$modx->getOption(\'core_path\').\'components/phpthumbof/\').\'model/\';
            /** @var modAws $modaws */
            $modaws = $modx->getService(\'modaws\',\'modAws\',$modelPath.\'aws/\',$scriptProperties);
            $s3path = $modx->getOption(\'phpthumbof.s3_path\',null,\'phpthumbof/\');
            
            $list = $modaws->getObjectList($s3path);
            if (!empty($list) && is_array($list)) {
                foreach ($list as $obj) {
                    if (empty($obj->Key)) continue;

                    $results[] = $modaws->deleteObject($obj->Key);
                }
            }
        }

        break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'TinyMCE',
      'description' => 'TinyMCE 4.3.3-pl plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * TinyMCE RichText Editor Plugin
 *
 * Events: OnRichTextEditorInit, OnRichTextEditorRegister,
 * OnBeforeManagerPageInit, OnRichTextBrowserInit
 *
 * @author Jeff Whitfield <jeff@collabpad.com>
 * @author Shaun McCormick <shaun@collabpad.com>
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package tinymce
 * @subpackage build
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'TinyMCE\');
    return;
}
require_once $modx->getOption(\'tiny.core_path\',null,$modx->getOption(\'core_path\').\'components/tinymce/\').\'tinymce.class.php\';
$tiny = new TinyMCE($modx,$scriptProperties);

$useEditor = $tiny->context->getOption(\'use_editor\',false);
$whichEditor = $tiny->context->getOption(\'which_editor\',\'\');

/* Handle event */
switch ($modx->event->name) {
    case \'OnRichTextEditorInit\':
        if ($useEditor && $whichEditor == \'TinyMCE\') {
            unset($scriptProperties[\'chunk\']);
            if (isset($forfrontend) || $modx->context->get(\'key\') != \'mgr\') {
                $def = $tiny->context->getOption(\'cultureKey\',$tiny->context->getOption(\'manager_language\',\'en\'));
                $tiny->properties[\'language\'] = $modx->getOption(\'fe_editor_lang\',array(),$def);
                $tiny->properties[\'frontend\'] = true;
                unset($def);
            }
            /* commenting these out as it causes problems with richtext tvs */
            //if (isset($scriptProperties[\'resource\']) && !$resource->get(\'richtext\')) return;
            //if (!isset($scriptProperties[\'resource\']) && !$modx->getOption(\'richtext_default\',null,false)) return;
            $tiny->setProperties($scriptProperties);
            $html = $tiny->initialize();
            $modx->event->output($html);
            unset($html);
        }
        break;
    case \'OnRichTextBrowserInit\':
        if ($useEditor && $whichEditor == \'TinyMCE\') {
            $inRevo20 = (boolean)version_compare($modx->version[\'full_version\'],\'2.1.0-rc1\',\'<\');
            $modx->getVersionData();
            $source = $tiny->context->getOption(\'default_media_source\',null,1);
            
            $modx->controller->addHtml(\'<script type="text/javascript">var inRevo20 = \'.($inRevo20 ? 1 : 0).\';MODx.source = "\'.$source.\'";</script>\');
            
            $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/tiny_mce_popup.js\');
            if (file_exists($tiny->config[\'assetsPath\'].\'jscripts/tiny_mce/langs/\'.$tiny->properties[\'language\'].\'.js\')) {
                $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/langs/\'.$tiny->properties[\'language\'].\'.js\');
            } else {
                $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/langs/en.js\');
            }
            $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'tiny.browser.js\');
            $modx->event->output(\'Tiny.browserCallback\');
        }
        return \'\';
        break;

   default: break;
}
return;',
      'locked' => '0',
      'properties' => 'a:39:{s:22:"accessibility_warnings";a:7:{s:4:"name";s:22:"accessibility_warnings";s:4:"desc";s:315:"If this option is set to true some accessibility warnings will be presented to the user if they miss specifying that information. This option is set to true by default, since we should all try to make this world a better place for disabled people. But if you are annoyed with the warnings, set this option to false.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"apply_source_formatting";a:7:{s:4:"name";s:23:"apply_source_formatting";s:4:"desc";s:229:"This option enables you to tell TinyMCE to apply some source formatting to the output HTML code. With source formatting, the output HTML code is indented and formatted. Without source formatting, the output HTML is more compact. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"button_tile_map";a:7:{s:4:"name";s:15:"button_tile_map";s:4:"desc";s:338:"If this option is set to true TinyMCE will use tiled images instead of individual images for most of the editor controls. This produces faster loading time since only one GIF image needs to be loaded instead of a GIF for each individual button. This option is set to false by default since it doesn\'t work with some DOCTYPE declarations. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:7:"cleanup";a:7:{s:4:"name";s:7:"cleanup";s:4:"desc";s:331:"This option enables or disables the built-in clean up functionality. TinyMCE is equipped with powerful clean up functionality that enables you to specify what elements and attributes are allowed and how HTML contents should be generated. This option is set to true by default, but if you want to disable it you may set it to false.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"cleanup_on_startup";a:7:{s:4:"name";s:18:"cleanup_on_startup";s:4:"desc";s:135:"If you set this option to true, TinyMCE will perform a HTML cleanup call when the editor loads. This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"convert_fonts_to_spans";a:7:{s:4:"name";s:22:"convert_fonts_to_spans";s:4:"desc";s:348:"If you set this option to true, TinyMCE will convert all font elements to span elements and generate span elements instead of font elements. This option should be used in order to get more W3C compatible code, since font elements are deprecated. How sizes get converted can be controlled by the font_size_classes and font_size_style_values options.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"convert_newlines_to_brs";a:7:{s:4:"name";s:23:"convert_newlines_to_brs";s:4:"desc";s:128:"If you set this option to true, newline characters codes get converted into br elements. This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"convert_urls";a:7:{s:4:"name";s:12:"convert_urls";s:4:"desc";s:495:"This option enables you to control whether TinyMCE is to be clever and restore URLs to their original values. URLs are automatically converted (messed up) by default because the built-in browser logic works this way. There is no way to get the real URL unless you store it away. If you set this option to false it will try to keep these URLs intact. This option is set to true by default, which means URLs will be forced to be either absolute or relative depending on the state of relative_urls.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"dialog_type";a:7:{s:4:"name";s:11:"dialog_type";s:4:"desc";s:246:"This option enables you to specify how dialogs/popups should be opened. Possible values are "window" and "modal", where the window option opens a normal window and the dialog option opens a modal dialog. This option is set to "window" by default.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{i:0;s:6:"window";s:4:"text";s:6:"Window";}i:1;a:2:{i:0;s:5:"modal";s:4:"text";s:5:"Modal";}}s:5:"value";s:6:"window";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"directionality";a:7:{s:4:"name";s:14:"directionality";s:4:"desc";s:261:"This option specifies the default writing direction. Some languages (Like Hebrew, Arabic, Urdu...) write from right to left instead of left to right. The default value of this option is "ltr" but if you want to use from right to left mode specify "rtl" instead.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"ltr";s:4:"text";s:13:"Left to Right";}i:1;a:2:{s:5:"value";s:3:"rtl";s:4:"text";s:13:"Right to Left";}}s:5:"value";s:3:"ltr";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"element_format";a:7:{s:4:"name";s:14:"element_format";s:4:"desc";s:210:"This option enables control if elements should be in html or xhtml mode. xhtml is the default state for this option. This means that for example &lt;br /&gt; will be &lt;br&gt; if you set this option to "html".";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:5:"xhtml";s:4:"text";s:5:"XHTML";}i:1;a:2:{s:5:"value";s:4:"html";s:4:"text";s:4:"HTML";}}s:5:"value";s:5:"xhtml";s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"entity_encoding";a:7:{s:4:"name";s:15:"entity_encoding";s:4:"desc";s:70:"This option controls how entities/characters get processed by TinyMCE.";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:0:"";s:4:"text";s:4:"None";}i:1;a:2:{s:5:"value";s:5:"named";s:4:"text";s:5:"Named";}i:2;a:2:{s:5:"value";s:7:"numeric";s:4:"text";s:7:"Numeric";}i:3;a:2:{s:5:"value";s:3:"raw";s:4:"text";s:3:"Raw";}}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"force_p_newlines";a:7:{s:4:"name";s:16:"force_p_newlines";s:4:"desc";s:147:"This option enables you to disable/enable the creation of paragraphs on return/enter in Mozilla/Firefox. The default value of this option is true. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"force_hex_style_colors";a:7:{s:4:"name";s:22:"force_hex_style_colors";s:4:"desc";s:277:"This option enables you to control TinyMCE to force the color format to use hexadecimal instead of rgb strings. It converts for example "color: rgb(255, 255, 0)" to "#FFFF00". This option is set to true by default since otherwice MSIE and Firefox would differ in this behavior.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"height";a:7:{s:4:"name";s:6:"height";s:4:"desc";s:38:"Sets the height of the TinyMCE editor.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"400px";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"indentation";a:7:{s:4:"name";s:11:"indentation";s:4:"desc";s:139:"This option allows specification of the indentation level for indent/outdent buttons in the UI. This defaults to 30px but can be any value.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"30px";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"invalid_elements";a:7:{s:4:"name";s:16:"invalid_elements";s:4:"desc";s:163:"This option should contain a comma separated list of element names to exclude from the content. Elements in this list will removed when TinyMCE executes a cleanup.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"nowrap";a:7:{s:4:"name";s:6:"nowrap";s:4:"desc";s:212:"This nowrap option enables you to control how whitespace is to be wordwrapped within the editor. This option is set to false by default, but if you enable it by setting it to true editor contents will never wrap.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"object_resizing";a:7:{s:4:"name";s:15:"object_resizing";s:4:"desc";s:148:"This option gives you the ability to turn on/off the inline resizing controls of tables and images in Firefox/Mozilla. These are enabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"path_options";a:7:{s:4:"name";s:12:"path_options";s:4:"desc";s:119:"Sets a group of options. Note: This will override the relative_urls, document_base_url and remove_script_host settings.";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:11:"docrelative";s:4:"text";s:17:"Document Relative";}i:1;a:2:{s:5:"value";s:12:"rootrelative";s:4:"text";s:13:"Root Relative";}i:2;a:2:{s:5:"value";s:11:"fullpathurl";s:4:"text";s:13:"Full Path URL";}}s:5:"value";s:11:"docrelative";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"plugin_insertdate_dateFormat";a:7:{s:4:"name";s:28:"plugin_insertdate_dateFormat";s:4:"desc";s:53:"Formatting of dates when using the InsertDate plugin.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"%Y-%m-%d";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"plugin_insertdate_timeFormat";a:7:{s:4:"name";s:28:"plugin_insertdate_timeFormat";s:4:"desc";s:53:"Formatting of times when using the InsertDate plugin.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"%H:%M:%S";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"preformatted";a:7:{s:4:"name";s:12:"preformatted";s:4:"desc";s:231:"If you enable this feature, whitespace such as tabs and spaces will be preserved. Much like the behavior of a &lt;pre&gt; element. This can be handy when integrating TinyMCE with webmail clients. This option is disabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:13:"relative_urls";a:7:{s:4:"name";s:13:"relative_urls";s:4:"desc";s:231:"If this option is set to true, all URLs returned from the file manager will be relative from the specified document_base_url. If it is set to false all URLs will be converted to absolute URLs. This option is set to true by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:17:"remove_linebreaks";a:7:{s:4:"name";s:17:"remove_linebreaks";s:4:"desc";s:531:"This option controls whether line break characters should be removed from output HTML. This option is enabled by default because there are differences between browser implementations regarding what to do with white space in the DOM. Gecko and Safari place white space in text nodes in the DOM. IE and Opera remove them from the DOM and therefore the line breaks will automatically be removed in those. This option will normalize this behavior when enabled (true) and all browsers will have a white-space-stripped DOM serialization.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"remove_script_host";a:7:{s:4:"name";s:18:"remove_script_host";s:4:"desc";s:221:"If this option is enabled the protocol and host part of the URLs returned from the file manager will be removed. This option is only used if the relative_urls option is set to false. This option is set to true by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:20:"remove_trailing_nbsp";a:7:{s:4:"name";s:20:"remove_trailing_nbsp";s:4:"desc";s:392:"This option enables you to specify that TinyMCE should remove any traling &nbsp; characters in block elements if you start to write inside them. Paragraphs are default padded with a &nbsp; and if you write text into such paragraphs the space will remain. Setting this option to true will remove the space. This option is set to false by default since the cursor jumps a bit in Gecko browsers.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:4:"skin";a:7:{s:4:"name";s:4:"skin";s:4:"desc";s:330:"This option enables you to specify what skin you want to use with your theme. A skin is basically a CSS file that gets loaded from the skins directory inside the theme. The advanced theme that TinyMCE comes with has two skins, these are called "default" and "o2k7". We added another skin named "cirkuit" that is chosen by default.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"cirkuit";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"skin_variant";a:7:{s:4:"name";s:12:"skin_variant";s:4:"desc";s:403:"This option enables you to specify a variant for the skin, for example "silver" or "black". "default" skin does not offer any variant, whereas "o2k7" default offers "silver" or "black" variants to the default one. For the "cirkuit" skin there\'s one variant named "silver". When creating a skin, additional variants may also be created, by adding ui_[variant_name].css files alongside the default ui.css.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:20:"table_inline_editing";a:7:{s:4:"name";s:20:"table_inline_editing";s:4:"desc";s:231:"This option gives you the ability to turn on/off the inline table editing controls in Firefox/Mozilla. According to the TinyMCE documentation, these controls are somewhat buggy and not redesignable, so they are disabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"theme_advanced_disable";a:7:{s:4:"name";s:22:"theme_advanced_disable";s:4:"desc";s:111:"This option should contain a comma separated list of controls to disable from any toolbar row/panel in TinyMCE.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:19:"theme_advanced_path";a:7:{s:4:"name";s:19:"theme_advanced_path";s:4:"desc";s:331:"This option gives you the ability to enable/disable the element path. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to "true" by default. Setting this option to "false" will effectively hide the path tool, though it still takes up room in the Status Bar.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:32:"theme_advanced_resize_horizontal";a:7:{s:4:"name";s:32:"theme_advanced_resize_horizontal";s:4:"desc";s:319:"This option gives you the ability to enable/disable the horizontal resizing. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom" and when the theme_advanced_resizing is set to true. This option is set to true by default, allowing both resizing horizontal and vertical.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"theme_advanced_resizing";a:7:{s:4:"name";s:23:"theme_advanced_resizing";s:4:"desc";s:216:"This option gives you the ability to enable/disable the resizing button. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:33:"theme_advanced_statusbar_location";a:7:{s:4:"name";s:33:"theme_advanced_statusbar_location";s:4:"desc";s:257:"This option enables you to specify where the element statusbar with the path and resize tool should be located. This option can be set to "top" or "bottom". The default value is set to "top". This option can only be used when the theme is set to "advanced".";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"top";s:4:"text";s:3:"Top";}i:1;a:2:{s:5:"value";s:6:"bottom";s:4:"text";s:6:"Bottom";}}s:5:"value";s:6:"bottom";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"theme_advanced_toolbar_align";a:7:{s:4:"name";s:28:"theme_advanced_toolbar_align";s:4:"desc";s:187:"This option enables you to specify the alignment of the toolbar, this value can be "left", "right" or "center" (the default). This option can only be used when theme is set to "advanced".";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:6:"center";s:4:"text";s:6:"Center";}i:1;a:2:{s:5:"value";s:4:"left";s:4:"text";s:4:"Left";}i:2;a:2:{s:5:"value";s:5:"right";s:4:"text";s:5:"Right";}}s:5:"value";s:4:"left";s:7:"lexicon";N;s:4:"area";s:0:"";}s:31:"theme_advanced_toolbar_location";a:7:{s:4:"name";s:31:"theme_advanced_toolbar_location";s:4:"desc";s:191:"
This option enables you to specify where the toolbar should be located. This option can be set to "top" or "bottom" (the defualt). This option can only be used when theme is set to advanced.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"top";s:4:"text";s:3:"Top";}i:1;a:2:{s:5:"value";s:6:"bottom";s:4:"text";s:6:"Bottom";}}s:5:"value";s:3:"top";s:7:"lexicon";N;s:4:"area";s:0:"";}s:5:"width";a:7:{s:4:"name";s:5:"width";s:4:"desc";s:32:"The width of the TinyMCE editor.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"95%";s:7:"lexicon";N;s:4:"area";s:0:"";}s:33:"template_selected_content_classes";a:7:{s:4:"name";s:33:"template_selected_content_classes";s:4:"desc";s:234:"Specify a list of CSS class names for the template plugin. They must be separated by spaces. Any template element with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'Tickets',
      'description' => '',
      'editor_type' => '0',
      'category' => '4',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnSiteRefresh\':
		if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
			$modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
		}
		break;


	case \'OnDocFormSave\':
		/* @var Ticket $resource */
		if ($mode == \'new\' && $resource->class_key == "Ticket") {
			$modx->cacheManager->delete(\'tickets/latest.tickets\');
		}
		/* @var TicketsSection $resource */
		if ($mode == \'upd\' && $resource->class_key == \'TicketsSection\') {
			if (method_exists($resource, \'clearCache\')) {
				$resource->clearCache();
			}
		}
		break;


	case \'OnWebPagePrerender\':
		$output = &$modx->resource->_output;
		$output = str_replace(
			array(\'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
			array(\'[\', \']\', \'{\', \'}\'),
			$output
		);
		break;


	case \'OnPageNotFound\':
		// It is working only with friendly urls enabled
		$q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
		$matches = explode(\'/\', rtrim($q, \'/\'));
		if (count($matches) < 2) {
			return;
		}

		$ticket_uri = array_pop($matches);
		$section_uri = implode(\'/\', $matches) . \'/\';

		if ($section_id = $modx->findResource($section_uri)) {
			/** @var TicketsSection $section */
			if ($section = $modx->getObject(\'TicketsSection\', $section_id)) {
				if (is_numeric($ticket_uri)) {
					$ticket_id = $ticket_uri;
				}
				elseif (preg_match(\'#^\\d+#\', $ticket_uri, $tmp)) {
					$ticket_id = $tmp[0];
				}
				else {
					$properties = $section->getProperties(\'tickets\');
					if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
						$pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
						$pcre = preg_replace(\'#(\\%[a-z]+)#\', \'(?:.*?)\', $pcre);
						if (preg_match($pcre, $ticket_uri, $matches)) {
							$ticket_id = $matches[1];
						}
					}
				}
				if (!empty($ticket_id)) {
					if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
						if ($ticket->published) {
							$modx->sendRedirect($modx->makeUrl($ticket_id), array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
						}
						elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
							$modx->sendForward($unp_id);
						}
					}
				}
			}
		}
		break;


	case \'OnLoadWebDocument\':
		$authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
		$key = \'Tickets_User\';

		if (!$authenticated && !$modx->getOption(\'tickets.count_guests\')) {
			return;
		}

		if (empty($_COOKIE[$key])) {
			if (!empty($_SESSION[$key])) {
				$guest_key = $_SESSION[$key];
			}
			else {
				$guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
			}
			setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
		}
		else {
			$guest_key = $_COOKIE[$key];
		}

		if (empty($_SESSION[$key])) {
			$_SESSION[$key] = $guest_key;
		}

		if ($authenticated) {
			/** @var TicketAuthor $profile */
			if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
				$profile = $modx->newObject(\'TicketAuthor\');
				$modx->user->addOne($profile);
			}
			$profile->set(\'visitedon\', time());
			$profile->save();
		}
		break;


	case \'OnWebPageComplete\':
		/** @var Tickets $Tickets */
		$Tickets = $modx->getService(\'tickets\');
		$Tickets->logView($modx->resource->get(\'id\'));
		break;


	case \'OnUserSave\':
		/** @var modUser $user */
		if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
			$profile = $modx->newObject(\'TicketAuthor\');
			$user->addOne($profile);
			$profile->save();
		}
		break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/tickets/elements/plugins/plugin.tickets.php',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'ymaps',
      'description' => 'Generate yMaps TV input',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => '$corePath = $modx->getOption(\'ymaps.core_path\', null, $modx->getOption(\'core_path\') . \'components/ymaps/\');
    $modx->lexicon->load(\'ymaps:default\');
    switch ($modx->event->name) {
        case \'OnTVInputRenderList\':
        $modx->event->output($corePath . \'elements/tv/input/\');
        break;
        case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath . \'elements/tv/inputoptions/\');
        break;
        case \'OnDocFormPrerender\':
        $modx->regClientStartupScript(\'http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU\');
        $modx->regClientStartupScript(\'http://code.jquery.com/jquery-latest.js\');
        break;
    }
    //return \'$_lang\';',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/ymaps/elements/plugins/plugin.ymaps.php',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '3',
      'property_preprocess' => '0',
      'name' => 'galSave',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => 'var_Dump($modx->event->name);

switch ($modx->event->name)
{

    case \'OnResourceDuplicate\':{
        $newResource = $modx->event->params[\'newResource\'];
          $id=$newResource->get(\'id\');
          $tv = $modx->getObject(\'modTemplateVarResource\',array (\'tmplvarid\'=>2,\'contentid\' => $id));
          if (isset($tv))
           {
             $tv->remove();
           }
           break;
    }
    
    case \'OnDocFormSave\':
        var_dump($mode);
        
        $GalleryProcessorPath = $modx->getOption(\'gallery.core_path\',$config,$modx->getOption(\'core_path\').\'components/gallery/\').\'processors/\';
        $options = array(\'processors_path\'=>$GalleryProcessorPath);
    
    
        if (is_null($resource)){
            $resource = $modx->event->params[\'newResource\'];
        }
        /*if ($mode == \'new\'){
            $resource = $modx->event->params[\'newResource\'];
        }*/
        
        $galleryName = $resource->get(\'pagetitle\');

        //Получаем все TV текущего ресурса
        $tvs = $resource->getTemplateVars();
        foreach($tvs as $tv) {
            //нам нужны только TV с типом galleryalbumview
            if ($tv->get(\'type\')==\'galleryalbumview\') {
                $tvvalue = $tv->getValue($id);
                if (empty($tvvalue)) {
                    //Параметры TV
                    $tv_prop = $tv->get(\'properties\');
                    //Создаем альбом
                    $album = array(
                        \'name\' => $galleryName,
                        \'parent\' => isset($tv_prop[\'galParentId\'][\'value\'])?$tv_prop[\'galParentId\'][\'value\']:0,
                        \'description\' => \'\',
                        \'active\' => 1,
                        \'prominent\' => 0
                    );
                    $resp = $modx->runProcessor(\'mgr/album/create\',$album,$options);
                    if (!$resp->isError()) {
                        $album = $resp->getObject();
                        $tv->setValue($id,$album[\'id\']);
                        $tv->save();
                    }
                    
                } else {
                    // TV уже есть, обновим название альбома
                    $resp = $modx->runProcessor(\'mgr/album/get\',array(\'id\'=>$tvvalue),$options);
                    if (!$resp->isError()) {
                        $album = $resp->getObject();
                        $album[\'name\'] = $galleryName;
                        $modx->runProcessor(\'mgr/album/update\',$album,$options);    
                    }

                }
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    8 => 
    array (
      'id' => '8',
      'source' => '3',
      'property_preprocess' => '0',
      'name' => 'showContext',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => 'if ($modx->event->name == \'OnDocFormPrerender\') {    
	if (!$id = $modx->controller->resourceArray[\'id\']) {
		return;
	}
    $childTemplates = "Контекст: <b>".$resource->get(\'context_key\')."</b>";
	
	$modx->controller->addHtml(\'
	<script>\'."
		Ext.onReady(function() {		
			var title = Ext.select(\'#modx-resource-header\');
			var pagetitle = Ext.select(\'#modx-resource-pagetitle\');
			
			title.createChild(\'<p style=\\"padding-bottom: 15px;\\">$childTemplates</p>\');
			pagetitle.on(\'keyup\', function(){
				title.createChild(\'<p style=\\"padding-bottom: 15px;\\">$childTemplates</p>\');
			});			
		});					
		</script>	
	".\'</script>\');
	
	return;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    10 => 
    array (
      'id' => '10',
      'source' => '3',
      'property_preprocess' => '0',
      'name' => 'userCheck',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '$uid = (int)$_GET[\'id\'];
$admin = $modx->user->get(\'id\');
$exclude =  $modx->getOption(\'exclude_users\');
$exclude=  is_array($exclude) ? $exclude : explode(\',\',$exclude);

// разрешаем админам смотреть 
foreach ($exclude as $ex ){
    $ex = (int)$ex;
    if ($ex == $admin){
        return true;
    }else{
        if ($_GET[\'a\'] == \'security/user/update\'){
            $modx->sendRedirect("/manager/?a=update&namespace=manuser&id=".$uid);
            exit();
        }
    }
}
/*
foreach ($exclude as $ex ){
    $ex = (int)$ex;
    if ($ex == $uid){
        if ($_GET[\'a\'] == \'security/user/update\'){
             $modx->sendRedirect("/manager/?a=update&namespace=manuser&id=".$uid);
        exit();
        }
    }
}
*/',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    28 => 
    array (
      'id' => '28',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'AjaxSnippet',
      'description' => '',
      'editor_type' => '0',
      'category' => '20',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnLoadWebDocument\':
		if (empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) || $_SERVER[\'HTTP_X_REQUESTED_WITH\'] != \'XMLHttpRequest\') {
			return;
		}
		/** @var xPDOFileCache $cache */
		$cache = $modx->cacheManager;
		$cache_key = \'/ajaxsnippet/\';

		if (!empty($_REQUEST[\'as_action\']) && $scriptProperties = $cache->get($cache_key . $_REQUEST[\'as_action\'])) {
			$output = \'\';
			/** @var modSnippet $object */
			if ($object = $modx->getObject(\'modSnippet\', array(\'name\' => $scriptProperties[\'snippet\']))) {
				$properties = $object->getProperties();
				if (!empty($scriptProperties[\'propertySet\'])) {
					$properties = array_merge($properties, $object->getPropertySet($scriptProperties[\'propertySet\']));
				}
				$scriptProperties = array_merge($properties, $scriptProperties);

				$output = $object->process($scriptProperties);
				if (strpos($output, \'[[\') !== false) {
					$maxIterations = intval($modx->getOption(\'parser_max_iterations\', $options, 10));
					$modx->parser->processElementTags(\'\', $output, true, false, \'[[\', \']]\', array(), $maxIterations);
					$modx->parser->processElementTags(\'\', $output, true, true, \'[[\', \']]\', array(), $maxIterations);
				}
			}

			$response = array(
				\'output\' => $output,
				\'key\' => $_REQUEST[\'as_action\'],
				\'snippet\' => $scriptProperties[\'snippet\'],
			);
			if (!empty($scriptProperties[\'totalVar\'])) {
				$response[\'total\'] = $modx->getPlaceholder($scriptProperties[\'totalVar\']);
			}
			if (!empty($scriptProperties[\'pageNavVar\'])) {
				$response[\'pagination\'] = $modx->getPlaceholder($scriptProperties[\'pageNavVar\']);
			}

			echo $modx->toJSON($response);
			@session_write_close();
			exit;
		}
		break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/ajaxsnippet/elements/plugins/plugin.ajaxsnippet.php',
    ),
    27 => 
    array (
      'id' => '27',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Redirector',
      'description' => 'Handles site redirects.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * @package redirector
 *
 * @var modX|xPDO $modx
 * @var array $scriptProperties
 * @var modResource $resource
 * @var string $mode
 */

/* load redirector class */
$corePath = $modx->getOption(\'redirector.core_path\', $scriptProperties, $modx->getOption(\'core_path\') . \'components/redirector/\');
$redirector = $modx->getService(\'redirector\', \'Redirector\', $corePath . \'model/redirector/\', $scriptProperties);
if (!($redirector instanceof Redirector)) {
    return \'\';
}

$eventName = $modx->event->name;
switch ($eventName) {
    case \'OnPageNotFound\':

        /* handle redirects */
        $search = rawurldecode($_SERVER[\'REQUEST_URI\']);
        $baseUrl = $modx->getOption(\'base_url\', null, MODX_BASE_URL);
        if (!empty($baseUrl) && $baseUrl != \'/\' && $baseUrl != \' \' && $baseUrl != \'/\' . $modx->context->get(\'key\') . \'/\') {
            $search = str_replace($baseUrl, \'\', $search);
        }

        $search = ltrim($search, \'/\');
        if (!empty($search)) {

            /** @var modRedirect $redirect */
            $redirect = $modx->getObject(\'modRedirect\', array(
                "(`modRedirect`.`pattern` = \'" . $search . "\')",
                "(`modRedirect`.`context_key` = \'" . $modx->context->get(\'key\') . "\' OR `modRedirect`.`context_key` IS NULL OR `modRedirect`.`context_key` = \'\')",
                \'active\' => true,
            ));

            // when not found, check a REGEX record..
            // need to separate this one because of some \'alias.html > target.html\' vs. \'best-alias.html > best-target.html\' issues...
            if (empty($redirect) || !is_object($redirect)) {
                $c = $modx->newQuery(\'modRedirect\');
                $c->where(array(
                    "(`modRedirect`.`pattern` = \'" . $search . "\' OR \'" . $search . "\' REGEXP `modRedirect`.`pattern` OR \'" . $search . "\' REGEXP CONCAT(\'^\', `modRedirect`.`pattern`, \'$\'))",
                    "(`modRedirect`.`context_key` = \'" . $modx->context->get(\'key\') . "\' OR `modRedirect`.`context_key` IS NULL OR `modRedirect`.`context_key` = \'\')",
                    \'active\' => true,
                ));
                $redirect = $modx->getObject(\'modRedirect\', $c);
            }

            if (!empty($redirect) && is_object($redirect)) {

                /** @var modContext $context */
                $context = $redirect->getOne(\'Context\');
                if (empty($context) || !($context instanceof modContext)) {
                    $context = $modx->context;
                }

                $target = $redirect->get(\'target\');
                $modx->parser->processElementTags(\'\', $target, true, true);

                if ($target != $modx->resourceIdentifier && $target != $search) {
                    if (strpos($target, \'$\') !== false) {
                        $pattern = $redirect->get(\'pattern\');
                        $target = preg_replace(\'/\' . $pattern . \'/\', $target, $search);
                    }
                    if (!strpos($target, \'://\')) {
                        $target = rtrim($context->getOption(\'site_url\'), \'/\') . \'/\' . (($target == \'/\') ? \'\' : ltrim($target, \'/\'));
                    }
                    $modx->log(modX::LOG_LEVEL_INFO, \'Redirector plugin redirecting request for \' . $search . \' to \' . $target);

                    $redirect->registerTrigger();

                    $options = array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\');
                    $modx->sendRedirect($target, $options);
                }
            }
        }

        break;

    case \'OnDocFormRender\':

        $track_uri_updates = (boolean)$modx->getOption(\'redirector.track_uri_updates\', null, 1);
        $track_uri_updates = (in_array($track_uri_updates, array(false, \'false\', 0, \'0\', \'no\', \'n\'), true)) ? false : true;

        if ($mode == \'upd\' && $track_uri_updates) {
            $_SESSION[\'modx_resource_uri\'] = $resource->get(\'uri\');
        }

        break;

    case \'OnDocFormSave\':

        /* if uri has changed, add to redirects */
        $track_uri_updates = $modx->getOption(\'redirector.track_uri_updates\', null, 1);
        $track_uri_updates = (in_array($track_uri_updates, array(false, \'false\', 0, \'0\', \'no\', \'n\'), true)) ? false : true;
        $context_key = $resource->get(\'context_key\');
        $new_uri = $resource->get(\'uri\');

        if ($mode == \'upd\' && $track_uri_updates && !empty($_SESSION[\'modx_resource_uri\'])) {

            $old_uri = $_SESSION[\'modx_resource_uri\'];
            if ($old_uri != $new_uri) {

                /* uri changed */
                $redirect = $modx->getObject(\'modRedirect\', array(
                    \'pattern\' => $old_uri,
                    \'context_key\' => $context_key,
                    \'active\' => true
                ));
                if (empty($redirect)) {

                    /* no record for old uri */
                    $new_redirect = $modx->newObject(\'modRedirect\');
                    $new_redirect->fromArray(array(
                        \'pattern\' => $old_uri,
                        \'target\' => \'[[~\' . $resource->get(\'id\') . \']]\',
                        \'context_key\' => $context_key,
                        \'active\' => true,
                    ));

                    if ($new_redirect->save() == false) {
                        return $modx->error->failure($modx->lexicon(\'redirector.redirect_err_save\'));
                    }
                }
            }

            $_SESSION[\'modx_resource_uri\'] = $new_uri;
        }

        break;
}

return \'\';',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    14 => 
    array (
      'id' => '14',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'seoPro',
      'description' => 'seoPro 1.0.4-pl . SEO optimizing plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * The base seoPro snippet.
 *
 * @package seopro
 */
$seoPro = $modx->getService(\'seopro\', \'seoPro\', $modx->getOption(\'seopro.core_path\', null, $modx->getOption(\'core_path\') . \'components/seopro/\') . \'model/seopro/\', $scriptProperties);
if (!($seoPro instanceof seoPro))
  return \'\';

$disabledTemplates = explode(\',\', $modx->getOption(\'seopro.disabledtemplates\', null, \'0\'));

switch ($modx->event->name) {
  case \'OnDocFormRender\':
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
      break;
    }
    $currClassKey = $resource->get(\'class_key\');
    $strFields = $modx->getOption(\'seopro.fields\', null, \'pagetitle:70,longtitle:70,description:155,alias:2023,menutitle:2023\');
    $arrFields = array();
    if (is_array(explode(\',\', $strFields))) {
      foreach (explode(\',\', $strFields) as $field) {
        list($fieldName, $fieldCount) = explode(\':\', $field);
        $arrFields[$fieldName] = $fieldCount;
      }
    } else {
      return \'\';
    }

    $keywords = \'\';
    $modx->controller->addLexiconTopic(\'seopro:default\');
    if ($mode == \'upd\') {
      $url = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', \'full\');
      $url = str_replace($resource->get(\'alias\'), \'<span id=\\"seopro-replace-alias\\">\' . $resource->get(\'alias\') . \'</span>\', $url);
      $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
      if ($seoKeywords) {
        $keywords = $seoKeywords->get(\'keywords\');
      }
    } else {
      if ($_REQUEST[\'id\']) {
        $url = $modx->makeUrl($_REQUEST[\'id\'], \'\', \'\', \'full\');
        $url .= \'/<span id=\\"seopro-replace-alias\\"></span>\';
      } else {
        $url = $modx->getOption(\'site_url\') . \'<span id=\\"seopro-replace-alias\\"></span>\';
      }
    }

    if ($_REQUEST[\'id\'] == $modx->getOption(\'site_start\')) {
      unset($arrFields[\'alias\']);
      unset($arrFields[\'menutitle\']);
    }


    $config = $seoPro->config;
    unset($config[\'resource\']);
    $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
		Ext.onReady(function() {
			seoPro.config = \' . $modx->toJSON($config) . \';
			seoPro.config.record = "\' . $keywords . \'";
			seoPro.config.values = {};
			seoPro.config.fields = "\' . implode(",", array_keys($arrFields)) . \'";
			seoPro.config.chars = \' . $modx->toJSON($arrFields) . \'
			seoPro.config.url = "\' . $url . \'";
		});
	</script>\');

    /* include CSS and JS*/
    $version = $modx->getVersionData();
    if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
     $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr.css\');
    }else{
     $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr23.css\');
    }
    $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/seopro.js??v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));
    $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/resource.js?v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));

    break;

  case \'OnDocFormSave\':
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
      break;
    }
    $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    if (!$seoKeywords && isset($resource)) {
      $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    }
    if($seoKeywords){
      $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
      $seoKeywords->save();
    }
    break;

  case \'onResourceDuplicate\':
    $template = ($resource->get(\'template\')) ? (string)$resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
      break;
    }
    $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    if (!$seoKeywords) {
      $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    }
    $newSeoKeywords = $modx->newObject(\'seoKeywords\');
    $newSeoKeywords->fromArray($seoKeywords->toArray());
    $newSeoKeywords->set(\'resource\', $newResource->get(\'id\'));
    $newSeoKeywords->save();
    break;

  case \'OnLoadWebDocument\':
    if ($modx->context->get(\'key\') == "mgr") {
      break;
    }
    $template = ($modx->resource->get(\'template\')) ? (string)$modx->resource->get(\'template\') : (string)$_REQUEST[\'template\'];
    if (in_array($template, $disabledTemplates)) {
      break;
    }
    $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $modx->resource->get(\'id\')));
    if ($seoKeywords) {
      $keyWords = $seoKeywords->get(\'keywords\');
      $modx->setPlaceholder(\'seoPro.keywords\', $keyWords);
    }
    $siteBranding = (boolean) $modx->getOption(\'seopro.allowbranding\', null, true);
    $siteDelimiter = $modx->getOption(\'seopro.delimiter\', null, \'/\');
    $siteUseSitename = (boolean) $modx->getOption(\'seopro.usesitename\', null, true);
    $siteID = $modx->resource->get(\'id\');
    $siteName = $modx->getOption(\'site_name\');
    $longtitle = $modx->resource->get(\'longtitle\');
    $pagetitle = $modx->resource->get(\'pagetitle\');
    $seoProTitle = array();
    if ($siteID == $modx->getOption(\'site_start\')) {
      $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $siteName;
    } else {
      $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $pagetitle;
      if ($siteUseSitename) {
        $seoProTitle[\'delimiter\'] = $siteDelimiter;
        $seoProTitle[\'sitename\'] = $siteName;
      }
    }
    $modx->setPlaceholder(\'seoPro.title\', implode(" ", $seoProTitle));
    if ($siteBranding) {
      $modx->regClientStartupHTMLBlock(\'<!-- This site is optimized with the Sterc seoPro plugin \' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\') . \' - http://www.sterc.nl/modx/seopro -->\');
    }
    break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    15 => 
    array (
      'id' => '15',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'TypoMCE',
      'description' => 'TypoMCE 4.4.0-pl1 plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * TypoMCE RichText Editor Plugin
 *
 * Events: OnRichTextEditorInit, OnRichTextEditorRegister,
 * OnBeforeManagerPageInit, OnRichTextBrowserInit
 *
 * @author Jeff Whitfield <jeff@collabpad.com>
 * @author Shaun McCormick <shaun@collabpad.com>
 * @author Vasiliy Naumkin <bezumkin@yandex.ru>
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package typomce
 * @subpackage build
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
	$modx->event->output(\'TypoMCE\');

	return;
}
require_once $modx->getOption(\'typo.core_path\', null, MODX_CORE_PATH . \'components/typomce/typomce.class.php\');
$typo = new TypoMCE($modx, $scriptProperties);

$useEditor = $typo->context->getOption(\'use_editor\', false);
$whichEditor = $typo->context->getOption(\'which_editor\', \'\');

/* Handle event */
switch ($modx->event->name) {
	case \'OnRichTextEditorInit\':
		if ($useEditor && $whichEditor == \'TypoMCE\') {
			unset($scriptProperties[\'chunk\']);
			if (isset($forfrontend) || $modx->context->get(\'key\') != \'mgr\') {
				$def = $typo->context->getOption(\'cultureKey\', $typo->context->getOption(\'manager_language\', \'en\'));
				$typo->properties[\'language\'] = $modx->getOption(\'fe_editor_lang\', array(), $def);
				$typo->properties[\'frontend\'] = true;
				unset($def);
			}
			/* commenting these out as it causes problems with richtext tvs */
			//if (isset($scriptProperties[\'resource\']) && !$resource->get(\'richtext\')) return;
			//if (!isset($scriptProperties[\'resource\']) && !$modx->getOption(\'richtext_default\',null,false)) return;
			$typo->setProperties($scriptProperties);
			$html = $typo->initialize();
			$modx->event->output($html);
			unset($html);
		}
		break;

	case \'OnRichTextBrowserInit\':
		if ($useEditor && $whichEditor == \'TypoMCE\') {
			$inRevo20 = (boolean)version_compare($modx->version[\'full_version\'], \'2.1.0-rc1\', \'<\');
			$modx->getVersionData();
			$source = $typo->context->getOption(\'default_media_source\', null, 1);

			$modx->controller->addHtml(\'<script type="text/javascript">var inRevo20 = \' . ($inRevo20 ? 1 : 0) . \';MODx.source = "\' . $source . \'";</script>\');

			$modx->controller->addJavascript($typo->config[\'assetsUrl\'] . \'jscripts/tiny_mce/tiny_mce_popup.js\');
			if (file_exists($typo->config[\'assetsPath\'] . \'jscripts/tiny_mce/langs/\' . $typo->properties[\'language\'] . \'.js\')) {
				$modx->controller->addJavascript($typo->config[\'assetsUrl\'] . \'jscripts/tiny_mce/langs/\' . $typo->properties[\'language\'] . \'.js\');
			}
			else {
				$modx->controller->addJavascript($typo->config[\'assetsUrl\'] . \'jscripts/tiny_mce/langs/en.js\');
			}
			$modx->controller->addJavascript($typo->config[\'assetsUrl\'] . \'tiny.browser.js\');
			$modx->event->output(\'Tiny.browserCallback\');
		}

		return \'\';
		break;

	default:
		break;
}
return;',
      'locked' => '0',
      'properties' => 'a:39:{s:22:"accessibility_warnings";a:7:{s:4:"name";s:22:"accessibility_warnings";s:4:"desc";s:315:"If this option is set to true some accessibility warnings will be presented to the user if they miss specifying that information. This option is set to true by default, since we should all try to make this world a better place for disabled people. But if you are annoyed with the warnings, set this option to false.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"apply_source_formatting";a:7:{s:4:"name";s:23:"apply_source_formatting";s:4:"desc";s:229:"This option enables you to tell TinyMCE to apply some source formatting to the output HTML code. With source formatting, the output HTML code is indented and formatted. Without source formatting, the output HTML is more compact. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"button_tile_map";a:7:{s:4:"name";s:15:"button_tile_map";s:4:"desc";s:338:"If this option is set to true TinyMCE will use tiled images instead of individual images for most of the editor controls. This produces faster loading time since only one GIF image needs to be loaded instead of a GIF for each individual button. This option is set to false by default since it doesn\'t work with some DOCTYPE declarations. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:7:"cleanup";a:7:{s:4:"name";s:7:"cleanup";s:4:"desc";s:331:"This option enables or disables the built-in clean up functionality. TinyMCE is equipped with powerful clean up functionality that enables you to specify what elements and attributes are allowed and how HTML contents should be generated. This option is set to true by default, but if you want to disable it you may set it to false.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"cleanup_on_startup";a:7:{s:4:"name";s:18:"cleanup_on_startup";s:4:"desc";s:135:"If you set this option to true, TinyMCE will perform a HTML cleanup call when the editor loads. This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"convert_fonts_to_spans";a:7:{s:4:"name";s:22:"convert_fonts_to_spans";s:4:"desc";s:348:"If you set this option to true, TinyMCE will convert all font elements to span elements and generate span elements instead of font elements. This option should be used in order to get more W3C compatible code, since font elements are deprecated. How sizes get converted can be controlled by the font_size_classes and font_size_style_values options.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"convert_newlines_to_brs";a:7:{s:4:"name";s:23:"convert_newlines_to_brs";s:4:"desc";s:128:"If you set this option to true, newline characters codes get converted into br elements. This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"convert_urls";a:7:{s:4:"name";s:12:"convert_urls";s:4:"desc";s:495:"This option enables you to control whether TinyMCE is to be clever and restore URLs to their original values. URLs are automatically converted (messed up) by default because the built-in browser logic works this way. There is no way to get the real URL unless you store it away. If you set this option to false it will try to keep these URLs intact. This option is set to true by default, which means URLs will be forced to be either absolute or relative depending on the state of relative_urls.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"dialog_type";a:7:{s:4:"name";s:11:"dialog_type";s:4:"desc";s:246:"This option enables you to specify how dialogs/popups should be opened. Possible values are "window" and "modal", where the window option opens a normal window and the dialog option opens a modal dialog. This option is set to "window" by default.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{i:0;s:6:"window";s:4:"text";s:6:"Window";}i:1;a:2:{i:0;s:5:"modal";s:4:"text";s:5:"Modal";}}s:5:"value";s:6:"window";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"directionality";a:7:{s:4:"name";s:14:"directionality";s:4:"desc";s:261:"This option specifies the default writing direction. Some languages (Like Hebrew, Arabic, Urdu...) write from right to left instead of left to right. The default value of this option is "ltr" but if you want to use from right to left mode specify "rtl" instead.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"ltr";s:4:"text";s:13:"Left to Right";}i:1;a:2:{s:5:"value";s:3:"rtl";s:4:"text";s:13:"Right to Left";}}s:5:"value";s:3:"ltr";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"element_format";a:7:{s:4:"name";s:14:"element_format";s:4:"desc";s:210:"This option enables control if elements should be in html or xhtml mode. xhtml is the default state for this option. This means that for example &lt;br /&gt; will be &lt;br&gt; if you set this option to "html".";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:5:"xhtml";s:4:"text";s:5:"XHTML";}i:1;a:2:{s:5:"value";s:4:"html";s:4:"text";s:4:"HTML";}}s:5:"value";s:5:"xhtml";s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"entity_encoding";a:7:{s:4:"name";s:15:"entity_encoding";s:4:"desc";s:70:"This option controls how entities/characters get processed by TinyMCE.";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:0:"";s:4:"text";s:4:"None";}i:1;a:2:{s:5:"value";s:5:"named";s:4:"text";s:5:"Named";}i:2;a:2:{s:5:"value";s:7:"numeric";s:4:"text";s:7:"Numeric";}i:3;a:2:{s:5:"value";s:3:"raw";s:4:"text";s:3:"Raw";}}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"force_p_newlines";a:7:{s:4:"name";s:16:"force_p_newlines";s:4:"desc";s:147:"This option enables you to disable/enable the creation of paragraphs on return/enter in Mozilla/Firefox. The default value of this option is true. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"force_hex_style_colors";a:7:{s:4:"name";s:22:"force_hex_style_colors";s:4:"desc";s:277:"This option enables you to control TinyMCE to force the color format to use hexadecimal instead of rgb strings. It converts for example "color: rgb(255, 255, 0)" to "#FFFF00". This option is set to true by default since otherwice MSIE and Firefox would differ in this behavior.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"height";a:7:{s:4:"name";s:6:"height";s:4:"desc";s:38:"Sets the height of the TinyMCE editor.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"400px";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"indentation";a:7:{s:4:"name";s:11:"indentation";s:4:"desc";s:139:"This option allows specification of the indentation level for indent/outdent buttons in the UI. This defaults to 30px but can be any value.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"30px";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"invalid_elements";a:7:{s:4:"name";s:16:"invalid_elements";s:4:"desc";s:163:"This option should contain a comma separated list of element names to exclude from the content. Elements in this list will removed when TinyMCE executes a cleanup.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"nowrap";a:7:{s:4:"name";s:6:"nowrap";s:4:"desc";s:212:"This nowrap option enables you to control how whitespace is to be wordwrapped within the editor. This option is set to false by default, but if you enable it by setting it to true editor contents will never wrap.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"object_resizing";a:7:{s:4:"name";s:15:"object_resizing";s:4:"desc";s:148:"This option gives you the ability to turn on/off the inline resizing controls of tables and images in Firefox/Mozilla. These are enabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"path_options";a:7:{s:4:"name";s:12:"path_options";s:4:"desc";s:119:"Sets a group of options. Note: This will override the relative_urls, document_base_url and remove_script_host settings.";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:11:"docrelative";s:4:"text";s:17:"Document Relative";}i:1;a:2:{s:5:"value";s:12:"rootrelative";s:4:"text";s:13:"Root Relative";}i:2;a:2:{s:5:"value";s:11:"fullpathurl";s:4:"text";s:13:"Full Path URL";}}s:5:"value";s:11:"docrelative";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"plugin_insertdate_dateFormat";a:7:{s:4:"name";s:28:"plugin_insertdate_dateFormat";s:4:"desc";s:53:"Formatting of dates when using the InsertDate plugin.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"%Y-%m-%d";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"plugin_insertdate_timeFormat";a:7:{s:4:"name";s:28:"plugin_insertdate_timeFormat";s:4:"desc";s:53:"Formatting of times when using the InsertDate plugin.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"%H:%M:%S";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"preformatted";a:7:{s:4:"name";s:12:"preformatted";s:4:"desc";s:231:"If you enable this feature, whitespace such as tabs and spaces will be preserved. Much like the behavior of a &lt;pre&gt; element. This can be handy when integrating TinyMCE with webmail clients. This option is disabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:13:"relative_urls";a:7:{s:4:"name";s:13:"relative_urls";s:4:"desc";s:231:"If this option is set to true, all URLs returned from the file manager will be relative from the specified document_base_url. If it is set to false all URLs will be converted to absolute URLs. This option is set to true by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:17:"remove_linebreaks";a:7:{s:4:"name";s:17:"remove_linebreaks";s:4:"desc";s:531:"This option controls whether line break characters should be removed from output HTML. This option is enabled by default because there are differences between browser implementations regarding what to do with white space in the DOM. Gecko and Safari place white space in text nodes in the DOM. IE and Opera remove them from the DOM and therefore the line breaks will automatically be removed in those. This option will normalize this behavior when enabled (true) and all browsers will have a white-space-stripped DOM serialization.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"remove_script_host";a:7:{s:4:"name";s:18:"remove_script_host";s:4:"desc";s:221:"If this option is enabled the protocol and host part of the URLs returned from the file manager will be removed. This option is only used if the relative_urls option is set to false. This option is set to true by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:20:"remove_trailing_nbsp";a:7:{s:4:"name";s:20:"remove_trailing_nbsp";s:4:"desc";s:392:"This option enables you to specify that TinyMCE should remove any traling &nbsp; characters in block elements if you start to write inside them. Paragraphs are default padded with a &nbsp; and if you write text into such paragraphs the space will remain. Setting this option to true will remove the space. This option is set to false by default since the cursor jumps a bit in Gecko browsers.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:4:"skin";a:7:{s:4:"name";s:4:"skin";s:4:"desc";s:330:"This option enables you to specify what skin you want to use with your theme. A skin is basically a CSS file that gets loaded from the skins directory inside the theme. The advanced theme that TinyMCE comes with has two skins, these are called "default" and "o2k7". We added another skin named "cirkuit" that is chosen by default.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"cirkuit";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"skin_variant";a:7:{s:4:"name";s:12:"skin_variant";s:4:"desc";s:403:"This option enables you to specify a variant for the skin, for example "silver" or "black". "default" skin does not offer any variant, whereas "o2k7" default offers "silver" or "black" variants to the default one. For the "cirkuit" skin there\'s one variant named "silver". When creating a skin, additional variants may also be created, by adding ui_[variant_name].css files alongside the default ui.css.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:20:"table_inline_editing";a:7:{s:4:"name";s:20:"table_inline_editing";s:4:"desc";s:231:"This option gives you the ability to turn on/off the inline table editing controls in Firefox/Mozilla. According to the TinyMCE documentation, these controls are somewhat buggy and not redesignable, so they are disabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"theme_advanced_disable";a:7:{s:4:"name";s:22:"theme_advanced_disable";s:4:"desc";s:111:"This option should contain a comma separated list of controls to disable from any toolbar row/panel in TinyMCE.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:19:"theme_advanced_path";a:7:{s:4:"name";s:19:"theme_advanced_path";s:4:"desc";s:331:"This option gives you the ability to enable/disable the element path. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to "true" by default. Setting this option to "false" will effectively hide the path tool, though it still takes up room in the Status Bar.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:32:"theme_advanced_resize_horizontal";a:7:{s:4:"name";s:32:"theme_advanced_resize_horizontal";s:4:"desc";s:319:"This option gives you the ability to enable/disable the horizontal resizing. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom" and when the theme_advanced_resizing is set to true. This option is set to true by default, allowing both resizing horizontal and vertical.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"theme_advanced_resizing";a:7:{s:4:"name";s:23:"theme_advanced_resizing";s:4:"desc";s:216:"This option gives you the ability to enable/disable the resizing button. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:33:"theme_advanced_statusbar_location";a:7:{s:4:"name";s:33:"theme_advanced_statusbar_location";s:4:"desc";s:257:"This option enables you to specify where the element statusbar with the path and resize tool should be located. This option can be set to "top" or "bottom". The default value is set to "top". This option can only be used when the theme is set to "advanced".";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"top";s:4:"text";s:3:"Top";}i:1;a:2:{s:5:"value";s:6:"bottom";s:4:"text";s:6:"Bottom";}}s:5:"value";s:6:"bottom";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"theme_advanced_toolbar_align";a:7:{s:4:"name";s:28:"theme_advanced_toolbar_align";s:4:"desc";s:187:"This option enables you to specify the alignment of the toolbar, this value can be "left", "right" or "center" (the default). This option can only be used when theme is set to "advanced".";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:6:"center";s:4:"text";s:6:"Center";}i:1;a:2:{s:5:"value";s:4:"left";s:4:"text";s:4:"Left";}i:2;a:2:{s:5:"value";s:5:"right";s:4:"text";s:5:"Right";}}s:5:"value";s:4:"left";s:7:"lexicon";N;s:4:"area";s:0:"";}s:31:"theme_advanced_toolbar_location";a:7:{s:4:"name";s:31:"theme_advanced_toolbar_location";s:4:"desc";s:191:"
This option enables you to specify where the toolbar should be located. This option can be set to "top" or "bottom" (the defualt). This option can only be used when theme is set to advanced.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"top";s:4:"text";s:3:"Top";}i:1;a:2:{s:5:"value";s:6:"bottom";s:4:"text";s:6:"Bottom";}}s:5:"value";s:3:"top";s:7:"lexicon";N;s:4:"area";s:0:"";}s:5:"width";a:7:{s:4:"name";s:5:"width";s:4:"desc";s:32:"The width of the TinyMCE editor.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"95%";s:7:"lexicon";N;s:4:"area";s:0:"";}s:33:"template_selected_content_classes";a:7:{s:4:"name";s:33:"template_selected_content_classes";s:4:"desc";s:234:"Specify a list of CSS class names for the template plugin. They must be separated by spaces. Any template element with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/typomce/typomce.plugin.php',
    ),
    18 => 
    array (
      'id' => '18',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Inherit Template',
      'description' => 'Enable user to set automatic template selection when creating a new child document',
      'editor_type' => '0',
      'category' => '14',
      'cache_type' => '0',
      'plugincode' => '/**
 * Inherit Template for MODx Revolution
 *
 * This plugin sets the new document template to have a default template from
 * parent\'s TV selection. This is only triggered by \'OnDocFormRender\' event.
 * This only works one level, as it\'s intended.
 *
 * Inherit Template is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Inherit Template is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Inherit Template; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @author      goldsky     <goldsky.milis@gmail.com>
 * @copyright   Copyright (c) 2012, goldsky
 * @license     GPL v2
 *
 * @package     Inherit Template
 * @subpackage  plugin
 */
// this plugin only apply to the new document
if (empty($scriptProperties[\'mode\']) || $scriptProperties[\'mode\'] !== \'new\') {
    return;
}
if ($modx->event->name === \'OnDocFormRender\') {
    // get the parent\'s ID
    $parentObj = $modx->getObject(\'modResource\', $_REQUEST[\'parent\']);
    if (!$parentObj) {
        return;
    }
    $parent = $parentObj->toArray();

    // checking the parent\'s TV
    $inheritTplObj = $modx->getObject(\'modTemplateVar\', array(
        \'name\' => $modx->getOption(\'inheritTpl.tvname\')
            ));

    if (!$inheritTplObj || !$inheritTplObj->hasTemplate($parent[\'template\'])) {
        return;
    }

    // get the value from the parent\'s TV
    $inheritTpl = $inheritTplObj->toArray();
    $tvValueObj = $modx->getObject(\'modTemplateVarResource\', array(
        \'tmplvarid\' => $inheritTpl[\'id\'],
        \'contentid\' => $parent[\'id\']
            ));
    if (!$tvValueObj) {
        return;
    }
    $tvValueArray = $tvValueObj->toArray();

    // force/override the template to the opening document
    $modx->controller->setProperty(\'template\', $tvValueArray[\'value\']);

    return;
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    21 => 
    array (
      'id' => '21',
      'source' => '3',
      'property_preprocess' => '0',
      'name' => 'galleryDuplicate',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => 'if ($modx->event->name==\'OnResourceDuplicate\') 
{
  $newResource = $modx->event->params[\'newResource\'];
  $id=$newResource->get(\'id\');
  $tv = $modx->getObject(\'modTemplateVarResource\',array (\'tmplvarid\'=>2,\'contentid\' => $id));
  if (isset($tv))
   {
     $tv->remove();
   }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    22 => 
    array (
      'id' => '22',
      'source' => '3',
      'property_preprocess' => '0',
      'name' => 'lexicon',
      'description' => '',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '$eventName = $modx->event->name;
switch ($eventName) {
    case \'OnLoadWebDocument\':
        $modx->lexicon->load(\'sitelang:default\');
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    23 => 
    array (
      'id' => '23',
      'source' => '3',
      'property_preprocess' => '0',
      'name' => 'clearCache',
      'description' => 'При сохранении ресурса, чистится кеш только КОНТЕКСТА этого ресурса, а не всей системы',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => 'switch($modx->event->name) {
  case \'OnDocFormRender\':
	$resource->set(\'syncsite\', 0);
  break;
  
  case \'OnDocFormSave\':
    if ($modx->event->params[\'mode\'] != \'upd\') {return;}
    $key = $resource->context_key;
    $paths = array(\'resource/\'.$key.\'/\');
    $options = array(\'objects\' => null, \'extensions\' => array(\'.php\', \'.log\'));
    $s=$modx->cacheManager->clearCache($paths, $options);
  break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'web' => 
      array (
        0 => 
        array (
          'principal' => 0,
          'authority' => 9999,
          'policy' => 
          array (
            'load' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
        2 => 
        array (
          'principal' => 2,
          'authority' => 9999,
          'policy' => 
          array (
            'load' => true,
            'list' => true,
            'view' => true,
            'save' => true,
            'remove' => true,
            'copy' => true,
            'view_unpublished' => true,
          ),
        ),
      ),
    ),
  ),
);