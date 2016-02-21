<?php return array (
  '20af2efaa8650fc6c1a94229b4e9e611' => 
  array (
    'criteria' => 
    array (
      'name' => 'tickets',
    ),
    'object' => 
    array (
      'name' => 'tickets',
      'path' => '{core_path}components/tickets/',
      'assets_path' => '',
    ),
  ),
  '7413c52e80ed62f83106775410acba4f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.date_format',
    ),
    'object' => 
    array (
      'key' => 'tickets.date_format',
      'value' => '%d.%m.%y <small>%H:%M</small>',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2b8e564bb21120bad2d85734ef278993' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.enable_editor',
    ),
    'object' => 
    array (
      'key' => 'tickets.enable_editor',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5ad40794bdd169f029a470608ba26492' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.frontend_css',
    ),
    'object' => 
    array (
      'key' => 'tickets.frontend_css',
      'value' => '[[+cssUrl]]web/default.css',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e17a676c8040be5d38caf96d1508f66e' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.frontend_js',
    ),
    'object' => 
    array (
      'key' => 'tickets.frontend_js',
      'value' => '[[+jsUrl]]web/default.js',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '8d6d1f4f668c3efc048cbc7dd16b35f9' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.editor_config.ticket',
    ),
    'object' => 
    array (
      'key' => 'tickets.editor_config.ticket',
      'value' => '{onTab: {keepDefault:false, replaceWith:"	"}
		,markupSet: [
			{name:"Bold", className: "btn-bold", key:"B", openWith:"<b>", closeWith:"</b>" }
			,{name:"Italic", className: "btn-italic", key:"I", openWith:"<i>", closeWith:"</i>"  }
			,{name:"Underline", className: "btn-underline", key:"U", openWith:"<u>", closeWith:"</u>" }
			,{name:"Stroke through", className: "btn-stroke", key:"S", openWith:"<s>", closeWith:"</s>" }
			,{separator:"---------------" }
			,{name:"Bulleted List", className: "btn-bulleted", openWith:"	<li>", closeWith:"</li>", multiline:true, openBlockWith:"<ul>\\n", closeBlockWith:"\\n</ul>"}
			,{name:"Numeric List", className: "btn-numeric", openWith:"	<li>", closeWith:"</li>", multiline:true, openBlockWith:"<ol>\\n", closeBlockWith:"\\n</ol>"}
			,{separator:"---------------" }
			,{name:"Quote", className: "btn-quote", openWith:"<blockquote>", closeWith:"</blockquote>"}
			,{name:"Code", className: "btn-code", openWith:"<code>", closeWith:"</code>"}
			,{name:"Link", className: "btn-link", openWith:"<a href=\\"[![Link:!:http://]!]\\">", closeWith:"</a>" }
			,{name:"Picture", className: "btn-picture", replaceWith:"<img src=\\"[![Source:!:http://]!]\\" />" }
			,{separator:"---------------" }
			,{name:"Cut", className: "btn-cut", openWith:"<cut/>" }
		]}',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '6df8d1b5a89ad8f5797f7acec3b24d7f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.editor_config.comment',
    ),
    'object' => 
    array (
      'key' => 'tickets.editor_config.comment',
      'value' => '{onTab: {keepDefault:false, replaceWith:"	"}
		,markupSet: [
			{name:"Bold", className: "btn-bold", key:"B", openWith:"<b>", closeWith:"</b>" }
			,{name:"Italic", className: "btn-italic", key:"I", openWith:"<i>", closeWith:"</i>"  }
			,{name:"Underline", className: "btn-underline", key:"U", openWith:"<u>", closeWith:"</u>" }
			,{name:"Stroke through", className: "btn-stroke", key:"S", openWith:"<s>", closeWith:"</s>" }
			,{separator:"---------------" }
			,{name:"Quote", className: "btn-quote", openWith:"<blockquote>", closeWith:"</blockquote>"}
			,{name:"Code", className: "btn-code", openWith:"<code>", closeWith:"</code>"}
			,{name:"Link", className: "btn-link", openWith:"<a href=\\"[![Link:!:http://]!]\\">", closeWith:"</a>" }
			,{name:"Picture", className: "btn-picture", replaceWith:"<img src=\\"[![Source:!:http://]!]\\" />" }
		]}',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f689b9b262aecf9d0e07e3dec5120e03' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.default_template',
    ),
    'object' => 
    array (
      'key' => 'tickets.default_template',
      'value' => '5',
      'xtype' => 'modx-combo-template',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => '2015-02-09 06:17:20',
    ),
  ),
  '80825d26299c395cc311c5ebdad58186' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.snippet_prepare_comment',
    ),
    'object' => 
    array (
      'key' => 'tickets.snippet_prepare_comment',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e7df4103a4f4af8eff5a41e5a35411d5' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.comment_edit_time',
    ),
    'object' => 
    array (
      'key' => 'tickets.comment_edit_time',
      'value' => '600',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '091521b6ad333edcb82d9580d76418df' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.clear_cache_on_comment_save',
    ),
    'object' => 
    array (
      'key' => 'tickets.clear_cache_on_comment_save',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '7870d81d847e79b5386142edb793c24e' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.private_ticket_page',
    ),
    'object' => 
    array (
      'key' => 'tickets.private_ticket_page',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '94f17988dc73ac34a91691bd90e7c5c5' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.unpublished_ticket_page',
    ),
    'object' => 
    array (
      'key' => 'tickets.unpublished_ticket_page',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'f538e23df152a3a362421e9d8eb79aec' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.ticket_max_cut',
    ),
    'object' => 
    array (
      'key' => 'tickets.ticket_max_cut',
      'value' => '1000',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'da4bfbee71be973aea34f116d726e78f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_from',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_from',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'b51437546a6d8128ad71a2a7f6112d8d' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_from_name',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_from_name',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '23262153e4dde7cfa1da3e58363795e7' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_queue',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_queue',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '985c34e757c98634bc2a9194ce15a30d' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_bcc',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_bcc',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'bdb16ba6aaa013053f1fef9dab5dfb2a' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_bcc_level',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_bcc_level',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '5afdbbbfae5b658f81c7cc14db01b280' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.section_content_default',
    ),
    'object' => 
    array (
      'key' => 'tickets.section_content_default',
      'value' => '[[!pdoPage?
	&element=`getTickets`
]]

[[!+page.nav]]',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.section',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  'e6a1233ad30a23fa1a9065d542cffaa1' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.source_default',
    ),
    'object' => 
    array (
      'key' => 'tickets.source_default',
      'value' => '2',
      'xtype' => 'modx-combo-source',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => '2015-02-09 05:24:15',
    ),
  ),
  'bd64d38bf7190794be2b243b6311a922' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.count_guests',
    ),
    'object' => 
    array (
      'key' => 'tickets.count_guests',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => '0000-00-00 00:00:00',
    ),
  ),
  '2a954b26c9a0f2e9a377ce177f1f0283' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentSave',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentSave',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'aa9225be8ecea9faf73b5edea7844774' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentSave',
    ),
    'object' => 
    array (
      'name' => 'OnCommentSave',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '987b58b7af9168f485d712dce80b0476' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentPublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentPublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'a71b304d2696814cc576500615ada786' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentPublish',
    ),
    'object' => 
    array (
      'name' => 'OnCommentPublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '228e160b23b325925b725fe2b295a8dd' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentUnpublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'd7d842cd7e77c81cfcafbcdf68667fa2' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnCommentUnpublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'fbf7e1a218ee83137a9dbc9c9480d04d' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentDelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'b07cdccb874afe856b541432927f9cce' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentDelete',
    ),
    'object' => 
    array (
      'name' => 'OnCommentDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'dc7b81606323a4fde16c6f23e3b70f96' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'dc12dd0bde9ef96eda6c1a363b1b4c59' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnCommentUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'a017397ed34e7d8154c2a41feb64a43c' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'a6043d8cccbe549dc505d65b4596f8fa' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentRemove',
    ),
    'object' => 
    array (
      'name' => 'OnCommentRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'fed8f5615c7fbe2cb38da8eb8d7c9acf' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadClose',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadClose',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'd832e7621a0dac6f3b6bbea5ff30957d' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadClose',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadClose',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '9b6ef62f344116b46d058e9326225fba' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadOpen',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadOpen',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '809cf2516fda27d2ac730e38eaf03904' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadOpen',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadOpen',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'ea9e364e4acf5f7477d134d54320f699' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadDelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '69b8dcbb5362b57b968fdd9c1b861be2' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadDelete',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '98969d329ac8ff4e0944b5071360d6c4' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '6a51d3970f33d74a9ad810a5704591d5' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'd8a94bf016d0f86e3c1f8ad2be3a6ffe' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '9ffc5b7d0c32a1b0322ac00b4fa2dff0' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadRemove',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '4bde742ac46e2b2761ebf234a4cf6f46' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketUserPolicy',
    ),
    'object' => 
    array (
      'id' => 12,
      'name' => 'TicketUserPolicy',
      'description' => 'A policy for create and update Tickets.',
      'parent' => 0,
      'template' => 7,
      'class' => '',
      'data' => '{"ticket_delete":true,"ticket_publish":true,"ticket_save":true,"ticket_vote":true,"ticket_star":true,"comment_save":true,"comment_delete":true,"comment_remove":true,"comment_publish":true,"comment_vote":true,"comment_star":true,"ticket_file_upload":true,"ticket_file_delete":true,"thread_close":true,"thread_delete":true,"thread_remove":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  'd6f649d2512038bd6564462fc1186935' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketSectionPolicy',
    ),
    'object' => 
    array (
      'id' => 13,
      'name' => 'TicketSectionPolicy',
      'description' => 'A policy for add tickets in section.',
      'parent' => 0,
      'template' => 8,
      'class' => '',
      'data' => '{"section_add_children":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '1ae44da6ec86ee24d85f57ce42e42f23' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketVipPolicy',
    ),
    'object' => 
    array (
      'id' => 14,
      'name' => 'TicketVipPolicy',
      'description' => 'A policy for create and update private Tickets.',
      'parent' => 0,
      'template' => 7,
      'class' => '',
      'data' => '{"ticket_delete":true,"ticket_publish":true,"ticket_save":true,"ticket_vote":true,"ticket_star":true,"comment_save":true,"comment_delete":true,"comment_remove":true,"comment_publish":true,"comment_vote":true,"comment_star":true,"ticket_view_private":true,"ticket_file_upload":true,"ticket_file_delete":true,"thread_close":true,"thread_delete":true,"thread_remove":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '036192ea440422339324188193a4f90a' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketsUserPolicyTemplate',
    ),
    'object' => 
    array (
      'id' => 7,
      'template_group' => 1,
      'name' => 'TicketsUserPolicyTemplate',
      'description' => 'A policy for users to create Tickets and comments.',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  'f20299be0d56e6ce589d85d6a53e3c17' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'ticket_delete',
    ),
    'object' => 
    array (
      'id' => 215,
      'template' => 7,
      'name' => 'ticket_delete',
      'description' => 'ticket_delete',
      'value' => 1,
    ),
  ),
  '6b50113de036a5fe5f6b75017a4797a7' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'ticket_publish',
    ),
    'object' => 
    array (
      'id' => 216,
      'template' => 7,
      'name' => 'ticket_publish',
      'description' => 'ticket_publish',
      'value' => 1,
    ),
  ),
  'c6b0ddd78fa5d38296a72e66e2cf7479' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'ticket_save',
    ),
    'object' => 
    array (
      'id' => 217,
      'template' => 7,
      'name' => 'ticket_save',
      'description' => 'ticket_save',
      'value' => 1,
    ),
  ),
  '0b3c632140181835a78b5a0cf73f20e9' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'ticket_view_private',
    ),
    'object' => 
    array (
      'id' => 218,
      'template' => 7,
      'name' => 'ticket_view_private',
      'description' => 'ticket_view_private',
      'value' => 1,
    ),
  ),
  '95622ba3a9ccbd9cba25aed07aca5ea6' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'ticket_vote',
    ),
    'object' => 
    array (
      'id' => 219,
      'template' => 7,
      'name' => 'ticket_vote',
      'description' => 'ticket_vote',
      'value' => 1,
    ),
  ),
  '7426d7e3ce8a2f933c63886fee8c55bb' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'ticket_star',
    ),
    'object' => 
    array (
      'id' => 220,
      'template' => 7,
      'name' => 'ticket_star',
      'description' => 'ticket_star',
      'value' => 1,
    ),
  ),
  '8263783cdb0cb5e3f770cffd94ca38ca' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'comment_save',
    ),
    'object' => 
    array (
      'id' => 221,
      'template' => 7,
      'name' => 'comment_save',
      'description' => 'comment_save',
      'value' => 1,
    ),
  ),
  '2dc4f12f954a2073e5487e51731b174b' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'comment_delete',
    ),
    'object' => 
    array (
      'id' => 227,
      'template' => 7,
      'name' => 'comment_delete',
      'description' => 'comment_delete',
      'value' => 1,
    ),
  ),
  '9d9a0e3a0426ba5c98ba602d87b5593c' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'comment_remove',
    ),
    'object' => 
    array (
      'id' => 228,
      'template' => 7,
      'name' => 'comment_remove',
      'description' => 'comment_remove',
      'value' => 1,
    ),
  ),
  '882e8439988208b0c749eea8224dd6a7' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'comment_publish',
    ),
    'object' => 
    array (
      'id' => 229,
      'template' => 7,
      'name' => 'comment_publish',
      'description' => 'comment_publish',
      'value' => 1,
    ),
  ),
  'c4f9e5911e21fe1c66df29f88e81d510' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'comment_vote',
    ),
    'object' => 
    array (
      'id' => 222,
      'template' => 7,
      'name' => 'comment_vote',
      'description' => 'comment_vote',
      'value' => 1,
    ),
  ),
  'a3657333a3e31a8abfb228edcb6734b9' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'comment_star',
    ),
    'object' => 
    array (
      'id' => 223,
      'template' => 7,
      'name' => 'comment_star',
      'description' => 'comment_star',
      'value' => 1,
    ),
  ),
  '91b9cd7bf1d5b5332153250521169a47' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'ticket_file_upload',
    ),
    'object' => 
    array (
      'id' => 224,
      'template' => 7,
      'name' => 'ticket_file_upload',
      'description' => 'ticket_file_upload',
      'value' => 1,
    ),
  ),
  '9d6fc90abfca25156dbc3d2c2817f175' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'ticket_file_delete',
    ),
    'object' => 
    array (
      'id' => 225,
      'template' => 7,
      'name' => 'ticket_file_delete',
      'description' => 'ticket_file_delete',
      'value' => 1,
    ),
  ),
  '4e8bce4d898a780a8c9bf5693f8a2410' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'thread_close',
    ),
    'object' => 
    array (
      'id' => 230,
      'template' => 7,
      'name' => 'thread_close',
      'description' => 'thread_close',
      'value' => 1,
    ),
  ),
  'ab64138baacf0f5a0117f7c49ff4f60f' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'thread_delete',
    ),
    'object' => 
    array (
      'id' => 231,
      'template' => 7,
      'name' => 'thread_delete',
      'description' => 'thread_delete',
      'value' => 1,
    ),
  ),
  '5311f8d616a42ff8a698927abb3a56a6' => 
  array (
    'criteria' => 
    array (
      'template' => 7,
      'name' => 'thread_remove',
    ),
    'object' => 
    array (
      'id' => 232,
      'template' => 7,
      'name' => 'thread_remove',
      'description' => 'thread_remove',
      'value' => 1,
    ),
  ),
  '8037de22e7dd933af2e72ca38853ea1d' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketsSectionPolicyTemplate',
    ),
    'object' => 
    array (
      'id' => 8,
      'template_group' => 3,
      'name' => 'TicketsSectionPolicyTemplate',
      'description' => 'A policy for users to add Tickets to section.',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '7199e749d7e4b7201c4ec3f4abd56459' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'section_add_children',
    ),
    'object' => 
    array (
      'id' => 226,
      'template' => 8,
      'name' => 'section_add_children',
      'description' => 'section_add_children',
      'value' => 1,
    ),
  ),
  '01790650e0ce4fc6157c4493881600a2' => 
  array (
    'criteria' => 
    array (
      'namespace' => 'tickets',
      'controller' => 'index',
    ),
    'object' => 
    array (
      'id' => 2,
      'namespace' => 'tickets',
      'controller' => 'index',
      'haslayout' => 1,
      'lang_topics' => 'tickets:default',
      'assets' => '',
      'help_url' => '',
    ),
  ),
  'e297098f4e0d093947972f3fa91a5d62' => 
  array (
    'criteria' => 
    array (
      'text' => 'tickets',
    ),
    'object' => 
    array (
      'text' => 'tickets',
      'parent' => 'components',
      'action' => '2',
      'description' => 'ticket_menu_desc',
      'icon' => 'images/icons/plugin.gif',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'core',
    ),
  ),
  '2179b255a9a360f8da163191fd3c2e7e' => 
  array (
    'criteria' => 
    array (
      'category' => 'Tickets',
    ),
    'object' => 
    array (
      'id' => 4,
      'parent' => 0,
      'category' => 'Tickets',
      'rank' => 0,
    ),
  ),
  '77430136fb65839bb73a689d65cd3569' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.create',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.create',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<form class="well create" method="post" action="" id="ticketForm">
	<div id="ticket-preview-placeholder"></div>

	<input type="hidden" name="tid" value="0" />

	<div class="form-group">
		<label for="ticket-sections">[[%tickets_section]]</label>
		<select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
		<input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value="" maxlength="50" id="ticket-pagetitle"/>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10"></textarea>
		<span class="error"></span>
	</div>

	<div class="ticket-form-files">
		[[+files]]
	</div>

	<div class="form-actions row">
		<div class="col-md-6">
			<input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter" />
		</div>
		<div class="col-md-6 move-right">
			<input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title="" />
			<input type="submit" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="Ctrl + Shift + Enter" />
		</div>
	</div>
