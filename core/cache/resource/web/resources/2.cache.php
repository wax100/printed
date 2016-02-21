<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 2,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => '404',
    'longtitle' => '',
    'description' => '',
    'alias' => '404',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1423461475,
    'editedby' => 0,
    'editedon' => 0,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1423461475,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '404.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name = "format-detection" content = "telephone=no" />
        
        <base href="http://printed/" />
        <meta name="author" content="admin">
        <link rel="shortcut icon" href="favicon.ico">

        <meta property="og:image" content="http://printed//assets/images/logo.png" />       
        <meta property="og:url" content="http://printed/404.html" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="[[!++site_name]]" /> 

        [[+meta_title:empty=`
        <title>404 </title>
        <meta name="description" content="404">
        <meta name="keywords" content="">
        <meta property="og:description" content="404" />
        <meta property="og:title" content="404 ScrumWeb" />
        `]]
        
         <link rel="stylesheet" type="text/css" media="screen" href="assets/css/sweet-alert.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    </head>
    <body>
    
<header></header>

<footer></footer>
[[$scripts]]',
    '_isForward' => true,
    '_sjscripts' => 
    array (
      0 => '<!-- This site is optimized with the Sterc seoPro plugin 1.0.3 - http://www.sterc.nl/modx/seopro -->',
    ),
    '_loadedjscripts' => 
    array (
      '<!-- This site is optimized with the Sterc seoPro plugin 1.0.3 - http://www.sterc.nl/modx/seopro -->' => true,
    ),
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[~2?&scheme=`full`]]' => 'http://printed/404.html',
    '[[$meta]]' => '<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name = "format-detection" content = "telephone=no" />
        
        <base href="http://printed/" />
        <meta name="author" content="admin">
        <link rel="shortcut icon" href="favicon.ico">

        <meta property="og:image" content="http://printed//assets/images/logo.png" />       
        <meta property="og:url" content="http://printed/404.html" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="[[!++site_name]]" /> 

        [[+meta_title:empty=`
        <title>404 </title>
        <meta name="description" content="404">
        <meta name="keywords" content="">
        <meta property="og:description" content="404" />
        <meta property="og:title" content="404 ScrumWeb" />
        `]]
        
         <link rel="stylesheet" type="text/css" media="screen" href="assets/css/sweet-alert.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    </head>
    <body>
    ',
    '[[$header]]' => '<header></header>',
    '[[$footer]]' => '<footer></footer>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'meta' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 3,
          'property_preprocess' => false,
          'name' => 'META',
          'description' => '',
          'editor_type' => 0,
          'category' => 9,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name = "format-detection" content = "telephone=no" />
        
        <base href="[[++site_url]]" />
        <meta name="author" content="[[*createdby:userinfo=`username`]]">
        <link rel="shortcut icon" href="favicon.ico">

        <meta property="og:image" content="[[++site_url]][[*img:empty=`[[++assets_url]]images/logo.png`]]" />       
        <meta property="og:url" content="[[~[[*id]]?&scheme=`full`]]" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="[[!++site_name]]" /> 

        [[+meta_title:empty=`
        <title>[[*longtitle:empty=`[[*pagetitle]]`]] </title>
        <meta name="description" content="[[*longtitle:empty=`[[*pagetitle]]`]]">
        <meta name="keywords" content="[[*description:htmlent]]">
        <meta property="og:description" content="[[*introtext:htmlent:empty=`[[*pagetitle:htmlent]]`]]" />
        <meta property="og:title" content="[[*longtitle:empty=`[[*pagetitle]] [[++site_name]]`]]" />
        `]]
        
         <link rel="stylesheet" type="text/css" media="screen" href="assets/css/sweet-alert.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    </head>
    <body>
    ',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name = "format-detection" content = "telephone=no" />
        
        <base href="[[++site_url]]" />
        <meta name="author" content="[[*createdby:userinfo=`username`]]">
        <link rel="shortcut icon" href="favicon.ico">

        <meta property="og:image" content="[[++site_url]][[*img:empty=`[[++assets_url]]images/logo.png`]]" />       
        <meta property="og:url" content="[[~[[*id]]?&scheme=`full`]]" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="[[!++site_name]]" /> 

        [[+meta_title:empty=`
        <title>[[*longtitle:empty=`[[*pagetitle]]`]] </title>
        <meta name="description" content="[[*longtitle:empty=`[[*pagetitle]]`]]">
        <meta name="keywords" content="[[*description:htmlent]]">
        <meta property="og:description" content="[[*introtext:htmlent:empty=`[[*pagetitle:htmlent]]`]]" />
        <meta property="og:title" content="[[*longtitle:empty=`[[*pagetitle]] [[++site_name]]`]]" />
        `]]
        
         <link rel="stylesheet" type="text/css" media="screen" href="assets/css/sweet-alert.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    </head>
    <body>
    ',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 3,
          'name' => 'uploads',
          'description' => 'Загрузка контента',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/uploads/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/uploads/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 3,
          'property_preprocess' => false,
          'name' => 'HEADER',
          'description' => '',
          'editor_type' => 0,
          'category' => 9,
          'cache_type' => 0,
          'snippet' => '<header></header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header></header>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 3,
          'name' => 'uploads',
          'description' => 'Загрузка контента',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/uploads/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/uploads/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 33,
          'source' => 3,
          'property_preprocess' => false,
          'name' => 'FOOTER',
          'description' => '',
          'editor_type' => 0,
          'category' => 9,
          'cache_type' => 0,
          'snippet' => '<footer></footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer></footer>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 3,
          'name' => 'uploads',
          'description' => 'Загрузка контента',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/uploads/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/uploads/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
      'img' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 3,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'img',
          'caption' => 'Изображение',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 3,
          'name' => 'uploads',
          'description' => 'Загрузка контента',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
            'basePath' => 
            array (
              'name' => 'basePath',
              'desc' => 'prop_file.basePath_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/uploads/',
              'lexicon' => 'core:source',
            ),
            'baseUrl' => 
            array (
              'name' => 'baseUrl',
              'desc' => 'prop_file.baseUrl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'assets/uploads/',
              'lexicon' => 'core:source',
            ),
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);