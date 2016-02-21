MODx.page.CreateUser = function(config) {
    config = config || {};
    config.url ;
    Ext.applyIf(config,{
        formpanel: 'modx-panel-user'
        ,buttons: [{
            process: 'security/user/create', 
            text: _('save'), 
            method: 'remote'
            ,checkDirty: true
            ,keys: [{
                key: MODx.config.keymap_save || 's'
                ,ctrl: true
            }]
        },'-',{
            process: 'cancel', text: _('cancel'), params: {a:MODx.action['security/user']}
        }/*,'-',{
            text: _('help_ex')
            ,handler: MODx.loadHelpPane
        }*/]
        ,components: [{
            xtype: 'modx-panel-user'
            ,renderTo: 'modx-panel-user-div'
            ,user: 0
            ,name: ''
        }]
	});
	MODx.page.CreateUser.superclass.constructor.call(this,config);
};
Ext.extend(MODx.page.CreateUser,MODx.Component);
Ext.reg('modx-page-user-create',MODx.page.CreateUser);