</form>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_create.tpl',
      'content' => '<form class="well create" method="post" action="" id="ticketForm">
	<div id="ticket-preview-placeholder"></div>

	<input type="hidden" name="tid" value="0" />

	<div class="form-group">
		<label for="ticket-sections">[[%tickets_section]]</label>
		<select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
		<input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value="" maxlength="50" id="ticket-pagetitle"/>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10"></textarea>
		<span class="error"></span>
	</div>

	<div class="ticket-form-files">
		[[+files]]
	</div>

	<div class="form-actions row">
		<div class="col-md-6">
			<input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter" />
		</div>
		<div class="col-md-6 move-right">
			<input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title="" />
			<input type="submit" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="Ctrl + Shift + Enter" />
		</div>
	</div>
</form>',
    ),
  ),
  '4220f3b094aea89e246a43f052146732' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.update',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.update',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<form class="well update" method="post" action="" id="ticketForm">
	<div id="ticket-preview-placeholder"></div>

	<input type="hidden" name="tid" value="[[+id]]" />

	<div class="form-group">
		<label for="ticket-sections">[[%tickets_section]]</label>
		<select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
		<input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value="[[+pagetitle]]" maxlength="50" id="ticket-pagetitle"/>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10">[[+content]]</textarea>
		<span class="error"></span>
	</div>

	<div class="ticket-form-files">
		[[+files]]
	</div>

	<div class="form-actions row">
		<div class="col-md-6">
			<input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter" />
		</div>
		<div class="col-md-6 move-right">
			[[!+published:is=`1`:then=`
			<a href="[[~[[+id]]?scheme=`full`]]" class="btn btn-default btn-xs" target="_blank">[[%ticket_open]]</a>
			<input type="button" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="" />
			`:else=`
			<input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title="" />
			`]]
			<input type="submit" class="btn btn-default save" name="save" value="[[%ticket_save]]" title="Ctrl + Shift + Enter" />
		</div>
	</div>
</form>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_update.tpl',
      'content' => '<form class="well update" method="post" action="" id="ticketForm">
	<div id="ticket-preview-placeholder"></div>

	<input type="hidden" name="tid" value="[[+id]]" />

	<div class="form-group">
		<label for="ticket-sections">[[%tickets_section]]</label>
		<select name="parent" class="form-control" id="ticket-sections">[[+sections]]</select>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
		<input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value="[[+pagetitle]]" maxlength="50" id="ticket-pagetitle"/>
		<span class="error"></span>
	</div>

	<div class="form-group">
		<textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor" rows="10">[[+content]]</textarea>
		<span class="error"></span>
	</div>

	<div class="ticket-form-files">
		[[+files]]
	</div>

	<div class="form-actions row">
		<div class="col-md-6">
			<input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter" />
		</div>
		<div class="col-md-6 move-right">
			[[!+published:is=`1`:then=`
			<a href="[[~[[+id]]?scheme=`full`]]" class="btn btn-default btn-xs" target="_blank">[[%ticket_open]]</a>
			<input type="button" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="" />
			`:else=`
			<input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title="" />
			`]]
			<input type="submit" class="btn btn-default save" name="save" value="[[%ticket_save]]" title="Ctrl + Shift + Enter" />
		</div>
	</div>
</form>',
    ),
  ),
  '660e6a4dbaa2b8b85f170b0a578daf00' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.preview',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.preview',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<h3 class="title">[[+pagetitle]]</h3>
<div class="content">[[+content]]</div>
<h5 class="author">[[+modx.user.id:userinfo=`username`]]</h5>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_preview.tpl',
      'content' => '<h3 class="title">[[+pagetitle]]</h3>
<div class="content">[[+content]]</div>
<h5 class="author">[[+modx.user.id:userinfo=`username`]]</h5>
',
    ),
  ),
  '6196db2851f21b2f7e82ca10e6cae70c' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.files',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.files',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div id="ticket-files-list">
	[[+files]]
	<div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="ticket/file/upload">
	<a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
	<div id="ticket-files-progress">
		<span id="ticket-files-progress-count">0/0</span>
		<span id="ticket-files-progress-percent">0%</span>
		<div id="ticket-files-progress-bar"></div>
	</div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_files.tpl',
      'content' => '<div id="ticket-files-list">
	[[+files]]
	<div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="ticket/file/upload">
	<a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
	<div id="ticket-files-progress">
		<span id="ticket-files-progress-count">0/0</span>
		<span id="ticket-files-progress-percent">0%</span>
		<div id="ticket-files-progress-bar"></div>
	</div>
</div>',
    ),
  ),
  'e7e92163cb3235180cf91ad15cf7e4e4' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.file',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.file',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
	<a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
		<div class="ticket-file-image-wrapper">
			[[+file]]
		</div>
	</a>
	<div class="ticket-file-meta">
		<a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
		<a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
		<br/>
		<a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
		<br/>
		<span class="ticket-file-size">[[+size]] Kb</span>
	</div>
	<div class="ticket-file-template">
		<a href="[[+url]]">
			[[+name]]
		</a>
	</div>
</div>
<!--tickets_thumb <img src="[[+thumb]]" class="ticket-file-image" />-->
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_file.tpl',
      'content' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
	<a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
		<div class="ticket-file-image-wrapper">
			[[+file]]
		</div>
	</a>
	<div class="ticket-file-meta">
		<a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
		<a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
		<br/>
		<a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
		<br/>
		<span class="ticket-file-size">[[+size]] Kb</span>
	</div>
	<div class="ticket-file-template">
		<a href="[[+url]]">
			[[+name]]
		</a>
	</div>
</div>
<!--tickets_thumb <img src="[[+thumb]]" class="ticket-file-image" />-->
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
    ),
  ),
  '2611e44596fb27ddafecb285ffad156d' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.image',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.image',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
	<a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
		<div class="ticket-file-image-wrapper">
			<img src="[[+thumb]]" class="ticket-file-image" />
		</div>
	</a>
	<div class="ticket-file-meta">
		<a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
		<a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
		<br/>
		<a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
		<br/>
		<span class="ticket-file-size">[[+size]] Kb</span>
	</div>
	<div class="ticket-file-template">
		<a href="[[+url]]" title="[[+name]]">
			<img src="[[+thumb]]" />
		</a>
	</div>
</div>
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_image.tpl',
      'content' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
	<a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
		<div class="ticket-file-image-wrapper">
			<img src="[[+thumb]]" class="ticket-file-image" />
		</div>
	</a>
	<div class="ticket-file-meta">
		<a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
		<a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
		<br/>
		<a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
		<br/>
		<span class="ticket-file-size">[[+size]] Kb</span>
	</div>
	<div class="ticket-file-template">
		<a href="[[+url]]" title="[[+name]]">
			<img src="[[+thumb]]" />
		</a>
	</div>
</div>
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
    ),
  ),
  '1cb0f605f27c0c1f044c443ae6a3f99f' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.latest',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.latest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="tickets-latest-row">
	<span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span class="date">[[+date_ago]]</span>
	<br/>
	<span class="section">
		<i class="glyphicon glyphicon-folder-open"></i> <a href="[[~[[+section.id]]]]">[[+section.pagetitle]]</a> <span class="arrow">&rarr;</span>
	</span>
	<span class="ticket">
		<a href="[[~[[+id]]]]">[[+pagetitle]]</a>
	</span>
	<nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_latest.tpl',
      'content' => '<div class="tickets-latest-row">
	<span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span class="date">[[+date_ago]]</span>
	<br/>
	<span class="section">
		<i class="glyphicon glyphicon-folder-open"></i> <a href="[[~[[+section.id]]]]">[[+section.pagetitle]]</a> <span class="arrow">&rarr;</span>
	</span>
	<span class="ticket">
		<a href="[[~[[+id]]]]">[[+pagetitle]]</a>
	</span>
	<nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>',
    ),
  ),
  '157d1ff30a0b7a1210a9ddb37175f878' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.email.bcc',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.email.bcc',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<p>Кто-то создал новый тикет у вас на сайте: <a href="[[~[[+id]]?scheme=`full`]]">[[+pagetitle]]</a>.
<pre style="background-color:#efefef;">[[+introtext]]</pre>
<p><b>[[+createdby:userinfo=`fullname`]]</b> ([[+createdby:userinfo=`email`]])</p>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_email_bcc.tpl',
      'content' => '<p>Кто-то создал новый тикет у вас на сайте: <a href="[[~[[+id]]?scheme=`full`]]">[[+pagetitle]]</a>.
<pre style="background-color:#efefef;">[[+introtext]]</pre>
<p><b>[[+createdby:userinfo=`fullname`]]</b> ([[+createdby:userinfo=`email`]])</p>',
    ),
  ),
  '177c917f3cdca429e5ed1d0f6681648c' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.email.subscription',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.email.subscription',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<p>В секции "<a href="[[~[[+section.id]]?scheme=`full`]]">[[+section.pagetitle]]</a>", на которую вы подписаны, был опубликован новый тикет: "<a href="[[~[[+id]]?scheme=`full`]]">[[+pagetitle]]</a>".
<pre style="background-color:#efefef;">[[+introtext]]</pre>
<p>Автор: <b>[[+createdby:userinfo=`fullname`]]</b></p>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_email_subscription.tpl',
      'content' => '<p>В секции "<a href="[[~[[+section.id]]?scheme=`full`]]">[[+section.pagetitle]]</a>", на которую вы подписаны, был опубликован новый тикет: "<a href="[[~[[+id]]?scheme=`full`]]">[[+pagetitle]]</a>".
<pre style="background-color:#efefef;">[[+introtext]]</pre>
<p>Автор: <b>[[+createdby:userinfo=`fullname`]]</b></p>',
    ),
  ),
  '64dfc27cafa6662514cad85c4759d40f' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.form',
    ),
    'object' => 
    array (
      'id' => 12,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.form',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<h4 id="comment-new-link">
	<a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
	<form id="comment-form" action="" method="post" class="well">
		<div id="comment-preview-placeholder"></div>
		<input type="hidden" name="thread" value="[[+thread]]" />
		<input type="hidden" name="parent" value="0" />
		<input type="hidden" name="id" value="0" />

		<div class="form-group">
			<label for="comment-editor"></label>
			<textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
		</div>

		<div class="form-actions">
			<input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]" title="Ctrl + Enter" />
			<input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]" title="Ctrl + Shift + Enter" />
			<span class="time"></span>
		</div>
	</form>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_form.tpl',
      'content' => '<h4 id="comment-new-link">
	<a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
	<form id="comment-form" action="" method="post" class="well">
		<div id="comment-preview-placeholder"></div>
		<input type="hidden" name="thread" value="[[+thread]]" />
		<input type="hidden" name="parent" value="0" />
		<input type="hidden" name="id" value="0" />

		<div class="form-group">
			<label for="comment-editor"></label>
			<textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
		</div>

		<div class="form-actions">
			<input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]" title="Ctrl + Enter" />
			<input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]" title="Ctrl + Shift + Enter" />
			<span class="time"></span>
		</div>
	</form>
</div>',
    ),
  ),
  'bbf197b7cd2688fe87efb356d1682628' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.form.guest',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.form.guest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<h4 id="comment-new-link">
	<a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
	<form id="comment-form" action="" method="post" class="well">
		<div id="comment-preview-placeholder"></div>
		<input type="hidden" name="thread" value="[[+thread]]" />
		<input type="hidden" name="parent" value="0" />
		<input type="hidden" name="id" value="0" />

		<div class="form-group">
			<label for="comment-name">[[%ticket_comment_name]]</label>
			<input type="text" name="name" value="[[+name]]" id="comment-name" class="form-control" />
			<span class="error"></span>
		</div>

		<div class="form-group">
			<label for="comment-email">[[%ticket_comment_email]]</label>
			<input type="text" name="email" value="[[+email]]" id="comment-email" class="form-control" />
			<span class="error"></span>
		</div>

		<div class="form-group">
			<label for="comment-editor"></label>
			<textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
		</div>

		[[+captcha]]

		<div class="form-actions">
			<input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]" title="Ctrl + Enter" />
			<input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]" title="Ctrl + Shift + Enter" />
			<span class="time"></span>
		</div>
	</form>
</div>

<!--tickets_captcha
<div class="form-group">
	<label for="comment-captcha" id="comment-captcha">[[+captcha]]</label>
	<input type="text" name="captcha" value="" id="comment-captcha" class="form-control" />
	<span class="error"></span>
</div>
-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_form_guest.tpl',
      'content' => '<h4 id="comment-new-link">
	<a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
	<form id="comment-form" action="" method="post" class="well">
		<div id="comment-preview-placeholder"></div>
		<input type="hidden" name="thread" value="[[+thread]]" />
		<input type="hidden" name="parent" value="0" />
		<input type="hidden" name="id" value="0" />

		<div class="form-group">
			<label for="comment-name">[[%ticket_comment_name]]</label>
			<input type="text" name="name" value="[[+name]]" id="comment-name" class="form-control" />
			<span class="error"></span>
		</div>

		<div class="form-group">
			<label for="comment-email">[[%ticket_comment_email]]</label>
			<input type="text" name="email" value="[[+email]]" id="comment-email" class="form-control" />
			<span class="error"></span>
		</div>

		<div class="form-group">
			<label for="comment-editor"></label>
			<textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
		</div>

		[[+captcha]]

		<div class="form-actions">
			<input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]" title="Ctrl + Enter" />
			<input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]" title="Ctrl + Shift + Enter" />
			<span class="time"></span>
		</div>
	</form>
</div>

<!--tickets_captcha
<div class="form-group">
	<label for="comment-captcha" id="comment-captcha">[[+captcha]]</label>
	<input type="text" name="captcha" value="" id="comment-captcha" class="form-control" />
	<span class="error"></span>
