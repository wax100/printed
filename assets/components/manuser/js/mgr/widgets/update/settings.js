/*Ext.onReady(function() {
    MODx.load({ xtype: 'modx-page-user' });
});*/

MODx.page.User= function(config) {

var getParams = document.URL.split("?");
var params = Ext.urlDecode(getParams[getParams.length - 1]);

	config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'modx-panel-user'
            ,renderTo: 'modx-panel-user-div'
          //  ,user: params['id']
            ,url: MODx.config.base_url+'core/components/manuser/connectors/index.php'
        }]
    });
	MODx.page.User.superclass.constructor.call(this,config);
};
Ext.extend(MODx.page.User,MODx.Component);
Ext.reg('modx-page-user',MODx.page.User);
