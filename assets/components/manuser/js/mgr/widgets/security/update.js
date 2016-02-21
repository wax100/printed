
MODx.page.UpdateUser = function(config) {
	config = config || {};
	Ext.applyIf(config,{
       formpanel: 'modx-panel-user'
          ,url: MODx.config.base_url+'core/components/manuser/connectors/index.php'
       ,actions: {
            'new': MODx.action['security/user/create']
            ,edit: MODx.action['security/user/update']
           ,cancel: MODx.action['security/user']
       }
        ,buttons: [{
        
            process: 'security/user/update', 
            url: MODx.config.base_url+'core/components/manuser/connectors/index.php',
            text: _('save'), method: 'remote'
            ,checkDirty: true
            ,keys: [{
                key: MODx.config.keymap_save || 's'
                ,ctrl: true
            }]
        },'-',{
            process: 'cancel', text: _('cancel'), params: {
                a: 'getlist',
                namespace: 'manuser'
            }
        },'-',{
            text: _('delete')
            ,handler: this.removeUser
            ,scope: this
        }/*,'-',{
            text: _('help_ex')
            ,handler: MODx.loadHelpPane
        }*/]
        ,components: [{
            xtype: 'modx-panel-user'
            ,renderTo: 'modx-panel-user-div'
            ,user: config.user
            ,remoteFields: config.remoteFields
            ,extendedFields: config.extendedFields
            ,name: ''
        }]
	});
	MODx.page.UpdateUser.superclass.constructor.call(this,config);
};
Ext.extend(MODx.page.UpdateUser,MODx.Component,{
    removeUser: function(btn,e) {
    
   // console.log(this.config);
  //  return false;
        MODx.msg.confirm({
            title: _('user_remove')
            ,text: _('user_confirm_remove')
            ,url: this.config.url
            //MODx.config.connectors_url+'security/user.php'
            ,params: {
                action: 'security/user/delete'
                ,id: this.config.user
            }
            ,listeners: {
                'success': {fn:function(r) {
                   // MODx.loadPage(MODx.action['security/user']);
                    MODx.loadPage('getlist&namespace=manuser');
                },scope:this}
            }
        });
    }
});
Ext.reg('modx-page-user-update',MODx.page.UpdateUser);