</div>
-->',
    ),
  ),
  'c7e4fe038d79aa4a5f97f9683c5f3d11' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.one.auth',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.one.auth',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<li class="ticket-comment[[+comment_new]]" id="comment-[[+id]]" data-parent="[[+parent]]" data-newparent="[[+new_parent]]" data-id="[[+id]]">
	<div class="ticket-comment-body[[+guest]][[+bad]]">
		<div class="ticket-comment-header">
			<div class="ticket-comment-dot-wrapper"><div class="ticket-comment-dot"></div></div>
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
			<span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>
			[[+has_parent]]
			<span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>
			<span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
				<span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
				<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
				<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>
	<div class="comment-reply">
		<a href="#" class="reply">[[%ticket_comment_reply]]</a>
		[[+comment_edit_link]]
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_comment_edit_link <a href="#" class="edit">[[%ticket_comment_edit]]</a>-->
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_comment_new  ticket-comment-new-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_one_auth.tpl',
      'content' => '<li class="ticket-comment[[+comment_new]]" id="comment-[[+id]]" data-parent="[[+parent]]" data-newparent="[[+new_parent]]" data-id="[[+id]]">
	<div class="ticket-comment-body[[+guest]][[+bad]]">
		<div class="ticket-comment-header">
			<div class="ticket-comment-dot-wrapper"><div class="ticket-comment-dot"></div></div>
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
			<span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>
			[[+has_parent]]
			<span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>
			<span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
				<span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
				<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
				<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>
	<div class="comment-reply">
		<a href="#" class="reply">[[%ticket_comment_reply]]</a>
		[[+comment_edit_link]]
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_comment_edit_link <a href="#" class="edit">[[%ticket_comment_edit]]</a>-->
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_comment_new  ticket-comment-new-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->
',
    ),
  ),
  '128395b8c06c173896b615837c395605' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.one.guest',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.one.guest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<li class="ticket-comment" id="comment-[[+id]]">
	<div class="ticket-comment-body[[+bad]]">
		<div class="ticket-comment-header">
			<div class="ticket-comment-dot-wrapper"><div class="ticket-comment-dot"></div></div>
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>

			[[+has_parent]]
			<span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>

			<span class="ticket-comment-rating inactive">
				<span class="rating[[+rating_positive]][[+rating_negative]]">
					[[+rating]]
				</span>
				<span class="plus" title="[[%ticket_like]]">
					<i class="glyphicon glyphicon-arrow-up"></i>
				</span>
				<span class="minus" title="[[%ticket_dislike]]">
					<i class="glyphicon glyphicon-arrow-down"></i>
				</span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_one_guest.tpl',
      'content' => '<li class="ticket-comment" id="comment-[[+id]]">
	<div class="ticket-comment-body[[+bad]]">
		<div class="ticket-comment-header">
			<div class="ticket-comment-dot-wrapper"><div class="ticket-comment-dot"></div></div>
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>

			[[+has_parent]]
			<span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>

			<span class="ticket-comment-rating inactive">
				<span class="rating[[+rating_positive]][[+rating_negative]]">
					[[+rating]]
				</span>
				<span class="plus" title="[[%ticket_like]]">
					<i class="glyphicon glyphicon-arrow-up"></i>
				</span>
				<span class="minus" title="[[%ticket_dislike]]">
					<i class="glyphicon glyphicon-arrow-down"></i>
				</span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->',
    ),
  ),
  'b54dfa336966628a7e8963b58b244d46' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.one.deleted',
    ),
    'object' => 
    array (
      'id' => 16,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.one.deleted',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<li class="ticket-comment" id="comment-[[+id]]">
	<div class="ticket-comment-body alert alert-warning">
		[[%ticket_comment_deleted_text]]
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_one_deleted.tpl',
      'content' => '<li class="ticket-comment" id="comment-[[+id]]">
	<div class="ticket-comment-body alert alert-warning">
		[[%ticket_comment_deleted_text]]
	</div>
	<ol class="comments-list">[[+children]]</ol>
</li>
',
    ),
  ),
  'e100bdea9921bf4a0e16b93b1ab7d9e2' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.wrapper',
    ),
    'object' => 
    array (
      'id' => 17,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.wrapper',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="comments">
	[[+modx.user.id:isloggedin:is=`1`:then=`
	<span class="comments-subscribe pull-right">
		<label for="comments-subscribe" class="checkbox">
			<input type="checkbox" name="" id="comments-subscribe" value="1" [[+subscribed]] /> [[%ticket_comment_notify]]
		</label>
	</span>
	`:else=``]]

	<h3 class="title">[[%comments]] (<span id="comment-total">[[+total]]</span>)</h3>

	<div id="comments-wrapper">
		<ol class="comment-list" id="comments">[[+comments]]</ol>
	</div>

	<div id="comments-tpanel">
		<div id="tpanel-refresh"></div>
		<div id="tpanel-new"></div>
	</div>
</div>

<!--tickets_subscribed checked-->
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_wrapper.tpl',
      'content' => '<div class="comments">
	[[+modx.user.id:isloggedin:is=`1`:then=`
	<span class="comments-subscribe pull-right">
		<label for="comments-subscribe" class="checkbox">
			<input type="checkbox" name="" id="comments-subscribe" value="1" [[+subscribed]] /> [[%ticket_comment_notify]]
		</label>
	</span>
	`:else=``]]

	<h3 class="title">[[%comments]] (<span id="comment-total">[[+total]]</span>)</h3>

	<div id="comments-wrapper">
		<ol class="comment-list" id="comments">[[+comments]]</ol>
	</div>

	<div id="comments-tpanel">
		<div id="tpanel-refresh"></div>
		<div id="tpanel-new"></div>
	</div>
</div>

<!--tickets_subscribed checked-->
',
    ),
  ),
  'df6bb0515e3cf0dc14445a9f7355a058' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.login',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.login',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-comments alert alert-warning">
    <p>[[%ticket_comment_err_no_auth]]</p>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_login.tpl',
      'content' => '<div class="ticket-comments alert alert-warning">
    <p>[[%ticket_comment_err_no_auth]]</p>
</div>',
    ),
  ),
  '4dbc08d53174e73b3fb75eb428c84de0' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.latest',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.latest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="tickets-latest-row[[+guest]]">
	<span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span class="date">[[+date_ago]]</span>
	<br/>
	<span class="ticket">
		<a href="[[~[[+ticket.id]]]]#comment-[[+id]]">[[+ticket.pagetitle]]</a>
	</span>
	<nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>
<!--tickets_guest  ticket-comment-guest-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_latest.tpl',
      'content' => '<div class="tickets-latest-row[[+guest]]">
	<span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span class="date">[[+date_ago]]</span>
	<br/>
	<span class="ticket">
		<a href="[[~[[+ticket.id]]]]#comment-[[+id]]">[[+ticket.pagetitle]]</a>
	</span>
	<nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>
<!--tickets_guest  ticket-comment-guest-->',
    ),
  ),
  '47797473b46f9c2a702aa326265974b7' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.owner',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.owner',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => 'Пользователь <b>[[+name]]</b> оставил комментарий к вашему тикету "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>":
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">Ответить</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_owner.tpl',
      'content' => 'Пользователь <b>[[+name]]</b> оставил комментарий к вашему тикету "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>":
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">Ответить</a>',
    ),
  ),
  '0f731588a4996b799a139e981aefe1e9' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.reply',
    ),
    'object' => 
    array (
      'id' => 21,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.reply',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => 'Пользователь <b>[[+name]]</b> ответил на ваш комментарий к тикету "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>":
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">Ответить</a>
<br/><br/>
Текст комментария:
<pre>[[+parent_text]]</pre>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_reply.tpl',
      'content' => 'Пользователь <b>[[+name]]</b> ответил на ваш комментарий к тикету "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>":
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">Ответить</a>
<br/><br/>
Текст комментария:
<pre>[[+parent_text]]</pre>',
    ),
  ),
  '8236209b6db3bde1b73c7f7bdbf0d557' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.subscription',
    ),
    'object' => 
    array (
      'id' => 22,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.subscription',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => 'Пользователь <b>[[+name]]</b> оставил комментарий в тикете, на который вы подписаны - "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>":
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">Просмотреть</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_subscription.tpl',
      'content' => 'Пользователь <b>[[+name]]</b> оставил комментарий в тикете, на который вы подписаны - "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>":
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">Просмотреть</a>',
    ),
  ),
  'f2ce3067c4d26dfb6c6c3deb59bd3ae6' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.bcc',
    ),
    'object' => 
    array (
      'id' => 23,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.bcc',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => 'Пользователь <b>[[+name]]</b> оставил комментарий в тикете "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>":
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">Просмотреть</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_bcc.tpl',
      'content' => 'Пользователь <b>[[+name]]</b> оставил комментарий в тикете "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>":
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">Просмотреть</a>',
    ),
  ),
  '23b8246d03282c50c9992fcb2b01e7ac' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.unpublished',
    ),
    'object' => 
    array (
      'id' => 38,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.unpublished',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<p>Пользователь <b>[[+name]]</b> оставил комментарий в тикете "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>".</p>
Теперь вам нужно проверить его и опубликовать на сайте:
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[+manager_url]]">Все комментарии</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_unpublished.tpl',
      'content' => '<p>Пользователь <b>[[+name]]</b> оставил комментарий в тикете "<a href="[[~[[+resource]]?scheme=`full`]]">[[+pagetitle]]</a>".</p>
Теперь вам нужно проверить его и опубликовать на сайте:
<pre>[[+text]]</pre>
<br/><br/>
<a href="[[+manager_url]]">Все комментарии</a>',
    ),
  ),
  'e2905fa747932afaee5ecb5b8ee76bfb' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.list.row',
    ),
    'object' => 
    array (
      'id' => 24,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.list.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-comment-row ticket-comment" id="comment-[[+id]]" data-id="[[+id]]">
	<div class="ticket-comment-body[[+guest]]">
		<div class="ticket-comment-header">
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
			<span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>

			<span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
				<span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
				<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
				<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>

	<a href="[[~[[+section.id]]]]" class="ticket-comment-section"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a> &rarr;
	<a href="[[~[[+ticket.id]]]]" class="ticket-comment-ticket">[[+ticket.pagetitle]]</a> &nbsp;
	<span class="ticket-comment-comments"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</span>
</div>
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_list_row.tpl',
      'content' => '<div class="ticket-comment-row ticket-comment" id="comment-[[+id]]" data-id="[[+id]]">
	<div class="ticket-comment-body[[+guest]]">
		<div class="ticket-comment-header">
			<img src="[[+avatar]]" class="ticket-avatar" alt="" />
			<span class="ticket-comment-author">[[+fullname]]</span>
			<span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
			<span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
			<span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>

			<span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
				<span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
				<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
				<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
			</span>
		</div>
		<div class="ticket-comment-text">
			[[+text]]
		</div>
	</div>

	<a href="[[~[[+section.id]]]]" class="ticket-comment-section"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a> &rarr;
	<a href="[[~[[+ticket.id]]]]" class="ticket-comment-ticket">[[+ticket.pagetitle]]</a> &nbsp;
	<span class="ticket-comment-comments"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</span>
</div>
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
    ),
  ),
  'a8788925fd66316e2055d8fdd1338ff6' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.list.row',
    ),
    'object' => 
    array (
      'id' => 25,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.list.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="tickets-row">
    <h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
	<div class="content">
		[[+introtext]]<br/>
		<a href="[[~[[+id]]]]#cut" class="btn btn-default ticket-read-more">[[%ticket_read_more]]</a>
	</div>
	<div class="ticket-meta row" data-id="[[+id]]">
		<span class="col-md-5">
			<i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-user"></i> [[+fullname]]
		</span>
		<span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
		<span class="col-md-3">
			<span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span class="ticket-star-count">[[+stars]]</span></span>
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-eye-open"></i> [[+views]]
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-comment"></i> [[+comments]]  [[+new_comments]]
		</span>
		<span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
			<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
			[[+can_vote]][[+cant_vote]]
			<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
		</span>
	</div>
</div>
<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_new_comments <span class="ticket-new-comments">+[[+new_comments]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_list_row.tpl',
      'content' => '<div class="tickets-row">
    <h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
	<div class="content">
		[[+introtext]]<br/>
		<a href="[[~[[+id]]]]#cut" class="btn btn-default ticket-read-more">[[%ticket_read_more]]</a>
	</div>
	<div class="ticket-meta row" data-id="[[+id]]">
		<span class="col-md-5">
			<i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-user"></i> [[+fullname]]
		</span>
		<span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
		<span class="col-md-3">
			<span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span class="ticket-star-count">[[+stars]]</span></span>
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-eye-open"></i> [[+views]]
			&nbsp;&nbsp;
			<i class="glyphicon glyphicon-comment"></i> [[+comments]]  [[+new_comments]]
		</span>
		<span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
			<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i class="glyphicon glyphicon-arrow-up"></i></span>
			[[+can_vote]][[+cant_vote]]
			<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i class="glyphicon glyphicon-arrow-down"></i></span>
		</span>
	</div>
</div>
<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_new_comments <span class="ticket-new-comments">+[[+new_comments]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
    ),
  ),
  '445e1c62995b32f167821baf95481614' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.sections.row',
    ),
    'object' => 
    array (
      'id' => 26,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.sections.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="section-row">
	<h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
	<div class="content">
		[[+introtext]]
	</div>
	<div class="section-meta row">
		<div class="col-md-1"><i class="glyphicon glyphicon-th-list"></i> [[+tickets]]</div>
		<div class="col-md-1"><i class="glyphicon glyphicon-eye-open"></i> [[+views]]</div>
		<div class="col-md-1"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</div>
	</div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_sections_row.tpl',
      'content' => '<div class="section-row">
	<h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
	<div class="content">
		[[+introtext]]
	</div>
	<div class="section-meta row">
		<div class="col-md-1"><i class="glyphicon glyphicon-th-list"></i> [[+tickets]]</div>
		<div class="col-md-1"><i class="glyphicon glyphicon-eye-open"></i> [[+views]]</div>
		<div class="col-md-1"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</div>
	</div>
</div>',
    ),
  ),
  'a475f9bb5da2ab33eae9bce270503b5a' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.sections.wrapper',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.sections.wrapper',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="tickets-subscribe pull-right">
	<label for="tickets-subscribe" class="checkbox">
		<input type="checkbox" name="" id="tickets-subscribe" value="1" data-id="[[*id]]" [[+subscribed:notempty=`checked`]] /> [[%tickets_section_notify]]
	</label>
</span>
`:else=``]]

<div class="tickets-list">
	[[+output]]
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_sections_wrapper.tpl',
      'content' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="tickets-subscribe pull-right">
	<label for="tickets-subscribe" class="checkbox">
		<input type="checkbox" name="" id="tickets-subscribe" value="1" data-id="[[*id]]" [[+subscribed:notempty=`checked`]] /> [[%tickets_section_notify]]
	</label>
</span>
`:else=``]]

<div class="tickets-list">
	[[+output]]
</div>',
    ),
  ),
  '3f21b6ee9d928ee032f69b1e43a7e9e8' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.meta',
    ),
    'object' => 
    array (
      'id' => 28,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.meta',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-meta row" data-id="[[+id]]">
	<span class="col-md-5">
		<i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
		&nbsp;&nbsp;
		<i class="glyphicon glyphicon-user"></i> [[+fullname]]
	</span>
	<span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
	<span class="col-md-2">
		<span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span class="ticket-star-count">[[+stars]]</span></span>
		&nbsp;&nbsp;
		<i class="glyphicon glyphicon-eye-open"></i> [[+views]]
	</span>
	<span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
		<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]">
			<i class="glyphicon glyphicon-arrow-up"></i>
		</span>
		[[+can_vote]][[+cant_vote]]
		<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]">
			<i class="glyphicon glyphicon-arrow-down"></i>
		</span>
	</span>
</div>
[[+has_files]]

<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_files
<ul class="ticket-files">
	<strong>[[%ticket_uploaded_files]]:</strong>
	[[+files]]
</ul>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_meta.tpl',
      'content' => '<div class="ticket-meta row" data-id="[[+id]]">
	<span class="col-md-5">
		<i class="glyphicon glyphicon-calendar"></i> [[+date_ago]]
		&nbsp;&nbsp;
		<i class="glyphicon glyphicon-user"></i> [[+fullname]]
	</span>
	<span class="col-md-2"><a href="[[~[[+section.id]]]]"><i class="glyphicon glyphicon-folder-open"></i> [[+section.pagetitle]]</a></span>
	<span class="col-md-2">
		<span class="ticket-star[[+can_star]]">[[+stared]][[+unstared]] <span class="ticket-star-count">[[+stars]]</span></span>
		&nbsp;&nbsp;
		<i class="glyphicon glyphicon-eye-open"></i> [[+views]]
	</span>
	<span class="col-md-2 pull-right ticket-rating[[+active]][[+inactive]]">
		<span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]">
			<i class="glyphicon glyphicon-arrow-up"></i>
		</span>
		[[+can_vote]][[+cant_vote]]
		<span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]">
			<i class="glyphicon glyphicon-arrow-down"></i>
		</span>
	</span>
</div>
[[+has_files]]

<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_files
<ul class="ticket-files">
	<strong>[[%ticket_uploaded_files]]:</strong>
	[[+files]]
