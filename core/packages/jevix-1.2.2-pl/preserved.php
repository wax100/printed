<?php return array (
  '26cb2ae7f03b6c0eceb87a4bd32cb92a' => 
  array (
    'criteria' => 
    array (
      'name' => 'jevix',
    ),
    'object' => 
    array (
      'name' => 'jevix',
      'path' => '{core_path}components/jevix/',
      'assets_path' => '',
    ),
  ),
  'e542e14937d1a0f60acc8ed6aba595eb' => 
  array (
    'criteria' => 
    array (
      'category' => 'Jevix',
    ),
    'object' => 
    array (
      'id' => 5,
      'parent' => 0,
      'category' => 'Jevix',
      'rank' => 0,
    ),
  ),
  '26c5908825016a0392aca68afd2233a1' => 
  array (
    'criteria' => 
    array (
      'name' => 'Jevix',
    ),
    'object' => 
    array (
      'id' => 29,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'Jevix',
      'description' => 'HTML validator and filter',
      'editor_type' => 0,
      'category' => 5,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var Jevix $Jevix */
if (!$modx->loadClass(\'jevix\', MODX_CORE_PATH . \'components/jevix/model/jevix/\', false, true)) {
	return \'Could not load Jevix!\';
}
$Jevix = new Jevix($modx, $scriptProperties);

return $Jevix->process($scriptProperties[\'input\']);',
      'locked' => 0,
      'properties' => 'a:20:{s:5:"input";a:7:{s:4:"name";s:5:"input";s:4:"desc";s:16:"jevix_prop_input";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:5:"debug";a:7:{s:4:"name";s:5:"debug";s:4:"desc";s:16:"jevix_prop_debug";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:9:"logErrors";a:7:{s:4:"name";s:9:"logErrors";s:4:"desc";s:20:"jevix_prop_logErrors";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:17:"cfgAllowTagParams";a:7:{s:4:"name";s:17:"cfgAllowTagParams";s:4:"desc";s:28:"jevix_prop_cfgAllowTagParams";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:163:"{"a":["title","href"],"img":{"0":"src","alt":"#text","1":"title","align":["right","left","center"],"width":"#int","height":"#int","hspace":"#int","vspace":"#int"}}";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:12:"cfgAllowTags";a:7:{s:4:"name";s:12:"cfgAllowTags";s:4:"desc";s:23:"jevix_prop_cfgAllowTags";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:112:"p,a,img,i,b,u,em,strong,nobr,li,ol,ul,sup,abbr,pre,acronym,h1,h2,h3,h4,h5,h6,cut,br,code,table,tr,th,td,video,hr";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:16:"cfgSetAutoBrMode";a:7:{s:4:"name";s:16:"cfgSetAutoBrMode";s:4:"desc";s:27:"jevix_prop_cfgSetAutoBrMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:18:"cfgSetAutoLinkMode";a:7:{s:4:"name";s:18:"cfgSetAutoLinkMode";s:4:"desc";s:29:"jevix_prop_cfgSetAutoLinkMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:17:"cfgSetAutoReplace";a:7:{s:4:"name";s:17:"cfgSetAutoReplace";s:4:"desc";s:28:"jevix_prop_cfgSetAutoReplace";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:84:"[["+/-","(c)","(с)","(r)","(C)","(С)","(R)"],["±","©","©","®","©","©","®"]]";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:21:"cfgSetAutoPregReplace";a:7:{s:4:"name";s:21:"cfgSetAutoPregReplace";s:4:"desc";s:32:"jevix_prop_cfgSetAutoPregReplace";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:452:"[["\\/<video>http:\\\\\\/\\\\\\/(?:www\\\\.|)youtube\\\\.com\\\\\\/watch\\\\?v=([a-zA-Z0-9_\\\\-]+)(&.+)?<\\\\\\/video>\\/Ui","\\/<video>http:\\\\\\/\\\\\\/(?:www\\\\.|)youtu\\\\.be\\\\\\/([a-zA-Z0-9_\\\\-]+)(&.+)?<\\\\\\/video>\\/Ui"],["<iframe width=\\"700\\" height=\\"394\\" src=\\"http:\\/\\/www.youtube.com\\/embed\\/$1\\" frameborder=\\"0\\" allowfullscreen><\\/iframe>","<iframe width=\\"700\\" height=\\"394\\" src=\\"http:\\/\\/www.youtube.com\\/embed\\/$1\\" frameborder=\\"0\\" allowfullscreen><\\/iframe>"]]";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:15:"cfgSetTagChilds";a:7:{s:4:"name";s:15:"cfgSetTagChilds";s:4:"desc";s:26:"jevix_prop_cfgSetTagChilds";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:109:"[["ul",["li"],false,true],["ol",["li"],false,true],["table",["tr"],false,true],["tr",["td","th"],false,true]]";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:23:"cfgSetTagCutWithContent";a:7:{s:4:"name";s:23:"cfgSetTagCutWithContent";s:4:"desc";s:34:"jevix_prop_cfgSetTagCutWithContent";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:26:"script,object,iframe,style";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:17:"cfgSetTagNoAutoBr";a:7:{s:4:"name";s:17:"cfgSetTagNoAutoBr";s:4:"desc";s:28:"jevix_prop_cfgSetTagNoAutoBr";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:21:"ul,ol,object,table,tr";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:21:"cfgSetTagParamDefault";a:7:{s:4:"name";s:21:"cfgSetTagParamDefault";s:4:"desc";s:32:"jevix_prop_cfgSetTagParamDefault";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:23:"[["a","rel",null,true]]";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:23:"cfgSetTagParamsRequired";a:7:{s:4:"name";s:23:"cfgSetTagParamsRequired";s:4:"desc";s:34:"jevix_prop_cfgSetTagParamsRequired";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:28:"{"img":["src"],"a":["href"]}";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:21:"cfgSetTagNoTypography";a:7:{s:4:"name";s:21:"cfgSetTagNoTypography";s:4:"desc";s:32:"jevix_prop_cfgSetTagNoTypography";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:14:"pre,code,video";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:21:"cfgSetTagPreformatted";a:7:{s:4:"name";s:21:"cfgSetTagPreformatted";s:4:"desc";s:32:"jevix_prop_cfgSetTagPreformatted";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:8:"pre,code";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:18:"cfgSetTagBlockType";a:7:{s:4:"name";s:18:"cfgSetTagBlockType";s:4:"desc";s:29:"jevix_prop_cfgSetTagBlockType";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:60:"["h4","h5","h6","ol","ul","blockquote","pre","code","video"]";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:14:"cfgSetTagShort";a:7:{s:4:"name";s:14:"cfgSetTagShort";s:4:"desc";s:25:"jevix_prop_cfgSetTagShort";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:13:"br,img,hr,cut";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:16:"cfgSetTagIsEmpty";a:7:{s:4:"name";s:16:"cfgSetTagIsEmpty";s:4:"desc";s:27:"jevix_prop_cfgSetTagIsEmpty";s:4:"type";s:8:"textarea";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}s:15:"cfgSetXHTMLMode";a:7:{s:4:"name";s:15:"cfgSetXHTMLMode";s:4:"desc";s:26:"jevix_prop_cfgSetXHTMLMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:16:"jevix:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/jevix/elements/snippets/snippet.jevix.php',
      'content' => '/** @var array $scriptProperties */
/** @var Jevix $Jevix */
if (!$modx->loadClass(\'jevix\', MODX_CORE_PATH . \'components/jevix/model/jevix/\', false, true)) {
	return \'Could not load Jevix!\';
}
$Jevix = new Jevix($modx, $scriptProperties);

return $Jevix->process($scriptProperties[\'input\']);',
    ),
  ),
);