</ul>-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
    ),
  ),
  'c024406bd0c98fb32f59b51df465647e' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.meta.file',
    ),
    'object' => 
    array (
      'id' => 29,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.meta.file',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<li>
	<a href="[[+url]]" target="_blank">[[+name]]</a> [[+size]] kb
</li>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_meta_file.tpl',
      'content' => '<li>
	<a href="[[+url]]" target="_blank">[[+name]]</a> [[+size]] kb
</li>',
    ),
  ),
  '763573927c03937166ce58db9199e0c3' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketForm',
    ),
    'object' => 
    array (
      'id' => 21,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

if (!$Tickets->authenticated) {
	return $modx->lexicon(\'ticket_err_no_auth\');
}

$tplSectionRow = $modx->getOption(\'tplSectionRow\', $scriptProperties, \'tpl.Tickets.sections.row\');
$tplFormCreate = $modx->getOption(\'tplFormCreate\', $scriptProperties, \'tpl.Tickets.form.create\');
$tplFormUpdate = $modx->getOption(\'tplFormUpdate\', $scriptProperties, \'tpl.Tickets.form.update\');
$tplFiles = $modx->getOption(\'tplFiles\', $scriptProperties, \'tpl.Tickets.form.files\');
$tplFile = $Tickets->config[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl.Tickets.form.file\', true);
$tplImage = $Tickets->config[\'tplImage\'] = $modx->getOption(\'tplImage\', $scriptProperties, \'tpl.Tickets.form.image\', true);
if (empty($source)) {
	$source = $Tickets->config[\'source\'] = $modx->getOption(\'tickets.source_default\', null, $modx->getOption(\'default_media_source\'));
}
$tid = !empty($_REQUEST[\'tid\'])
	? (int)$_REQUEST[\'tid\']
	: 0;
$parent = !empty($_REQUEST[\'parent\'])
	? $_REQUEST[\'parent\']
	: \'\';
$data = array();

// Update of ticket
if (!empty($tid)) {
	$tplWrapper = $tplFormUpdate;
	/* @var Ticket $ticket */
	if ($ticket = $modx->getObject(\'Ticket\', array(\'class_key\' => \'Ticket\', \'id\' => $tid))) {
		if ($ticket->get(\'createdby\') != $modx->user->id && !$modx->hasPermission(\'edit_document\')) {
			return $modx->lexicon(\'ticket_err_wrong_user\');
		}
		$charset = $modx->getOption(\'modx_charset\');
		$allowedFields = array_map(\'trim\', explode(\',\', $scriptProperties[\'allowedFields\']));
		$allowedFields = array_unique(array_merge($allowedFields, array(\'parent\', \'pagetitle\', \'content\')));

		$fields = array_keys($modx->getFieldMeta(\'Ticket\'));
		foreach ($allowedFields as $field) {
			$value = in_array($field, $fields)
				? $ticket->get($field)
				: $ticket->getTVValue($field);
			if (is_string($value)) {
				$value = html_entity_decode($value, ENT_QUOTES, $charset);
				$value = str_replace(array(\'[^\', \'^]\', \'[\', \']\'), array(\'&#91;^\', \'^&#93;\', \'*{*{*{*{*{*\', \'*}*}*}*}*}*\'), $value);
				$value = htmlentities($value, ENT_QUOTES, $charset);
			}
			$data[$field] = $value;
		}
		$data[\'id\'] = $ticket->id;
		$data[\'published\'] = $ticket->published;
		if (empty($parent)) {
			$parent = $ticket->get(\'parent\');
		}
	}
	else {
		return $modx->lexicon(\'ticket_err_id\', array(\'id\' => $tid));
	}
}
else {
	$tplWrapper = $tplFormCreate;
}

// Get available sections for ticket create
$data[\'sections\'] = \'\';
/** @var modProcessorResponse $response */
$response = $Tickets->runProcessor(\'web/section/getlist\', array(
	\'parents\' => $scriptProperties[\'parents\'],
	\'resources\' => $scriptProperties[\'resources\'],
	\'permissions\' => $scriptProperties[\'permissions\'],
	\'sortby\' => !empty($scriptProperties[\'sortby\'])
		? $scriptProperties[\'sortby\']
		: \'pagetitle\',
	\'sortdir\' => !empty($scriptProperties[\'sortdir\'])
		? $scriptProperties[\'sortdir\']
		: \'asc\',
	\'depth\' => isset($scriptProperties[\'depth\'])
		? $scriptProperties[\'depth\']
		: 0,
	\'context\' => !empty($scriptProperties[\'context\'])
		? $scriptProperties[\'context\']
		: $modx->context->key,
	\'limit\' => 0,
));
$response = $modx->fromJSON($response->getResponse());

if (!empty($response[\'results\'])) {
	$Tickets->config[\'sections\'] = array();
	foreach ($response[\'results\'] as $v) {
		$v[\'selected\'] = $parent == $v[\'id\'] || $parent == $v[\'alias\']
			? \'selected\'
			: \'\';
		$data[\'sections\'] .= $Tickets->getChunk($tplSectionRow, $v);
		$Tickets->config[\'sections\'][] = $v[\'id\'];
	}
}

if (!empty($allowFiles)) {
	$q = $modx->newQuery(\'TicketFile\');
	$q->where(array(\'class\' => \'Ticket\'));
	$q->andCondition(array(\'parent\' => 0, \'createdby\' => $modx->user->id), null, 1);
	if (!empty($tid)) {
		$q->orCondition(array(\'parent\' => $tid), null, 1);
	}
	$q->sortby(\'createdon\', \'ASC\');
	$collection = $modx->getIterator(\'TicketFile\', $q);
	$files = \'\';
	/** @var TicketFile $item */
	foreach ($collection as $item) {
		if ($item->get(\'deleted\') && !$item->get(\'parent\')) {
			$item->remove();
		}
		else {
			$item = $item->toArray();
			$item[\'size\'] = round($item[\'size\'] / 1024, 2);
			$item[\'new\'] = empty($item[\'parent\']);
			$tpl = $item[\'type\'] == \'image\'
				? $tplImage
				: $tplFile;
			$files .= $Tickets->getChunk($tpl, $item);
		}
	}
	$data[\'files\'] = $Tickets->getChunk($tplFiles, array(
		\'files\' => $files,
	));
	/** @var modMediaSource $source */
	if ($source = $modx->getObject(\'sources.modMediaSource\', $source)) {
		$properties = $source->getPropertyList();
		$config = array(
			\'size\' => !empty($properties[\'maxUploadSize\'])
				? $properties[\'maxUploadSize\']
				: 3145728,
			\'height\' => !empty($properties[\'maxUploadHeight\'])
				? $properties[\'maxUploadHeight\']
				: 1080,
			\'width\' => !empty($properties[\'maxUploadWidth\'])
				? $properties[\'maxUploadWidth\']
				: 1920,
			\'extensions\' => !empty($properties[\'allowedFileTypes\'])
				? $properties[\'allowedFileTypes\']
				: \'jpg,jpeg,png,gif\'
		);
		$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.source=\' . $modx->toJSON($config) . \'</script>\', true);
	}
	$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/plupload.full.min.js\');
	$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/files.js\');

	$lang = $modx->getOption(\'cultureKey\');
	if ($lang != \'en\' && file_exists($Tickets->config[\'jsPath\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\')) {
		$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\');
	}
}

$output = $Tickets->getChunk($tplWrapper, $data);
$key = md5($modx->toJSON($Tickets->config));
$_SESSION[\'TicketForm\'][$key] = $Tickets->config;
$output = str_ireplace(\'</form>\', "\\n<input type=\\"hidden\\" name=\\"form_key\\" value=\\"{$key}\\" class=\\"disable-sisyphus\\" />\\n</form>", $output);

return $output;',
      'locked' => 0,
      'properties' => 'a:21:{s:13:"tplFormCreate";a:7:{s:4:"name";s:13:"tplFormCreate";s:4:"desc";s:26:"tickets_prop_tplFormCreate";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.Tickets.form.create";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"tplFormUpdate";a:7:{s:4:"name";s:13:"tplFormUpdate";s:4:"desc";s:26:"tickets_prop_tplFormUpdate";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.Tickets.form.update";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"tplPreview";a:7:{s:4:"name";s:10:"tplPreview";s:4:"desc";s:23:"tickets_prop_tplPreview";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.form.preview";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"tplSectionRow";a:7:{s:4:"name";s:13:"tplSectionRow";s:4:"desc";s:26:"tickets_prop_tplSectionRow";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:69:"@INLINE <option value="[[+id]]" [[+selected]]>[[+pagetitle]]</option>";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplTicketEmailBcc";a:7:{s:4:"name";s:17:"tplTicketEmailBcc";s:4:"desc";s:30:"tickets_prop_tplTicketEmailBcc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.ticket.email.bcc";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:26:"tplTicketEmailSubscription";a:7:{s:4:"name";s:26:"tplTicketEmailSubscription";s:4:"desc";s:39:"tickets_prop_tplTicketEmailSubscription";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:37:"tpl.Tickets.ticket.email.subscription";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"allowedFields";a:7:{s:4:"name";s:13:"allowedFields";s:4:"desc";s:26:"tickets_prop_allowedFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"parent,pagetitle,content";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:27:"tickets_prop_requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"parent,pagetitle,content";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"bypassFields";a:7:{s:4:"name";s:12:"bypassFields";s:4:"desc";s:25:"tickets_prop_bypassFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:19:"redirectUnpublished";a:7:{s:4:"name";s:19:"redirectUnpublished";s:4:"desc";s:32:"tickets_prop_redirectUnpublished";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:29:"tickets_prop_sections_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:31:"tickets_prop_sections_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"permissions";a:7:{s:4:"name";s:11:"permissions";s:4:"desc";s:33:"tickets_prop_sections_permissions";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"section_add_children";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:28:"tickets_prop_sections_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"pagetitle";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:29:"tickets_prop_sections_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:3:"ASC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"context";a:7:{s:4:"name";s:7:"context";s:4:"desc";s:29:"tickets_prop_sections_context";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"allowFiles";a:7:{s:4:"name";s:10:"allowFiles";s:4:"desc";s:23:"tickets_prop_allowFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"source";a:7:{s:4:"name";s:6:"source";s:4:"desc";s:19:"tickets_prop_source";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tplFiles";a:7:{s:4:"name";s:8:"tplFiles";s:4:"desc";s:21:"tickets_prop_tplFiles";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.Tickets.form.files";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"tplFile";a:7:{s:4:"name";s:7:"tplFile";s:4:"desc";s:20:"tickets_prop_tplFile";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.Tickets.form.file";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tplImage";a:7:{s:4:"name";s:8:"tplImage";s:4:"desc";s:21:"tickets_prop_tplImage";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.Tickets.form.image";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_form.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

if (!$Tickets->authenticated) {
	return $modx->lexicon(\'ticket_err_no_auth\');
}

$tplSectionRow = $modx->getOption(\'tplSectionRow\', $scriptProperties, \'tpl.Tickets.sections.row\');
$tplFormCreate = $modx->getOption(\'tplFormCreate\', $scriptProperties, \'tpl.Tickets.form.create\');
$tplFormUpdate = $modx->getOption(\'tplFormUpdate\', $scriptProperties, \'tpl.Tickets.form.update\');
$tplFiles = $modx->getOption(\'tplFiles\', $scriptProperties, \'tpl.Tickets.form.files\');
$tplFile = $Tickets->config[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl.Tickets.form.file\', true);
$tplImage = $Tickets->config[\'tplImage\'] = $modx->getOption(\'tplImage\', $scriptProperties, \'tpl.Tickets.form.image\', true);
if (empty($source)) {
	$source = $Tickets->config[\'source\'] = $modx->getOption(\'tickets.source_default\', null, $modx->getOption(\'default_media_source\'));
}
$tid = !empty($_REQUEST[\'tid\'])
	? (int)$_REQUEST[\'tid\']
	: 0;
$parent = !empty($_REQUEST[\'parent\'])
	? $_REQUEST[\'parent\']
	: \'\';
$data = array();

// Update of ticket
if (!empty($tid)) {
	$tplWrapper = $tplFormUpdate;
	/* @var Ticket $ticket */
	if ($ticket = $modx->getObject(\'Ticket\', array(\'class_key\' => \'Ticket\', \'id\' => $tid))) {
		if ($ticket->get(\'createdby\') != $modx->user->id && !$modx->hasPermission(\'edit_document\')) {
			return $modx->lexicon(\'ticket_err_wrong_user\');
		}
		$charset = $modx->getOption(\'modx_charset\');
		$allowedFields = array_map(\'trim\', explode(\',\', $scriptProperties[\'allowedFields\']));
		$allowedFields = array_unique(array_merge($allowedFields, array(\'parent\', \'pagetitle\', \'content\')));

		$fields = array_keys($modx->getFieldMeta(\'Ticket\'));
		foreach ($allowedFields as $field) {
			$value = in_array($field, $fields)
				? $ticket->get($field)
				: $ticket->getTVValue($field);
			if (is_string($value)) {
				$value = html_entity_decode($value, ENT_QUOTES, $charset);
				$value = str_replace(array(\'[^\', \'^]\', \'[\', \']\'), array(\'&#91;^\', \'^&#93;\', \'*{*{*{*{*{*\', \'*}*}*}*}*}*\'), $value);
				$value = htmlentities($value, ENT_QUOTES, $charset);
			}
			$data[$field] = $value;
		}
		$data[\'id\'] = $ticket->id;
		$data[\'published\'] = $ticket->published;
		if (empty($parent)) {
			$parent = $ticket->get(\'parent\');
		}
	}
	else {
		return $modx->lexicon(\'ticket_err_id\', array(\'id\' => $tid));
	}
}
else {
	$tplWrapper = $tplFormCreate;
}

// Get available sections for ticket create
$data[\'sections\'] = \'\';
/** @var modProcessorResponse $response */
$response = $Tickets->runProcessor(\'web/section/getlist\', array(
	\'parents\' => $scriptProperties[\'parents\'],
	\'resources\' => $scriptProperties[\'resources\'],
	\'permissions\' => $scriptProperties[\'permissions\'],
	\'sortby\' => !empty($scriptProperties[\'sortby\'])
		? $scriptProperties[\'sortby\']
		: \'pagetitle\',
	\'sortdir\' => !empty($scriptProperties[\'sortdir\'])
		? $scriptProperties[\'sortdir\']
		: \'asc\',
	\'depth\' => isset($scriptProperties[\'depth\'])
		? $scriptProperties[\'depth\']
		: 0,
	\'context\' => !empty($scriptProperties[\'context\'])
		? $scriptProperties[\'context\']
		: $modx->context->key,
	\'limit\' => 0,
));
$response = $modx->fromJSON($response->getResponse());

if (!empty($response[\'results\'])) {
	$Tickets->config[\'sections\'] = array();
	foreach ($response[\'results\'] as $v) {
		$v[\'selected\'] = $parent == $v[\'id\'] || $parent == $v[\'alias\']
			? \'selected\'
			: \'\';
		$data[\'sections\'] .= $Tickets->getChunk($tplSectionRow, $v);
		$Tickets->config[\'sections\'][] = $v[\'id\'];
	}
}

if (!empty($allowFiles)) {
	$q = $modx->newQuery(\'TicketFile\');
	$q->where(array(\'class\' => \'Ticket\'));
	$q->andCondition(array(\'parent\' => 0, \'createdby\' => $modx->user->id), null, 1);
	if (!empty($tid)) {
		$q->orCondition(array(\'parent\' => $tid), null, 1);
	}
	$q->sortby(\'createdon\', \'ASC\');
	$collection = $modx->getIterator(\'TicketFile\', $q);
	$files = \'\';
	/** @var TicketFile $item */
	foreach ($collection as $item) {
		if ($item->get(\'deleted\') && !$item->get(\'parent\')) {
			$item->remove();
		}
		else {
			$item = $item->toArray();
			$item[\'size\'] = round($item[\'size\'] / 1024, 2);
			$item[\'new\'] = empty($item[\'parent\']);
			$tpl = $item[\'type\'] == \'image\'
				? $tplImage
				: $tplFile;
			$files .= $Tickets->getChunk($tpl, $item);
		}
	}
	$data[\'files\'] = $Tickets->getChunk($tplFiles, array(
		\'files\' => $files,
	));
	/** @var modMediaSource $source */
	if ($source = $modx->getObject(\'sources.modMediaSource\', $source)) {
		$properties = $source->getPropertyList();
		$config = array(
			\'size\' => !empty($properties[\'maxUploadSize\'])
				? $properties[\'maxUploadSize\']
				: 3145728,
			\'height\' => !empty($properties[\'maxUploadHeight\'])
				? $properties[\'maxUploadHeight\']
				: 1080,
			\'width\' => !empty($properties[\'maxUploadWidth\'])
				? $properties[\'maxUploadWidth\']
				: 1920,
			\'extensions\' => !empty($properties[\'allowedFileTypes\'])
				? $properties[\'allowedFileTypes\']
				: \'jpg,jpeg,png,gif\'
		);
		$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.source=\' . $modx->toJSON($config) . \'</script>\', true);
	}
	$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/plupload.full.min.js\');
	$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/files.js\');

	$lang = $modx->getOption(\'cultureKey\');
	if ($lang != \'en\' && file_exists($Tickets->config[\'jsPath\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\')) {
		$modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\');
	}
}

$output = $Tickets->getChunk($tplWrapper, $data);
$key = md5($modx->toJSON($Tickets->config));
$_SESSION[\'TicketForm\'][$key] = $Tickets->config;
$output = str_ireplace(\'</form>\', "\\n<input type=\\"hidden\\" name=\\"form_key\\" value=\\"{$key}\\" class=\\"disable-sisyphus\\" />\\n</form>", $output);

return $output;',
    ),
  ),
  'e8ed01b4e784cfc98b7a4de2ff57f1b9' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketComments',
    ),
    'object' => 
    array (
      'id' => 22,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketComments',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
if (empty($thread)) {
	$scriptProperties[\'thread\'] = $modx->getOption(\'thread\', $scriptProperties, \'resource-\' . $modx->resource->id, true);
}
$scriptProperties[\'resource\'] = $modx->resource->get(\'id\');
$scriptProperties[\'snippetPrepareComment\'] = $modx->getOption(\'tickets.snippet_prepare_comment\');
$scriptProperties[\'commentEditTime\'] = $modx->getOption(\'tickets.comment_edit_time\', null, 180);

$depth = $modx->getOption(\'depth\', $scriptProperties, 0);
$tplComments = $modx->getOption(\'tplComments\', $scriptProperties, \'tpl.Tickets.comment.wrapper\');
$tplCommentForm = $modx->getOption(\'tplCommentForm\', $scriptProperties, \'tpl.Tickets.comment.form\');
$tplCommentFormGuest = $modx->getOption(\'tplCommentFormGuest\', $scriptProperties, \'tpl.Tickets.comment.form.guest\');
$tplCommentAuth = $modx->getOption(\'tplCommentAuth\', $scriptProperties, \'tpl.Tickets.comment.one.auth\');
$tplCommentGuest = $modx->getOption(\'tplCommentGuest\', $scriptProperties, \'tpl.Tickets.comment.one.guest\');
$tplLoginToComment = $modx->getOption(\'tplLoginToComment\', $scriptProperties, \'tpl.Tickets.comment.login\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if (!$pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	return false;
}
$pdoFetch = new $pdoClass($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

// Prepare Ticket Thread
/** @var TicketThread $thread */
if (!$thread = $modx->getObject(\'TicketThread\', array(\'name\' => $scriptProperties[\'thread\']))) {
	$thread = $modx->newObject(\'TicketThread\');
	$thread->fromArray(array(
		\'name\' => $scriptProperties[\'thread\'],
		\'resource\' => $modx->resource->get(\'id\'),
		\'createdby\' => $modx->user->id,
		\'createdon\' => date(\'Y-m-d H:i:s\'),
		\'subscribers\' => array($modx->resource->get(\'createdby\')),
	));
}
elseif ($thread->get(\'deleted\')) {
	return $modx->lexicon(\'ticket_thread_err_deleted\');
}
// Prepare session for guests
if (!empty($allowGuest) && !isset($_SESSION[\'TicketComments\'])) {
	$_SESSION[\'TicketComments\'] = array(\'name\' => \'\', \'email\' => \'\', \'ids\' => array());
}

// Migrate authors to subscription system
if (!is_array($thread->get(\'subscribers\'))) {
	$thread->set(\'subscribers\', array($modx->resource->get(\'createdby\')));
}
$thread->set(\'resource\', $modx->resource->get(\'id\'));
$thread->set(\'properties\', $scriptProperties);
$thread->save();

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
	$where[\'published\'] = 1;
}

// Joining tables
$innerJoin = array(
	\'Thread\' => array(
		\'class\' => \'TicketThread\',
		\'on\' => \'`Thread`.`id` = `TicketComment`.`thread` AND `Thread`.`name` = "\' . $thread->get(\'name\') . \'"\'
	)
);
$leftJoin = array(
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id
	);
}
// Fields to select
$select = array(
	\'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) . \', `parent` as `new_parent`, `rating` as `rating_total`\',
	\'Thread\' => \'`Thread`.`resource`\',
	\'User\' => \'`User`.`username`\',
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'), true) . \',`Profile`.`email` as `user_email`\',
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class . \'.id\',
	\'sortdir\' => \'ASC\',
	\'groupby\' => $class . \'.id\',
	\'limit\' => 0,
	\'fastMode\' => true,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = $commentsThread = null;
if (!empty($rows) && is_array($rows)) {
	$tmp = array();
	$i = 1;
	foreach ($rows as $row) {
		$row[\'idx\'] = $i++;
		$tmp[$row[\'id\']] = $row;
	}
	$rows = $thread->buildTree($tmp, $depth);
	unset($tmp, $i);

	if (!empty($formBefore)) {
		$rows = array_reverse($rows);
	}

	$tpl = !$thread->get(\'closed\') && ($Tickets->authenticated || !empty($allowGuest))
		? $tplCommentAuth
		: $tplCommentGuest;
	foreach ($rows as $row) {
		$output[] = $Tickets->templateNode($row, $tpl);
	}

	$pdoFetch->addTime(\'Returning processed chunks\');
	$output = implode($outputSeparator, $output);
}

$commentsThread = $pdoFetch->getChunk($tplComments, array(
	\'total\' => $modx->getPlaceholder($pdoFetch->config[\'totalVar\']),
	\'comments\' => $output,
	\'subscribed\' => $thread->isSubscribed(),
));

$pls = array(\'thread\' => $scriptProperties[\'thread\']);
if (!$Tickets->authenticated && empty($allowGuest)) {
	$form = $pdoFetch->getChunk($tplLoginToComment);
}
elseif (!$Tickets->authenticated) {
	$pls[\'name\'] = $_SESSION[\'TicketComments\'][\'name\'];
	$pls[\'email\'] = $_SESSION[\'TicketComments\'][\'email\'];
	if (!empty($enableCaptcha)) {
		$tmp = $Tickets->getCaptcha();
		$pls[\'captcha\'] = $modx->lexicon(\'ticket_comment_captcha\', $tmp);
	}
	$form = $pdoFetch->getChunk($tplCommentFormGuest, $pls);
}
else {
	$form = $pdoFetch->getChunk($tplCommentForm, $pls);
}

$commentForm = $thread->get(\'closed\')
	? $modx->lexicon(\'ticket_thread_err_closed\')
	: $form;
$output = !empty($formBefore)
	? $commentForm . $commentsThread
	: $commentsThread . $commentForm;

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="CommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.formBefore = \' . (int)!empty($formBefore) . \';TicketsConfig.thread_depth = \' . (int)$depth . \';</script>\', true);

// Return output
if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
      'locked' => 0,
      'properties' => 'a:29:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:19:"tickets_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"gravatarIcon";a:7:{s:4:"name";s:12:"gravatarIcon";s:4:"desc";s:25:"tickets_prop_gravatarIcon";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:2:"mm";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"gravatarSize";a:7:{s:4:"name";s:12:"gravatarSize";s:4:"desc";s:25:"tickets_prop_gravatarSize";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:2:"24";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"gravatarUrl";a:7:{s:4:"name";s:11:"gravatarUrl";s:4:"desc";s:24:"tickets_prop_gravatarUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:32:"https://www.gravatar.com/avatar/";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"tplCommentForm";a:7:{s:4:"name";s:14:"tplCommentForm";s:4:"desc";s:27:"tickets_prop_tplCommentForm";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.comment.form";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:19:"tplCommentFormGuest";a:7:{s:4:"name";s:19:"tplCommentFormGuest";s:4:"desc";s:32:"tickets_prop_tplCommentFormGuest";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"tpl.Tickets.comment.form.guest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"tplCommentAuth";a:7:{s:4:"name";s:14:"tplCommentAuth";s:4:"desc";s:27:"tickets_prop_tplCommentAuth";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.comment.one.auth";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"tplCommentGuest";a:7:{s:4:"name";s:15:"tplCommentGuest";s:4:"desc";s:28:"tickets_prop_tplCommentGuest";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"tpl.Tickets.comment.one.guest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplCommentDeleted";a:7:{s:4:"name";s:17:"tplCommentDeleted";s:4:"desc";s:30:"tickets_prop_tplCommentDeleted";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.one.deleted";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"tplComments";a:7:{s:4:"name";s:11:"tplComments";s:4:"desc";s:24:"tickets_prop_tplComments";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:27:"tpl.Tickets.comment.wrapper";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplLoginToComment";a:7:{s:4:"name";s:17:"tplLoginToComment";s:4:"desc";s:30:"tickets_prop_tplLoginToComment";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:25:"tpl.Tickets.comment.login";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:20:"tplCommentEmailOwner";a:7:{s:4:"name";s:20:"tplCommentEmailOwner";s:4:"desc";s:33:"tickets_prop_tplCommentEmailOwner";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.email.owner";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:20:"tplCommentEmailReply";a:7:{s:4:"name";s:20:"tplCommentEmailReply";s:4:"desc";s:33:"tickets_prop_tplCommentEmailReply";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.email.reply";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:27:"tplCommentEmailSubscription";a:7:{s:4:"name";s:27:"tplCommentEmailSubscription";s:4:"desc";s:40:"tickets_prop_tplCommentEmailSubscription";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:38:"tpl.Tickets.comment.email.subscription";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:18:"tplCommentEmailBcc";a:7:{s:4:"name";s:18:"tplCommentEmailBcc";s:4:"desc";s:31:"tickets_prop_tplCommentEmailBcc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"tpl.Tickets.comment.email.bcc";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:26:"tplCommentEmailUnpublished";a:7:{s:4:"name";s:26:"tplCommentEmailUnpublished";s:4:"desc";s:39:"tickets_prop_tplCommentEmailUnpublished";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:37:"tpl.Tickets.comment.email.unpublished";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"autoPublish";a:7:{s:4:"name";s:11:"autoPublish";s:4:"desc";s:24:"tickets_prop_autoPublish";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:16:"autoPublishGuest";a:7:{s:4:"name";s:16:"autoPublishGuest";s:4:"desc";s:29:"tickets_prop_autoPublishGuest";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"formBefore";a:7:{s:4:"name";s:10:"formBefore";s:4:"desc";s:23:"tickets_prop_formBefore";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:26:"tickets_prop_commentsDepth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"allowGuest";a:7:{s:4:"name";s:10:"allowGuest";s:4:"desc";s:23:"tickets_prop_allowGuest";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"allowGuestEdit";a:7:{s:4:"name";s:14:"allowGuestEdit";s:4:"desc";s:27:"tickets_prop_allowGuestEdit";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:16:"allowGuestEmails";a:7:{s:4:"name";s:16:"allowGuestEmails";s:4:"desc";s:29:"tickets_prop_allowGuestEmails";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"enableCaptcha";a:7:{s:4:"name";s:13:"enableCaptcha";s:4:"desc";s:26:"tickets_prop_enableCaptcha";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"minCaptcha";a:7:{s:4:"name";s:10:"minCaptcha";s:4:"desc";s:23:"tickets_prop_minCaptcha";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"maxCaptcha";a:7:{s:4:"name";s:10:"maxCaptcha";s:4:"desc";s:23:"tickets_prop_maxCaptcha";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:27:"tickets_prop_requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"name,email";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"threadUrl";a:7:{s:4:"name";s:9:"threadUrl";s:4:"desc";s:22:"tickets_prop_threadUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.comments.php',
      'content' => '/** @var array $scriptProperties */
if (empty($thread)) {
	$scriptProperties[\'thread\'] = $modx->getOption(\'thread\', $scriptProperties, \'resource-\' . $modx->resource->id, true);
}
$scriptProperties[\'resource\'] = $modx->resource->get(\'id\');
$scriptProperties[\'snippetPrepareComment\'] = $modx->getOption(\'tickets.snippet_prepare_comment\');
$scriptProperties[\'commentEditTime\'] = $modx->getOption(\'tickets.comment_edit_time\', null, 180);

$depth = $modx->getOption(\'depth\', $scriptProperties, 0);
$tplComments = $modx->getOption(\'tplComments\', $scriptProperties, \'tpl.Tickets.comment.wrapper\');
$tplCommentForm = $modx->getOption(\'tplCommentForm\', $scriptProperties, \'tpl.Tickets.comment.form\');
$tplCommentFormGuest = $modx->getOption(\'tplCommentFormGuest\', $scriptProperties, \'tpl.Tickets.comment.form.guest\');
$tplCommentAuth = $modx->getOption(\'tplCommentAuth\', $scriptProperties, \'tpl.Tickets.comment.one.auth\');
$tplCommentGuest = $modx->getOption(\'tplCommentGuest\', $scriptProperties, \'tpl.Tickets.comment.one.guest\');
$tplLoginToComment = $modx->getOption(\'tplLoginToComment\', $scriptProperties, \'tpl.Tickets.comment.login\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if (!$pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	return false;
}
$pdoFetch = new $pdoClass($modx, $scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

// Prepare Ticket Thread
/** @var TicketThread $thread */
if (!$thread = $modx->getObject(\'TicketThread\', array(\'name\' => $scriptProperties[\'thread\']))) {
	$thread = $modx->newObject(\'TicketThread\');
	$thread->fromArray(array(
		\'name\' => $scriptProperties[\'thread\'],
		\'resource\' => $modx->resource->get(\'id\'),
		\'createdby\' => $modx->user->id,
		\'createdon\' => date(\'Y-m-d H:i:s\'),
		\'subscribers\' => array($modx->resource->get(\'createdby\')),
	));
}
elseif ($thread->get(\'deleted\')) {
	return $modx->lexicon(\'ticket_thread_err_deleted\');
}
// Prepare session for guests
if (!empty($allowGuest) && !isset($_SESSION[\'TicketComments\'])) {
	$_SESSION[\'TicketComments\'] = array(\'name\' => \'\', \'email\' => \'\', \'ids\' => array());
}

// Migrate authors to subscription system
if (!is_array($thread->get(\'subscribers\'))) {
	$thread->set(\'subscribers\', array($modx->resource->get(\'createdby\')));
}
$thread->set(\'resource\', $modx->resource->get(\'id\'));
$thread->set(\'properties\', $scriptProperties);
$thread->save();

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
	$where[\'published\'] = 1;
}

// Joining tables
$innerJoin = array(
	\'Thread\' => array(
		\'class\' => \'TicketThread\',
		\'on\' => \'`Thread`.`id` = `TicketComment`.`thread` AND `Thread`.`name` = "\' . $thread->get(\'name\') . \'"\'
	)
);
$leftJoin = array(
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id
	);
}
// Fields to select
$select = array(
	\'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) . \', `parent` as `new_parent`, `rating` as `rating_total`\',
	\'Thread\' => \'`Thread`.`resource`\',
	\'User\' => \'`User`.`username`\',
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'), true) . \',`Profile`.`email` as `user_email`\',
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class . \'.id\',
	\'sortdir\' => \'ASC\',
	\'groupby\' => $class . \'.id\',
	\'limit\' => 0,
	\'fastMode\' => true,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = $commentsThread = null;
if (!empty($rows) && is_array($rows)) {
	$tmp = array();
	$i = 1;
	foreach ($rows as $row) {
		$row[\'idx\'] = $i++;
		$tmp[$row[\'id\']] = $row;
	}
	$rows = $thread->buildTree($tmp, $depth);
	unset($tmp, $i);

	if (!empty($formBefore)) {
		$rows = array_reverse($rows);
	}

	$tpl = !$thread->get(\'closed\') && ($Tickets->authenticated || !empty($allowGuest))
		? $tplCommentAuth
		: $tplCommentGuest;
	foreach ($rows as $row) {
		$output[] = $Tickets->templateNode($row, $tpl);
	}

	$pdoFetch->addTime(\'Returning processed chunks\');
	$output = implode($outputSeparator, $output);
}

$commentsThread = $pdoFetch->getChunk($tplComments, array(
	\'total\' => $modx->getPlaceholder($pdoFetch->config[\'totalVar\']),
	\'comments\' => $output,
	\'subscribed\' => $thread->isSubscribed(),
));

$pls = array(\'thread\' => $scriptProperties[\'thread\']);
if (!$Tickets->authenticated && empty($allowGuest)) {
	$form = $pdoFetch->getChunk($tplLoginToComment);
}
elseif (!$Tickets->authenticated) {
	$pls[\'name\'] = $_SESSION[\'TicketComments\'][\'name\'];
	$pls[\'email\'] = $_SESSION[\'TicketComments\'][\'email\'];
	if (!empty($enableCaptcha)) {
		$tmp = $Tickets->getCaptcha();
		$pls[\'captcha\'] = $modx->lexicon(\'ticket_comment_captcha\', $tmp);
	}
	$form = $pdoFetch->getChunk($tplCommentFormGuest, $pls);
}
else {
	$form = $pdoFetch->getChunk($tplCommentForm, $pls);
}

$commentForm = $thread->get(\'closed\')
	? $modx->lexicon(\'ticket_thread_err_closed\')
	: $form;
$output = !empty($formBefore)
	? $commentForm . $commentsThread
	: $commentsThread . $commentForm;

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="CommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.formBefore = \' . (int)!empty($formBefore) . \';TicketsConfig.thread_depth = \' . (int)$depth . \';</script>\', true);

// Return output
if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
    ),
  ),
  '0bf2972199f628876a1146492cb87ac5' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketLatest',
    ),
    'object' => 
    array (
      'id' => 23,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketLatest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
if (!empty($cacheKey) && $output = $modx->cacheManager->get(\'tickets/latest.\' . $cacheKey)) {
	return $output;
}

/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($action)) {
	$action = \'comments\';
}
if ($action == \'tickets\' && $scriptProperties[\'tpl\'] == \'tpl.Tickets.comment.latest\') {
	$scriptProperties[\'tpl\'] = \'tpl.Tickets.ticket.latest\';
}
$action = strtolower($action);
$where = $action == \'tickets\'
	? array(\'class_key\' => \'Ticket\')
	: array();

if (empty($showUnpublished)) {
	$where[\'Ticket.published\'] = 1;
}
if (empty($showHidden)) {
	$where[\'Ticket.hidemenu\'] = 0;
}
if (empty($showDeleted)) {
	$where[\'Ticket.deleted\'] = 0;
}
if (!isset($cacheTime)) {
	$cacheTime = 1800;
}
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	else {
		if (!empty($user_id)) {
			$where[\'User.id:IN\'] = $user_id;
		}
		else {
			if (!empty($user_username)) {
				$where[\'User.username:IN\'] = $user_username;
			}
		}
	}
}

// Filter by ids
if (!empty($resources)) {
	$resources = array_map(\'trim\', explode(\',\', $resources));
	$in = $out = array();
	foreach ($resources as $v) {
		if (!is_numeric($v)) {
			continue;
		}
		if ($v < 0) {
			$out[] = abs($v);
		}
		else {
			$in[] = $v;
		}
	}
	if (!empty($in)) {
		$where[\'id:IN\'] = $in;
	}
	if (!empty($out)) {
		$where[\'id:NOT IN\'] = $out;
	}
}
// Filter by parents
else {
	if (!empty($parents) && $parents > 0) {
		$pids = array_map(\'trim\', explode(\',\', $parents));
		$parents = $pids;
		if (!empty($depth) && $depth > 0) {
			foreach ($pids as $v) {
				if (!is_numeric($v)) {
					continue;
				}
				$parents = array_merge($parents, $modx->getChildIds($v, $depth));
			}
		}
		if (!empty($parents)) {
			$where[\'Ticket.parent:IN\'] = $parents;
		}
	}
}

// Joining tables
if ($action == \'comments\') {
	$class = \'TicketComment\';

	$innerJoin = array();
	$innerJoin[\'Thread\'] = empty($user)
		? array(\'class\' => \'TicketThread\', \'on\' => \'`TicketComment`.`id` = `Thread`.`comment_last` AND `Thread`.`deleted` = 0\')
		: array(\'class\' => \'TicketThread\', \'on\' => \'`TicketComment`.`thread` = `Thread`.`id` AND `Thread`.`deleted` = 0\');
	$innerJoin[\'Ticket\'] = array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\');

	$leftJoin = array(
		\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
		\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
		\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
	);

	$select = array(
		\'TicketComment\' => !empty($includeContent)
			? $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true)
			: $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'text\', \'raw\'), true),
		\'Ticket\' => !empty($includeContent)
			? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
			: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true)
	);
	$groupby = empty($user)
		? \'`Ticket`.`id`\'
		: \'`TicketComment`.`id`\';
	$where[\'TicketComment.deleted\'] = 0;
}
elseif ($action == \'tickets\') {
	$class = \'Ticket\';

	$innerJoin = array();
	$leftJoin = array(
		\'Thread\' => array(\'class\' => \'TicketThread\', \'on\' => \'`Thread`.`resource` = `Ticket`.`id` AND `Thread`.`deleted` = 0\'),
		\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
		\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
		\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `Ticket`.`createdby`\'),
	);

	$select = array(
		\'Ticket\' => !empty($includeContent)
			? $modx->getSelectColumns(\'Ticket\', \'Ticket\')
			: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'\', array(\'content\'), true),
		\'Thread\' => \'`Thread`.`id` as `thread`\'
	);
	$groupby = \'`Ticket`.`id`\';
}
else {
	return \'Wrong action. You must use "ticket" or "comment".\';
}

// Fields to select
$select = array_merge($select, array(
	\'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
	\'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
));

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => \'createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $groupby,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Processing main fields
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'thread\' => $row[\'thread\'], \'published\' => 1));

		// Prepare row
		if ($class == \'Ticket\') {
			$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
			$properties = is_string($row[\'properties\'])
				? $modx->fromJSON($row[\'properties\'])
				: $row[\'properties\'];
			if (empty($properties[\'process_tags\'])) {
				foreach ($row as $field => $value) {
					$row[$field] = str_replace(array(\'[\', \']\'), array(\'&#91;\', \'&#93;\'), $value);
				}
			}
		}
		else {

			if (empty($row[\'createdby\'])) {
				$row[\'fullname\'] = $row[\'name\'];
				$row[\'guest\'] = 1;
			}
			$row[\'resource\'] = $row[\'ticket.id\'];
			$row = $Tickets->prepareComment($row);
		}

		// Processing chunk
		$row[\'idx\'] = $pdoFetch->idx++;
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = !empty($tpl)
			? $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\'])
			: $pdoFetch->getChunk(\'\', $row);
	}
	$pdoFetch->addTime(\'Returning processed chunks\');
}
if (empty($outputSeparator)) {
	$outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

if (!empty($cacheKey)) {
	$modx->cacheManager->set(\'tickets/latest.\' . $cacheKey, $output, $cacheTime);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="TicketLatestLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
      'locked' => 0,
      'properties' => 'a:23:{s:6:"action";a:7:{s:4:"name";s:6:"action";s:4:"desc";s:19:"tickets_prop_action";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:8:"Comments";s:5:"value";s:8:"comments";}i:1;a:2:{s:4:"text";s:7:"Tickets";s:5:"value";s:7:"tickets";}}s:5:"value";s:8:"comments";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:26:"tpl.Tickets.comment.latest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:17:"tickets_prop_user";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"cacheKey";a:7:{s:4:"name";s:8:"cacheKey";s:4:"desc";s:21:"tickets_prop_cacheKey";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"cacheTime";a:7:{s:4:"name";s:9:"cacheTime";s:4:"desc";s:22:"tickets_prop_cacheTime";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:1800;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_latest.php',
      'content' => '/* @var array $scriptProperties */
if (!empty($cacheKey) && $output = $modx->cacheManager->get(\'tickets/latest.\' . $cacheKey)) {
	return $output;
}

/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($action)) {
	$action = \'comments\';
}
if ($action == \'tickets\' && $scriptProperties[\'tpl\'] == \'tpl.Tickets.comment.latest\') {
	$scriptProperties[\'tpl\'] = \'tpl.Tickets.ticket.latest\';
}
$action = strtolower($action);
$where = $action == \'tickets\'
	? array(\'class_key\' => \'Ticket\')
	: array();

if (empty($showUnpublished)) {
	$where[\'Ticket.published\'] = 1;
}
if (empty($showHidden)) {
	$where[\'Ticket.hidemenu\'] = 0;
}
if (empty($showDeleted)) {
	$where[\'Ticket.deleted\'] = 0;
}
if (!isset($cacheTime)) {
	$cacheTime = 1800;
}
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	else {
		if (!empty($user_id)) {
			$where[\'User.id:IN\'] = $user_id;
		}
		else {
			if (!empty($user_username)) {
				$where[\'User.username:IN\'] = $user_username;
			}
		}
	}
}

// Filter by ids
if (!empty($resources)) {
	$resources = array_map(\'trim\', explode(\',\', $resources));
	$in = $out = array();
	foreach ($resources as $v) {
		if (!is_numeric($v)) {
			continue;
		}
		if ($v < 0) {
			$out[] = abs($v);
		}
		else {
			$in[] = $v;
		}
	}
	if (!empty($in)) {
		$where[\'id:IN\'] = $in;
	}
	if (!empty($out)) {
		$where[\'id:NOT IN\'] = $out;
	}
}
// Filter by parents
else {
	if (!empty($parents) && $parents > 0) {
		$pids = array_map(\'trim\', explode(\',\', $parents));
		$parents = $pids;
		if (!empty($depth) && $depth > 0) {
			foreach ($pids as $v) {
				if (!is_numeric($v)) {
					continue;
				}
				$parents = array_merge($parents, $modx->getChildIds($v, $depth));
			}
		}
		if (!empty($parents)) {
			$where[\'Ticket.parent:IN\'] = $parents;
		}
	}
}

// Joining tables
if ($action == \'comments\') {
	$class = \'TicketComment\';

	$innerJoin = array();
	$innerJoin[\'Thread\'] = empty($user)
		? array(\'class\' => \'TicketThread\', \'on\' => \'`TicketComment`.`id` = `Thread`.`comment_last` AND `Thread`.`deleted` = 0\')
		: array(\'class\' => \'TicketThread\', \'on\' => \'`TicketComment`.`thread` = `Thread`.`id` AND `Thread`.`deleted` = 0\');
	$innerJoin[\'Ticket\'] = array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\');

	$leftJoin = array(
		\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
		\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
		\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
	);

	$select = array(
		\'TicketComment\' => !empty($includeContent)
			? $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true)
			: $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'text\', \'raw\'), true),
		\'Ticket\' => !empty($includeContent)
			? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
			: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true)
	);
	$groupby = empty($user)
		? \'`Ticket`.`id`\'
		: \'`TicketComment`.`id`\';
	$where[\'TicketComment.deleted\'] = 0;
}
elseif ($action == \'tickets\') {
	$class = \'Ticket\';

	$innerJoin = array();
	$leftJoin = array(
		\'Thread\' => array(\'class\' => \'TicketThread\', \'on\' => \'`Thread`.`resource` = `Ticket`.`id` AND `Thread`.`deleted` = 0\'),
		\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
		\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
		\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `Ticket`.`createdby`\'),
	);

	$select = array(
		\'Ticket\' => !empty($includeContent)
			? $modx->getSelectColumns(\'Ticket\', \'Ticket\')
			: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'\', array(\'content\'), true),
		\'Thread\' => \'`Thread`.`id` as `thread`\'
	);
	$groupby = \'`Ticket`.`id`\';
}
else {
	return \'Wrong action. You must use "ticket" or "comment".\';
}

// Fields to select
$select = array_merge($select, array(
	\'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
	\'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
));

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => \'createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $groupby,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Processing main fields
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'thread\' => $row[\'thread\'], \'published\' => 1));

		// Prepare row
		if ($class == \'Ticket\') {
			$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
			$properties = is_string($row[\'properties\'])
				? $modx->fromJSON($row[\'properties\'])
				: $row[\'properties\'];
			if (empty($properties[\'process_tags\'])) {
				foreach ($row as $field => $value) {
					$row[$field] = str_replace(array(\'[\', \']\'), array(\'&#91;\', \'&#93;\'), $value);
				}
			}
		}
		else {

			if (empty($row[\'createdby\'])) {
				$row[\'fullname\'] = $row[\'name\'];
				$row[\'guest\'] = 1;
			}
			$row[\'resource\'] = $row[\'ticket.id\'];
			$row = $Tickets->prepareComment($row);
		}

		// Processing chunk
		$row[\'idx\'] = $pdoFetch->idx++;
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = !empty($tpl)
			? $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\'])
			: $pdoFetch->getChunk(\'\', $row);
	}
	$pdoFetch->addTime(\'Returning processed chunks\');
}
if (empty($outputSeparator)) {
	$outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

if (!empty($cacheKey)) {
	$modx->cacheManager->set(\'tickets/latest.\' . $cacheKey, $output, $cacheTime);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="TicketLatestLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
    ),
  ),
  '2b5952b88ff7905c33c7447c09d49b66' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketMeta',
    ),
    'object' => 
    array (
      'id' => 24,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketMeta',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

$scriptProperties[\'nestedChunkPrefix\'] = \'tickets_\';
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($id)) {
	$id = $modx->resource->id;
}
/** @var Ticket|modResource $ticket */
if (!$ticket = $modx->getObject(\'modResource\', $id)) {
	return \'Could not load resource with id = \' . $id;
}

$class = $ticket instanceof Ticket
	? \'Ticket\'
	: \'modResource\';

$data = $ticket->toArray();
$vote = $pdoFetch->getObject(\'TicketVote\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id), array(\'select\' => \'value\', \'sortby\' => \'id\'));
if (!empty($vote)) {
	$data[\'vote\'] = $vote[\'value\'];
}

$star = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id));
$data[\'stared\'] = !empty($star);
$data[\'unstared\'] = empty($star);

if ($class != \'Ticket\') {
	// Rating
	if (!$modx->user->id || $modx->user->id == $ticket->createdby) {
		$data[\'voted\'] = 0;
	}
	else {
		$q = $modx->newQuery(\'TicketVote\');
		$q->where(array(\'id\' => $ticket->id, \'createdby\' => $modx->user->id, \'class\' => \'Ticket\'));
		$q->select(\'`value`\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->startTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$voted = $q->stmt->fetchColumn();
			if ($voted > 0) {
				$voted = 1;
			}
			elseif ($voted < 0) {
				$voted = -1;
			}
			$data[\'voted\'] = $voted;
		}
	}
	$data[\'can_vote\'] = $data[\'voted\'] === false && $Tickets->authenticated && $modx->user->id != $ticket->createdby;

	$data = array_merge($ticket->getProperties(\'tickets\'), $data);
	if (!isset($data[\'rating\'])) {
		$data[\'rating\'] = $data[\'rating_total\'] = $data[\'rating_plus\'] = $data[\'rating_minus\'] = 0;
	}

	// Views
	$data[\'views\'] = $modx->getCount(\'TicketView\', array(\'parent\' => $ticket->id));

	// Comments
	$data[\'comments\'] = 0;
	$q = $modx->newQuery(\'TicketThread\', array(\'name\' => \'resource-\' . $ticket->id));
	$q->leftJoin(\'TicketComment\', \'TicketComment\', "`TicketThread`.`id` = `TicketComment`.`thread` AND `TicketComment`.`published` = 1");
	$q->select(\'COUNT(`TicketComment`.`id`) as `comments`\');
	$tstart = microtime(true);
	if ($q->prepare() && $q->stmt->execute()) {
		$modx->startTime += microtime(true) - $tstart;
		$modx->executedQueries++;
		$data[\'comments\'] = (int)$q->stmt->fetchColumn();
	}

	// Date ago
	$data[\'date_ago\'] = $Tickets->dateFormat($data[\'createdon\']);

	// Stars
	$data[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\'));
}

if ($data[\'rating\'] > 0) {
	$data[\'rating\'] = \'+\' . $data[\'rating\'];
	$data[\'rating_positive\'] = 1;
}
elseif ($data[\'rating\'] < 0) {
	$data[\'rating_negative\'] = 1;
}

if (!$Tickets->authenticated || $modx->user->id == $ticket->createdby) {
	$data[\'cant_vote\'] = 1;
}
elseif (array_key_exists(\'vote\', $data)) {
	if ($data[\'vote\'] == \'\') {
		$data[\'can_vote\'] = 1;
	}
	elseif ($data[\'vote\'] > 0) {
		$data[\'voted_plus\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
	elseif ($data[\'vote\'] < 0) {
		$data[\'voted_minus\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
	else {
		$data[\'voted_none\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
}

$data[\'active\'] = (int)!empty($data[\'can_vote\']);
$data[\'inactive\'] = (int)!empty($data[\'cant_vote\']);

$data[\'can_star\'] = $Tickets->authenticated;

if (!empty($getSection)) {
	$fields = $modx->getFieldMeta(\'modResource\');
	unset($fields[\'content\']);
	$section = $pdoFetch->getObject(\'modResource\', $ticket->parent, array(\'select\' => implode(\',\', array_keys($fields))));
	foreach ($section as $k => $v) {
		$data[\'section.\' . $k] = $v;
	}
}
if (!empty($getUser)) {
	$fields = $modx->getFieldMeta(\'modUserProfile\');
	$user = $pdoFetch->getObject(\'modUserProfile\', array(\'internalKey\' => $ticket->createdby), array(
		\'innerJoin\' => array(
			\'modUser\' => array(\'class\' => \'modUser\', \'on\' => \'`modUserProfile`.`internalKey` = `modUser`.`id`\')
		),
		\'select\' => array(
			\'modUserProfile\' => implode(\',\', array_keys($fields)),
			\'modUser\' => \'username\',
		)
	));
	$data = array_merge($data, $user);
}

if (!empty($getFiles)) {
	$where = array(\'deleted\' => 0, \'class\' => \'Ticket\', \'parent\' => $ticket->id);
	$collection = $pdoFetch->getCollection(\'TicketFile\', $where, array(\'sortby\' => \'createdon\', \'sortdir\' => \'ASC\'));
	$data[\'files\'] = $content = \'\';
	if (!empty($unusedFiles)) {
		$content = $ticket->getContent();
	}
	foreach ($collection as $item) {
		if ($content && strpos($content, $item[\'url\']) !== false) {
			continue;
		}
		$item[\'size\'] = round($item[\'size\'] / 1024, 2);
		$data[\'files\'] .= !empty($tplFile)
			? $Tickets->getChunk($tplFile, $item)
			: $Tickets->getChunk(\'\', $item);
	}
	$data[\'has_files\'] = !empty($data[\'files\']);
}
$data[\'id\'] = $ticket->get(\'id\');

return !empty($tpl)
	? $Tickets->getChunk($tpl, $data)
	: $Tickets->getChunk(\'\', $data);',
      'locked' => 0,
      'properties' => 'a:6:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:21:"tickets_prop_meta_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:16:"tpl.Tickets.meta";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"tplFile";a:7:{s:4:"name";s:7:"tplFile";s:4:"desc";s:25:"tickets_prop_meta_tplFile";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.Tickets.meta.file";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"getSection";a:7:{s:4:"name";s:10:"getSection";s:4:"desc";s:23:"tickets_prop_getSection";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"getUser";a:7:{s:4:"name";s:7:"getUser";s:4:"desc";s:20:"tickets_prop_getUser";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"getFiles";a:7:{s:4:"name";s:8:"getFiles";s:4:"desc";s:21:"tickets_prop_getFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"unusedFiles";a:7:{s:4:"name";s:11:"unusedFiles";s:4:"desc";s:24:"tickets_prop_unusedFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_meta.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

$scriptProperties[\'nestedChunkPrefix\'] = \'tickets_\';
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($id)) {
	$id = $modx->resource->id;
}
/** @var Ticket|modResource $ticket */
if (!$ticket = $modx->getObject(\'modResource\', $id)) {
	return \'Could not load resource with id = \' . $id;
}

$class = $ticket instanceof Ticket
	? \'Ticket\'
	: \'modResource\';

$data = $ticket->toArray();
$vote = $pdoFetch->getObject(\'TicketVote\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id), array(\'select\' => \'value\', \'sortby\' => \'id\'));
if (!empty($vote)) {
	$data[\'vote\'] = $vote[\'value\'];
}

$star = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id));
$data[\'stared\'] = !empty($star);
$data[\'unstared\'] = empty($star);

if ($class != \'Ticket\') {
	// Rating
	if (!$modx->user->id || $modx->user->id == $ticket->createdby) {
		$data[\'voted\'] = 0;
	}
	else {
		$q = $modx->newQuery(\'TicketVote\');
		$q->where(array(\'id\' => $ticket->id, \'createdby\' => $modx->user->id, \'class\' => \'Ticket\'));
		$q->select(\'`value`\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->startTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$voted = $q->stmt->fetchColumn();
			if ($voted > 0) {
				$voted = 1;
			}
			elseif ($voted < 0) {
				$voted = -1;
			}
			$data[\'voted\'] = $voted;
		}
	}
	$data[\'can_vote\'] = $data[\'voted\'] === false && $Tickets->authenticated && $modx->user->id != $ticket->createdby;

	$data = array_merge($ticket->getProperties(\'tickets\'), $data);
	if (!isset($data[\'rating\'])) {
		$data[\'rating\'] = $data[\'rating_total\'] = $data[\'rating_plus\'] = $data[\'rating_minus\'] = 0;
	}

	// Views
	$data[\'views\'] = $modx->getCount(\'TicketView\', array(\'parent\' => $ticket->id));

	// Comments
	$data[\'comments\'] = 0;
	$q = $modx->newQuery(\'TicketThread\', array(\'name\' => \'resource-\' . $ticket->id));
	$q->leftJoin(\'TicketComment\', \'TicketComment\', "`TicketThread`.`id` = `TicketComment`.`thread` AND `TicketComment`.`published` = 1");
	$q->select(\'COUNT(`TicketComment`.`id`) as `comments`\');
	$tstart = microtime(true);
	if ($q->prepare() && $q->stmt->execute()) {
		$modx->startTime += microtime(true) - $tstart;
		$modx->executedQueries++;
		$data[\'comments\'] = (int)$q->stmt->fetchColumn();
	}

	// Date ago
	$data[\'date_ago\'] = $Tickets->dateFormat($data[\'createdon\']);

	// Stars
	$data[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\'));
}

if ($data[\'rating\'] > 0) {
	$data[\'rating\'] = \'+\' . $data[\'rating\'];
	$data[\'rating_positive\'] = 1;
}
elseif ($data[\'rating\'] < 0) {
	$data[\'rating_negative\'] = 1;
}

if (!$Tickets->authenticated || $modx->user->id == $ticket->createdby) {
	$data[\'cant_vote\'] = 1;
}
elseif (array_key_exists(\'vote\', $data)) {
	if ($data[\'vote\'] == \'\') {
		$data[\'can_vote\'] = 1;
	}
	elseif ($data[\'vote\'] > 0) {
		$data[\'voted_plus\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
	elseif ($data[\'vote\'] < 0) {
		$data[\'voted_minus\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
	else {
		$data[\'voted_none\'] = 1;
		$data[\'cant_vote\'] = 1;
	}
}

$data[\'active\'] = (int)!empty($data[\'can_vote\']);
$data[\'inactive\'] = (int)!empty($data[\'cant_vote\']);

$data[\'can_star\'] = $Tickets->authenticated;

if (!empty($getSection)) {
	$fields = $modx->getFieldMeta(\'modResource\');
	unset($fields[\'content\']);
	$section = $pdoFetch->getObject(\'modResource\', $ticket->parent, array(\'select\' => implode(\',\', array_keys($fields))));
	foreach ($section as $k => $v) {
		$data[\'section.\' . $k] = $v;
	}
}
if (!empty($getUser)) {
	$fields = $modx->getFieldMeta(\'modUserProfile\');
	$user = $pdoFetch->getObject(\'modUserProfile\', array(\'internalKey\' => $ticket->createdby), array(
		\'innerJoin\' => array(
			\'modUser\' => array(\'class\' => \'modUser\', \'on\' => \'`modUserProfile`.`internalKey` = `modUser`.`id`\')
		),
		\'select\' => array(
			\'modUserProfile\' => implode(\',\', array_keys($fields)),
			\'modUser\' => \'username\',
		)
	));
	$data = array_merge($data, $user);
}

if (!empty($getFiles)) {
	$where = array(\'deleted\' => 0, \'class\' => \'Ticket\', \'parent\' => $ticket->id);
	$collection = $pdoFetch->getCollection(\'TicketFile\', $where, array(\'sortby\' => \'createdon\', \'sortdir\' => \'ASC\'));
	$data[\'files\'] = $content = \'\';
	if (!empty($unusedFiles)) {
		$content = $ticket->getContent();
	}
	foreach ($collection as $item) {
		if ($content && strpos($content, $item[\'url\']) !== false) {
			continue;
		}
		$item[\'size\'] = round($item[\'size\'] / 1024, 2);
		$data[\'files\'] .= !empty($tplFile)
			? $Tickets->getChunk($tplFile, $item)
			: $Tickets->getChunk(\'\', $item);
	}
	$data[\'has_files\'] = !empty($data[\'files\']);
}
$data[\'id\'] = $ticket->get(\'id\');

return !empty($tpl)
	? $Tickets->getChunk($tpl, $data)
	: $Tickets->getChunk(\'\', $data);',
    ),
  ),
  '3b11f926cb59daed62c3d9e38c69c23b' => 
  array (
    'criteria' => 
    array (
      'name' => 'getTickets',
    ),
    'object' => 
    array (
      'id' => 25,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getTickets',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'Ticket\';
$where = array(\'class_key\' => $class);

//Filter by user
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	else {
		if (!empty($user_id)) {
			$where[\'User.id:IN\'] = $user_id;
		}
		else {
			if (!empty($user_username)) {
				$where[\'User.username:IN\'] = $user_username;
			}
		}
	}
}

// Joining tables
$leftJoin = array(
	\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `User`.`id`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `Ticket`.`id` AND `Vote`.`class` = "Ticket" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `Ticket`.`id` AND `Star`.`class` = "Ticket" AND `Star`.`createdby` = \' . $modx->user->id
	);
}

// Fields to select
$select = array(
	\'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
	\'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
	\'Ticket\' => !empty($includeContent)
		? $modx->getSelectColumns($class, $class)
		: $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}
$pdoFetch->addTime(\'Conditions prepared\');

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => \'createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $class . \'.id\',
	\'return\' => !empty($returnIds)
		? \'ids\'
		: \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
	return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Handle properties
		$properties = is_string($row[\'properties\'])
			? $modx->fromJSON($row[\'properties\'])
			: $row[\'properties\'];
		if (!empty($properties[\'tickets\'])) {
			$properties = $properties[\'tickets\'];
		}
		if (empty($properties[\'process_tags\'])) {
			foreach ($row as $field => $value) {
				$row[$field] = str_replace(array(\'[\', \']\'), array(\'&#91;\', \'&#93;\'), $value);
			}
		}
		if (!is_array($properties)) {
			$properties = array();
		}

		// Handle rating
		$row[\'rating\'] = $row[\'rating_total\'] = array_key_exists(\'rating\', $properties)
			? $properties[\'rating\']
			: 0;
		$row[\'rating_plus\'] = array_key_exists(\'rating_plus\', $properties)
			? $properties[\'rating_plus\']
			: 0;
		$row[\'rating_minus\'] = array_key_exists(\'rating_minus\', $properties)
			? $properties[\'rating_minus\']
			: 0;
		if ($row[\'rating\'] > 0) {
			$row[\'rating\'] = \'+\' . $row[\'rating\'];
			$row[\'rating_positive\'] = 1;
		}
		elseif ($row[\'rating\'] < 0) {
			$row[\'rating_negative\'] = 1;
		}

		if (!$Tickets->authenticated || $modx->user->id == $row[\'createdby\']) {
			$row[\'cant_vote\'] = 1;
		}
		elseif (array_key_exists(\'vote\', $row)) {
			if ($row[\'vote\'] == \'\') {
				$row[\'can_vote\'] = 1;
			}
			elseif ($row[\'vote\'] > 0) {
				$row[\'voted_plus\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
			elseif ($row[\'vote\'] < 0) {
				$row[\'voted_minus\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
			else {
				$row[\'voted_none\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
		}
		$row[\'active\'] = (int)!empty($row[\'can_vote\']);
		$row[\'inactive\'] = (int)!empty($row[\'cant_vote\']);

		$row[\'can_star\'] = $Tickets->authenticated;
		$row[\'stared\'] = !empty($row[\'star\']);
		$row[\'unstared\'] = empty($row[\'star\']);

		// Adding fields to row
		$additional_fields = $pdoFetch->getObject(\'Ticket\', $row[\'id\'], array(
			\'leftJoin\' => array(
				\'View\' => array(\'class\' => \'TicketView\', \'on\' => \'`Ticket`.`id` = `View`.`parent`\'),
				\'Thread\' => array(\'class\' => \'TicketThread\', \'on\' => \'`Thread`.`resource` = `Ticket`.`id`  AND `Thread`.`deleted` = 0\'),
			),
			\'select\' => array(
				\'View\' => \'COUNT(`View`.`parent`) as `views`\',
				\'Thread\' => \'`Thread`.`id` as `thread`\',
			),
			\'groupby\' => $class . \'.id\'
		));
		$row = array_merge($row, $additional_fields);
		$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'published\' => 1, \'thread\' => $row[\'thread\']));
		$row[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $row[\'id\'], \'class\' => \'Ticket\'));
		// Special fields for quick placeholders
		$row[\'isauthor\'] = $modx->user->id == $row[\'createdby\'];
		$row[\'unpublished\'] = empty($row[\'published\']);

		$row[\'idx\'] = $pdoFetch->idx++;
		// Processing new comments
		if ($Tickets->authenticated) {
			$last_view = $pdoFetch->getObject(\'TicketView\', array(
				\'parent\' => $row[\'id\'],
				\'uid\' => $modx->user->id,
			), array(
				\'sortby\' => \'timestamp\',
				\'sortdir\' => \'DESC\',
				\'limit\' => 1,
			));
			if (!empty($last_view[\'timestamp\'])) {
				$row[\'new_comments\'] = $modx->getCount(\'TicketComment\', array(
					\'published\' => 1,
					\'thread\' => $row[\'thread\'],
					\'createdon:>\' => $last_view[\'timestamp\'],
					\'createdby:!=\' => $modx->user->id,
				));
			}
			else {
				$row[\'new_comments\'] = $row[\'comments\'];
			}
		}
		else {
			$row[\'new_comments\'] = \'\';
		}

		// Processing chunk
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = empty($tpl)
			? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getTicketsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	if (empty($outputSeparator)) {
		$outputSeparator = "\\n";
	}
	$output = implode($outputSeparator, $output);
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$array = array(\'output\' => $output);
		if ($Tickets->authenticated && $modx->resource->class_key == \'TicketsSection\') {
			/** @var TicketsSection $section */
			$section = &$modx->resource;
			$array[\'subscribed\'] = $section->isSubscribed();
		}
		$output = $pdoFetch->getChunk($tplWrapper, $array, $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:21:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"tpl.Tickets.list.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:17:"tickets_prop_user";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:23:"tickets_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_tickets.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'Ticket\';
$where = array(\'class_key\' => $class);

//Filter by user
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	else {
		if (!empty($user_id)) {
			$where[\'User.id:IN\'] = $user_id;
		}
		else {
			if (!empty($user_username)) {
				$where[\'User.username:IN\'] = $user_username;
			}
		}
	}
}

// Joining tables
$leftJoin = array(
	\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `User`.`id`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `Ticket`.`id` AND `Vote`.`class` = "Ticket" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `Ticket`.`id` AND `Star`.`class` = "Ticket" AND `Star`.`createdby` = \' . $modx->user->id
	);
}

// Fields to select
$select = array(
	\'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
	\'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
	\'Ticket\' => !empty($includeContent)
		? $modx->getSelectColumns($class, $class)
		: $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}
$pdoFetch->addTime(\'Conditions prepared\');

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => \'createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $class . \'.id\',
	\'return\' => !empty($returnIds)
		? \'ids\'
		: \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
	return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Handle properties
		$properties = is_string($row[\'properties\'])
			? $modx->fromJSON($row[\'properties\'])
			: $row[\'properties\'];
		if (!empty($properties[\'tickets\'])) {
			$properties = $properties[\'tickets\'];
		}
		if (empty($properties[\'process_tags\'])) {
			foreach ($row as $field => $value) {
				$row[$field] = str_replace(array(\'[\', \']\'), array(\'&#91;\', \'&#93;\'), $value);
			}
		}
		if (!is_array($properties)) {
			$properties = array();
		}

		// Handle rating
		$row[\'rating\'] = $row[\'rating_total\'] = array_key_exists(\'rating\', $properties)
			? $properties[\'rating\']
			: 0;
		$row[\'rating_plus\'] = array_key_exists(\'rating_plus\', $properties)
			? $properties[\'rating_plus\']
			: 0;
		$row[\'rating_minus\'] = array_key_exists(\'rating_minus\', $properties)
			? $properties[\'rating_minus\']
			: 0;
		if ($row[\'rating\'] > 0) {
			$row[\'rating\'] = \'+\' . $row[\'rating\'];
			$row[\'rating_positive\'] = 1;
		}
		elseif ($row[\'rating\'] < 0) {
			$row[\'rating_negative\'] = 1;
		}

		if (!$Tickets->authenticated || $modx->user->id == $row[\'createdby\']) {
			$row[\'cant_vote\'] = 1;
		}
		elseif (array_key_exists(\'vote\', $row)) {
			if ($row[\'vote\'] == \'\') {
				$row[\'can_vote\'] = 1;
			}
			elseif ($row[\'vote\'] > 0) {
				$row[\'voted_plus\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
			elseif ($row[\'vote\'] < 0) {
				$row[\'voted_minus\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
			else {
				$row[\'voted_none\'] = 1;
				$row[\'cant_vote\'] = 1;
			}
		}
		$row[\'active\'] = (int)!empty($row[\'can_vote\']);
		$row[\'inactive\'] = (int)!empty($row[\'cant_vote\']);

		$row[\'can_star\'] = $Tickets->authenticated;
		$row[\'stared\'] = !empty($row[\'star\']);
		$row[\'unstared\'] = empty($row[\'star\']);

		// Adding fields to row
		$additional_fields = $pdoFetch->getObject(\'Ticket\', $row[\'id\'], array(
			\'leftJoin\' => array(
				\'View\' => array(\'class\' => \'TicketView\', \'on\' => \'`Ticket`.`id` = `View`.`parent`\'),
				\'Thread\' => array(\'class\' => \'TicketThread\', \'on\' => \'`Thread`.`resource` = `Ticket`.`id`  AND `Thread`.`deleted` = 0\'),
			),
			\'select\' => array(
				\'View\' => \'COUNT(`View`.`parent`) as `views`\',
				\'Thread\' => \'`Thread`.`id` as `thread`\',
			),
			\'groupby\' => $class . \'.id\'
		));
		$row = array_merge($row, $additional_fields);
		$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'published\' => 1, \'thread\' => $row[\'thread\']));
		$row[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $row[\'id\'], \'class\' => \'Ticket\'));
		// Special fields for quick placeholders
		$row[\'isauthor\'] = $modx->user->id == $row[\'createdby\'];
		$row[\'unpublished\'] = empty($row[\'published\']);

		$row[\'idx\'] = $pdoFetch->idx++;
		// Processing new comments
		if ($Tickets->authenticated) {
			$last_view = $pdoFetch->getObject(\'TicketView\', array(
				\'parent\' => $row[\'id\'],
				\'uid\' => $modx->user->id,
			), array(
				\'sortby\' => \'timestamp\',
				\'sortdir\' => \'DESC\',
				\'limit\' => 1,
			));
			if (!empty($last_view[\'timestamp\'])) {
				$row[\'new_comments\'] = $modx->getCount(\'TicketComment\', array(
					\'published\' => 1,
					\'thread\' => $row[\'thread\'],
					\'createdon:>\' => $last_view[\'timestamp\'],
					\'createdby:!=\' => $modx->user->id,
				));
			}
			else {
				$row[\'new_comments\'] = $row[\'comments\'];
			}
		}
		else {
			$row[\'new_comments\'] = \'\';
		}

		// Processing chunk
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = empty($tpl)
			? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getTicketsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	if (empty($outputSeparator)) {
		$outputSeparator = "\\n";
	}
	$output = implode($outputSeparator, $output);
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$array = array(\'output\' => $output);
		if ($Tickets->authenticated && $modx->resource->class_key == \'TicketsSection\') {
			/** @var TicketsSection $section */
			$section = &$modx->resource;
			$array[\'subscribed\'] = $section->isSubscribed();
		}
		$output = $pdoFetch->getChunk($tplWrapper, $array, $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  '425baac8faadfa1f7b12a1b178e02688' => 
  array (
    'criteria' => 
    array (
      'name' => 'getTicketsSections',
    ),
    'object' => 
    array (
      'id' => 26,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getTicketsSections',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'TicketsSection\';
$where = array(\'class_key\' => $class);

// Adding custom where parameters
if (!empty($scriptProperties[\'where\'])) {
	$tmp = $modx->fromJSON($scriptProperties[\'where\']);
	if (is_array($tmp)) {
		$where = array_merge($where, $tmp);
	}
}
unset($scriptProperties[\'where\']);
$pdoFetch->addTime(\'"Where" expression built.\');

// Joining tables
$leftJoin = array(
	\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'Ticket.parent=TicketsSection.id AND Ticket.published=1 AND Ticket.deleted=0 AND Ticket.class_key="Ticket"\'),
	\'View\' => array(\'class\' => \'TicketView\', \'on\' => \'Ticket.id=View.parent\'),
	//\'TicketVote\' => array(\'class\' => \'TicketVote\', \'on\' => \'icket.id=Vote.parent AND Vote.class="Ticket"\'),
);

// Fields to select
$select = array(
	\'TicketsSection\' => !empty($includeContent)
		? $modx->getSelectColumns($class, $class)
		: $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
	\'Ticket\' => \'COUNT(DISTINCT `Ticket`.`id`) as `tickets`\',
	\'View\' => \'COUNT(`View`.`parent`) as `views`\',
	//,\'Vote\' => \'SUM(DISTINCT `Vote`.`value`) as `votes`\'
);

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class . \'.id\',
	\'sortby\' => \'views\',
	\'sortdir\' => \'DESC\',
	\'return\' => !empty($returnIds)
		? \'ids\'
		: \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
	return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Processing main fields
		$add = $pdoFetch->getObject(\'TicketThread\', array(\'deleted\' => 0), array(
			\'innerJoin\' => array(
				\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'Ticket.id = TicketThread.resource AND Ticket.published=1 AND Ticket.deleted=0 AND Ticket.class_key="Ticket" AND Ticket.parent=\' . $row[\'id\']),
			),
			\'select\' => array(
				\'TicketThread\' => \'SUM(TicketThread.comments) as `comments`\'
			)
		));

		$row[\'comments\'] = !empty($add[\'comments\'])
			? $add[\'comments\']
			: 0;
		$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);

		$row[\'idx\'] = $pdoFetch->idx++;
		// Processing chunk
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = empty($tpl)
			? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');
if (empty($outputSeparator)) {
	$outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getSectionsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:19:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.sections.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"views";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_sections.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'TicketsSection\';
$where = array(\'class_key\' => $class);

// Adding custom where parameters
if (!empty($scriptProperties[\'where\'])) {
	$tmp = $modx->fromJSON($scriptProperties[\'where\']);
	if (is_array($tmp)) {
		$where = array_merge($where, $tmp);
	}
}
unset($scriptProperties[\'where\']);
$pdoFetch->addTime(\'"Where" expression built.\');

// Joining tables
$leftJoin = array(
	\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'Ticket.parent=TicketsSection.id AND Ticket.published=1 AND Ticket.deleted=0 AND Ticket.class_key="Ticket"\'),
	\'View\' => array(\'class\' => \'TicketView\', \'on\' => \'Ticket.id=View.parent\'),
	//\'TicketVote\' => array(\'class\' => \'TicketVote\', \'on\' => \'icket.id=Vote.parent AND Vote.class="Ticket"\'),
);

// Fields to select
$select = array(
	\'TicketsSection\' => !empty($includeContent)
		? $modx->getSelectColumns($class, $class)
		: $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
	\'Ticket\' => \'COUNT(DISTINCT `Ticket`.`id`) as `tickets`\',
	\'View\' => \'COUNT(`View`.`parent`) as `views`\',
	//,\'Vote\' => \'SUM(DISTINCT `Vote`.`value`) as `votes`\'
);

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class . \'.id\',
	\'sortby\' => \'views\',
	\'sortdir\' => \'DESC\',
	\'return\' => !empty($returnIds)
		? \'ids\'
		: \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
	return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
	foreach ($rows as $k => $row) {
		// Processing main fields
		$add = $pdoFetch->getObject(\'TicketThread\', array(\'deleted\' => 0), array(
			\'innerJoin\' => array(
				\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'Ticket.id = TicketThread.resource AND Ticket.published=1 AND Ticket.deleted=0 AND Ticket.class_key="Ticket" AND Ticket.parent=\' . $row[\'id\']),
			),
			\'select\' => array(
				\'TicketThread\' => \'SUM(TicketThread.comments) as `comments`\'
			)
		));

		$row[\'comments\'] = !empty($add[\'comments\'])
			? $add[\'comments\']
			: 0;
		$row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);

		$row[\'idx\'] = $pdoFetch->idx++;
		// Processing chunk
		$tpl = $pdoFetch->defineChunk($row);
		$output[] = empty($tpl)
			? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');
if (empty($outputSeparator)) {
	$outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getSectionsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  '15a803fb954baeb2c5098b680cce0e79' => 
  array (
    'criteria' => 
    array (
      'name' => 'getComments',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getComments',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.Tickets.comment.list.row\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

// Define threads of comments
if (!empty($parents) || !empty($resources) || !empty($threads)) {
	$where = array();
	$options = array(
		\'innerJoin\' => array(
			\'Thread\' => array(
				\'class\' => \'TicketThread\',
				\'on\' => \'`Ticket`.`id` = `Thread`.`resource`\',
			)
		),
		\'groupby\' => \'`Ticket`.`id`\',
		\'select\' => array(\'Thread\' => \'`Thread`.`id`\'),
		\'showUnpublished\' => !empty($showUnpublished),
		\'showDeleted\' => !empty($showDeleted),
		\'depth\' => isset($depth)
			? (int)$depth
			: 10,
	);
	if (!empty($parents)) {
		$options[\'parents\'] = $parents;
	}
	if (!empty($resources)) {
		$options[\'resources\'] = $resources;
	}
	if (!empty($threads)) {
		$threads = array_map(\'trim\', explode(\',\', $threads));
		$threads_in = $threads_out = array();
		foreach ($threads as $v) {
			if (!is_numeric($v)) {
				continue;
			}
			if ($v[0] == \'-\') {
				$threads_out[] = abs($v);
			}
			else {
				$threads_in[] = abs($v);
			}
		}
		if (!empty($threads_in)) {
			$where[\'Thread.id:IN\'] = $threads_in;
		}
		if (!empty($threads_out)) {
			$where[\'Thread.id:NOT IN\'] = $threads_out;
		}
	}

	$rows = $pdoFetch->getCollection(\'Ticket\', $where, $options);
	$threads = array();
	foreach ($rows as $item) {
		$threads[] = $item[\'id\'];
	}
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
	$where[\'published\'] = 1;
}
if (empty($showDeleted)) {
	$where[\'deleted\'] = 0;
}

// Filter by user
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	elseif (!empty($user_id)) {
		$where[\'User.id:IN\'] = $user_id;
	}
	elseif (!empty($user_username)) {
		$where[\'User.username:IN\'] = $user_username;
	}
}
// Filter by threads
if (!empty($threads)) {
	$where[\'thread:IN\'] = $threads;
}
// Filter by comments
if (!empty($comments)) {
	$comments = array_map(\'trim\', explode(\',\', $comments));
	$comments_in = $comments_out = array();
	foreach ($comments as $v) {
		if (!is_numeric($v)) {
			continue;
		}
		if ($v[0] == \'-\') {
			$comments_out[] = abs($v);
		}
		else {
			$comments_in[] = abs($v);
		}
	}
	if (!empty($comments_in)) {
		$where[\'id:IN\'] = $comments_in;
	}
	if (!empty($comments_out)) {
		$where[\'id:NOT IN\'] = $comments_out;
	}
}

// Joining tables
$innerJoin = array(
	\'Thread\' => array(
		\'class\' => \'TicketThread\',
		\'on\' => \'`Thread`.`id` = `TicketComment`.`thread`\'
	)
);
$leftJoin = array(
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
	\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\'),
	\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id
	);
}
// Fields to select
$select = array(
	\'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) . \', `rating` as `rating_total`\',
	\'Thread\' => \'`Thread`.`resource`\',
	\'User\' => \'`User`.`username`\',
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'), true) . \',`Profile`.`email` as `user_email`\',
	\'Ticket\' => !empty($includeContent)
		? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
		: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true),
	\'Section\' => !empty($includeContent)
		? $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\')
		: $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class . \'.createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $class . \'.id\',
	\'fastMode\' => true,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows)) {
	foreach ($rows as $row) {
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'published\' => 1, \'thread\' => $row[\'thread\']));;
		$output[] = $Tickets->templateNode($row, $tpl);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getCommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
      'locked' => 0,
      'properties' => 'a:15:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.comment.list.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplCommentDeleted";a:7:{s:4:"name";s:17:"tplCommentDeleted";s:4:"desc";s:30:"tickets_prop_tplCommentDeleted";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.one.deleted";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"threads";a:7:{s:4:"name";s:7:"threads";s:4:"desc";s:20:"tickets_prop_threads";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_comments.php',
      'content' => '/* @var array $scriptProperties */
/* @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null, $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.Tickets.comment.list.row\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

// Define threads of comments
if (!empty($parents) || !empty($resources) || !empty($threads)) {
	$where = array();
	$options = array(
		\'innerJoin\' => array(
			\'Thread\' => array(
				\'class\' => \'TicketThread\',
				\'on\' => \'`Ticket`.`id` = `Thread`.`resource`\',
			)
		),
		\'groupby\' => \'`Ticket`.`id`\',
		\'select\' => array(\'Thread\' => \'`Thread`.`id`\'),
		\'showUnpublished\' => !empty($showUnpublished),
		\'showDeleted\' => !empty($showDeleted),
		\'depth\' => isset($depth)
			? (int)$depth
			: 10,
	);
	if (!empty($parents)) {
		$options[\'parents\'] = $parents;
	}
	if (!empty($resources)) {
		$options[\'resources\'] = $resources;
	}
	if (!empty($threads)) {
		$threads = array_map(\'trim\', explode(\',\', $threads));
		$threads_in = $threads_out = array();
		foreach ($threads as $v) {
			if (!is_numeric($v)) {
				continue;
			}
			if ($v[0] == \'-\') {
				$threads_out[] = abs($v);
			}
			else {
				$threads_in[] = abs($v);
			}
		}
		if (!empty($threads_in)) {
			$where[\'Thread.id:IN\'] = $threads_in;
		}
		if (!empty($threads_out)) {
			$where[\'Thread.id:NOT IN\'] = $threads_out;
		}
	}

	$rows = $pdoFetch->getCollection(\'Ticket\', $where, $options);
	$threads = array();
	foreach ($rows as $item) {
		$threads[] = $item[\'id\'];
	}
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
	$where[\'published\'] = 1;
}
if (empty($showDeleted)) {
	$where[\'deleted\'] = 0;
}

// Filter by user
if (!empty($user)) {
	$user = array_map(\'trim\', explode(\',\', $user));
	$user_id = $user_username = array();
	foreach ($user as $v) {
		if (is_numeric($v)) {
			$user_id[] = $v;
		}
		else {
			$user_username[] = $v;
		}
	}
	if (!empty($user_id) && !empty($user_username)) {
		$where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\', $user_username) . \'\\\'))\';
	}
	elseif (!empty($user_id)) {
		$where[\'User.id:IN\'] = $user_id;
	}
	elseif (!empty($user_username)) {
		$where[\'User.username:IN\'] = $user_username;
	}
}
// Filter by threads
if (!empty($threads)) {
	$where[\'thread:IN\'] = $threads;
}
// Filter by comments
if (!empty($comments)) {
	$comments = array_map(\'trim\', explode(\',\', $comments));
	$comments_in = $comments_out = array();
	foreach ($comments as $v) {
		if (!is_numeric($v)) {
			continue;
		}
		if ($v[0] == \'-\') {
			$comments_out[] = abs($v);
		}
		else {
			$comments_in[] = abs($v);
		}
	}
	if (!empty($comments_in)) {
		$where[\'id:IN\'] = $comments_in;
	}
	if (!empty($comments_out)) {
		$where[\'id:NOT IN\'] = $comments_out;
	}
}

// Joining tables
$innerJoin = array(
	\'Thread\' => array(
		\'class\' => \'TicketThread\',
		\'on\' => \'`Thread`.`id` = `TicketComment`.`thread`\'
	)
);
$leftJoin = array(
	\'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
	\'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
	\'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\'),
	\'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
);
if ($Tickets->authenticated) {
	$leftJoin[\'Vote\'] = array(
		\'class\' => \'TicketVote\',
		\'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id
	);
	$leftJoin[\'Star\'] = array(
		\'class\' => \'TicketStar\',
		\'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id
	);
}
// Fields to select
$select = array(
	\'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) . \', `rating` as `rating_total`\',
	\'Thread\' => \'`Thread`.`resource`\',
	\'User\' => \'`User`.`username`\',
	\'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'), true) . \',`Profile`.`email` as `user_email`\',
	\'Ticket\' => !empty($includeContent)
		? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
		: $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true),
	\'Section\' => !empty($includeContent)
		? $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\')
		: $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
	$select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
	$select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'innerJoin\' => $modx->toJSON($innerJoin),
	\'leftJoin\' => $modx->toJSON($leftJoin),
	\'select\' => $modx->toJSON($select),
	\'sortby\' => $class . \'.createdon\',
	\'sortdir\' => \'DESC\',
	\'groupby\' => $class . \'.id\',
	\'fastMode\' => true,
	\'return\' => \'data\',
	\'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows)) {
	foreach ($rows as $row) {
		$row[\'comments\'] = $modx->getCount(\'TicketComment\', array(\'published\' => 1, \'thread\' => $row[\'thread\']));;
		$output[] = $Tickets->templateNode($row, $tpl);
	}
}
$pdoFetch->addTime(\'Returning processed chunks\');
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="getCommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
    ),
  ),
  '769118d4b926f474f2b7c941a2b107ef' => 
  array (
    'criteria' => 
    array (
      'name' => 'getStars',
    ),
    'object' => 
    array (
      'id' => 28,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getStars',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
if (empty($class)) {
	$class = \'Ticket\';
}
/** @var integer $user */
if (empty($user)) {
	$user = $modx->user->get(\'id\');
}
unset($scriptProperties[\'user\']);

$ids = array();
$q = $modx->newQuery(\'TicketStar\', array(\'class\' => $class, \'createdby\' => $user));
$q->select(\'id\');
$tstart = microtime(true);
if ($q->prepare() && $q->stmt->execute()) {
	$modx->queryTime = microtime(true) - $tstart;
	$modx->executedQueries++;

	$ids = $q->stmt->fetchAll(PDO::FETCH_COLUMN);
}

if (empty($ids)) {
	return false;
}

$where = array($class . \'.id:IN\' => $ids);
if (!empty($scriptProperties[\'where\'])) {
	$tmp = $modx->fromJSON($scriptProperties[\'where\']);
	if (is_array($tmp)) {
		$where = array_merge($where, $tmp);
	}
}
$scriptProperties[\'where\'] = $modx->toJSON($where);
if (empty($parents)) {
	$scriptProperties[\'parents\'] = 0;
}
if (empty($tpl)) {
	unset($scriptProperties[\'tpl\']);
}

return $class == \'Ticket\'
	? $modx->runSnippet(\'getTickets\', $scriptProperties)
	: $modx->runSnippet(\'getComments\', $scriptProperties);',
      'locked' => 0,
      'properties' => 'a:2:{s:5:"class";a:7:{s:4:"name";s:5:"class";s:4:"desc";s:18:"tickets_prop_class";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"Ticket";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_stars.php',
      'content' => '/** @var array $scriptProperties */
if (empty($class)) {
	$class = \'Ticket\';
}
/** @var integer $user */
if (empty($user)) {
	$user = $modx->user->get(\'id\');
}
unset($scriptProperties[\'user\']);

$ids = array();
$q = $modx->newQuery(\'TicketStar\', array(\'class\' => $class, \'createdby\' => $user));
$q->select(\'id\');
$tstart = microtime(true);
if ($q->prepare() && $q->stmt->execute()) {
	$modx->queryTime = microtime(true) - $tstart;
	$modx->executedQueries++;

	$ids = $q->stmt->fetchAll(PDO::FETCH_COLUMN);
}

if (empty($ids)) {
	return false;
}

$where = array($class . \'.id:IN\' => $ids);
if (!empty($scriptProperties[\'where\'])) {
	$tmp = $modx->fromJSON($scriptProperties[\'where\']);
	if (is_array($tmp)) {
		$where = array_merge($where, $tmp);
	}
}
$scriptProperties[\'where\'] = $modx->toJSON($where);
if (empty($parents)) {
	$scriptProperties[\'parents\'] = 0;
}
if (empty($tpl)) {
	unset($scriptProperties[\'tpl\']);
}

return $class == \'Ticket\'
	? $modx->runSnippet(\'getTickets\', $scriptProperties)
	: $modx->runSnippet(\'getComments\', $scriptProperties);',
    ),
  ),
  '2a76e67d4aa4243bca3301299f52a5f1' => 
  array (
    'criteria' => 
    array (
      'name' => 'Tickets',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'Tickets',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
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
		$output = str_replace(array(\'*{*{*{*{*{*\', \'*}*}*}*}*}*\'), array(\'[\', \']\'), $output);
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

		if (!$authenticated && !$modx->getOption(\'tickets.count_guests\', false)) {
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
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/plugins/plugin.tickets.php',
      'content' => 'switch ($modx->event->name) {

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
		$output = str_replace(array(\'*{*{*{*{*{*\', \'*}*}*}*}*}*\'), array(\'[\', \']\'), $output);
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

		if (!$authenticated && !$modx->getOption(\'tickets.count_guests\', false)) {
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
    ),
  ),
  'a5777546a7ec531ed804dce053f899bf' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '07f7eef197e51de1b3145033d167b017' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnSiteRefresh',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnSiteRefresh',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'a4f294b13a18187d4622e547c8d07877' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnWebPagePrerender',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnWebPagePrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '4bcc2730025ac26996294c6b77123698' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnPageNotFound',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnPageNotFound',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'd1006573ae91bf465b4b4147853016ef' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnLoadWebDocument',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnLoadWebDocument',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '6bf0caef67da4b9010fd57552b2f5027' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnWebPageComplete',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnWebPageComplete',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '17cb642eeaa8243fdca30e5a546d556b' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnEmptyTrash',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'c5ff09b3b37d0fdfd1255f3e05f7bf81' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 5,
      'event' => 'OnUserSave',
    ),
    'object' => 
    array (
      'pluginid' => 5,
      'event' => 'OnUserSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);