

MODx.panel.User = function(config) {
console.log(config);
    config = config || {};
    Ext.applyIf(config,{
        url:  MODx.config.base_url+'core/components/manuser/connectors/index.php'
        ,baseParams: {
             action: 'mgr/users/get'
            }
        ,id: 'modx-panel-user'
		,cls: 'container'
        ,defaults: { collapsible: false ,autoHeight: true }
        ,bodyStyle: ''
        ,items: [{
             html: '<h2>Пользователь</h2>'
            ,border: false
            ,cls: 'modx-page-header'
            ,id: 'modx-user-header'
        },{
            xtype: 'modx-tabs'
            ,id: 'modx-user-tabs'
            ,deferredRender: false
            ,defaults: {
                autoHeight: true
                ,layout: 'form'
                ,labelWidth: 150
				,bodyCssClass: 'tab-panel-wrapper'
            ,layoutOnTabChange: true
            }
            ,items: this.getFields(config)
        }]
        ,useLoadingMask: true
        ,listeners: {
            'setup': {fn:this.setup,scope:this}
           ,'success': {fn:this.success,scope:this}
           ,'beforeSubmit': {fn:this.beforeSubmit,scope:this}
        }
    });
    MODx.panel.User.superclass.constructor.call(this,config);
   Ext.getCmp('modx-user-panel-newpassword').getEl().dom.style.display = 'none';
    Ext.getCmp('modx-user-password-genmethod-s').on('check',this.showNewPassword,this);
};

Ext.extend(MODx.panel.User,MODx.FormPanel,{
    setup: function() {
        if (this.config.user === '' || this.config.user === 0) {
            this.fireEvent('ready');
            return false;
        }
        
        MODx.Ajax.request({
            url: MODx.config.base_url+'core/components/manuser/connectors/index.php'
            ,params: {
                action: 'mgr/users/get'
                ,id: this.config.user
                ,getGroups: true
            }
            ,listeners: {
                'success': {fn:function(r) {
                    this.getForm().setValues(r.object);

                    var d = Ext.decode(r.object.groups);
                    var g = Ext.getCmp('modx-grid-user-groups');
                    if (g) {
                        var s = g.getStore();
                        if (s) { s.loadData(d); }
                    }
                    Ext.get('modx-user-header').update('<h2>'+_('user')+': '+r.object.username+'</h2>');
                    this.fireEvent('ready',r.object);
                    MODx.fireEvent('ready');
                },scope:this}
            }
        });
    }
    
    ,beforeSubmit: function(o) {
        var d = {};
        var g = Ext.getCmp('modx-grid-user-settings');
        if (g) { d.settings = g.encodeModified(); }

        var h = Ext.getCmp('modx-grid-user-groups');
        if (h) { d.groups = h.encode(); }

        var t = Ext.getCmp('modx-remote-tree');
        if (t) { d.remote_data = t.encode(); }

        var et = Ext.getCmp('modx-extended-tree');
        if (et) { d.extended = et.encode(); }
        
        console.log(o.form.baseParams);
        
        Ext.apply(o.form.baseParams,d);
    }

    ,success: function(o) {
        var userId = this.config.user;
        if (Ext.getCmp('modx-user-passwordnotifymethod-s').getValue() === true && o.result.message != '') {
            Ext.Msg.hide();
            Ext.Msg.show({
                title: _('password_notification')
                ,msg: o.result.message
                ,buttons: Ext.Msg.OK
                ,fn: function(btn) {
               console.log(userId);
                    if (userId == 0) {
                        MODx.loadPage('mgr/users/update', 'id='+o.result.object.id);
                    }
                    return false;
                }
            });
            this.clearDirty();
        } else if (userId == 0) {
            MODx.loadPage('mgr/users/update', 'id='+o.result.object.id);
        }
    }

    ,showNewPassword: function(cb,v) {
        var el = Ext.getCmp('modx-user-panel-newpassword').getEl();
        if (v) {
            el.slideIn('t',{useDisplay:true});
        } else {
            el.slideOut('t',{useDisplay:true});
        }
    }

    ,getFields: function(config) {
        var f = [{
            title: _('general_information')
            ,defaults: { msgTarget: 'side' ,autoHeight: true }
            ,cls: 'main-wrapper form-with-labels'
            ,labelAlign: 'top' // prevent default class of x-form-label-left
            ,items: this.getGeneralFields(config)
        }];
        
        
        /*if (config.user != 0) {
            f.push({
                title: _('settings')
                ,autoHeight: true
                ,defaults: { autoHeight: true }
                ,hideMode: 'offsets'
                ,items: [{
                    html: '<h3>'+_('user_settings')+'</h3><p>'+_('user_settings_desc')+'</p>'
					,bodyCssClass: 'panel-desc'
                    ,border: false
                },{
                    xtype: 'modx-grid-user-settings'
					,cls: 'main-wrapper'
                    ,preventRender: true
                    ,user: config.user
                    ,width: '97%'
                    ,listeners: {
                        'afterAutoSave':{fn:this.markDirty,scope:this}
                    }
                }]
            });
        }*/
        
        f.push({
            title: 'Настройки доступа'
            ,layout: 'form'
            ,defaults: { border: false ,autoHeight: true }
            ,hideMode: 'offsets'
            ,items: [{
                html: 'Здесь вы можете указать, к каким группам пользователей принадлежит этот пользователь, и указать его роли в этих группах.'
				,bodyCssClass: 'panel-desc'
            },{
                xtype: 'modx-grid-user-groups'
				,cls: 'main-wrapper'
                ,title: ''
                ,preventRender: true
                ,user: config.user
                ,width: '97%'
                ,listeners: {
                    'afterRemoveRow':{fn:this.markDirty,scope:this}
                    ,'afterUpdateRole':{fn:this.markDirty,scope:this}
                    ,'afterAddGroup':{fn:this.markDirty,scope:this}
                    ,'afterReorderGroup':{fn:this.markDirty,scope:this}
                }
            }]
        });
        /*
        if (config.remoteFields && config.remoteFields.length) {
            f.push({
                title: _('remote_data')
                ,layout: 'form'
                ,defaults: { border: false ,autoHeight: true }
                ,hideMode: 'offsets'
                ,items: [{
                    html: '<p>'+_('user_remote_data_msg')+'</p>'
					,bodyCssClass: 'panel-desc'
                },{
                    layout: 'column'
					,cls: 'main-wrapper'
                    ,items: [{
                        columnWidth: 0.4
                        ,title: _('attributes')
                        ,layout: 'fit'
                        ,border: false
                        ,items: {
                            xtype: 'modx-orm-tree'
                            ,id: 'modx-remote-tree'
                            ,data: config.remoteFields
                            ,formPanel: 'modx-panel-user'
                            ,prefix: 'remote'
                        }
                    },{
                        xtype: 'modx-orm-form'
                        ,columnWidth: 0.6
                        ,title: _('editing_form')
                        ,id: 'modx-remote-form'
                        ,prefix: 'remote'
                        ,treePanel: 'modx-remote-tree'
                        ,formPanel: 'modx-panel-user'
                    }]
                }]
            });
        }
        */
        
        /*
        config.extendedFields = config.extendedFields || [];
        f.push({
            title: _('extended_fields')
            ,layout: 'form'
            ,defaults: { border: false ,autoHeight: true }
            ,hideMode: 'offsets'
            ,items: [{
                html: '<p>'+_('extended_fields_msg')+'</p>'
				,bodyCssClass: 'panel-desc'
            },{
                layout: 'column'
				,cls: 'main-wrapper'
                ,items: [{
                    columnWidth: 0.4
                    ,title: _('attributes')
                    ,layout: 'fit'
                    ,border: false
                    ,items: {
                        xtype: 'modx-orm-tree'
                        ,id: 'modx-extended-tree'
                        ,data: config.extendedFields
                        ,formPanel: 'modx-panel-user'
                        ,prefix: 'extended'
                        ,enableDD: true
                        ,listeners: {
                        	'dragdrop': {fn:function() {
                        		this.markDirty();
                        	},scope:this}
                        }
                    }
                },{
                    xtype: 'modx-orm-form'
                    ,columnWidth: 0.6
                    ,title: _('editing_form')
                    ,id: 'modx-extended-form'
                    ,prefix: 'extended'
                    ,treePanel: 'modx-extended-tree'
                    ,formPanel: 'modx-panel-user'
                }]
            }]
        });
        */
        
        return f;
    
    }

    ,getGeneralFields: function(config) {
        return [{
            layout: 'column'
            ,border: false
            ,defaults: {
                layout: 'form'
                ,labelAlign: 'top'
                ,labelSeparator: ''
                ,anchor: '100%'
                ,border: false
            }
            ,items: [{
                columnWidth: .5
                ,defaults: {
                    msgTarget: 'under'
                }
                ,items: [{
                    id: 'modx-user-id'
                    ,name: 'id'
                    ,xtype: 'hidden'
                    ,value: config.user
                },{
                    id: 'modx-user-username'
                    ,name: 'username'
                    ,fieldLabel: _('username')
                    ,description: _('user_username_desc')
                    ,xtype: 'textfield'
                    ,anchor: '100%'
                },{
                    id: 'modx-user-fullname'
                    ,name: 'fullname'
                    ,fieldLabel: 'Полное имя'
                    ,xtype: 'textfield'
                    ,anchor: '100%'
                    ,maxLength: 255
                },{
                    id: 'modx-user-email'
                    ,name: 'email'
                    ,fieldLabel: 'Email'
                    ,xtype: 'textfield'
                    ,anchor: '100%'
                    ,maxLength: 255
                    ,allowBlank: false
                },{
                    id: 'modx-user-phone'
                    ,name: 'phone'
                    ,fieldLabel:  'Телефон'
                    ,xtype: 'textfield'
                    ,width: 200
                    ,maxLength: 255
                },{
                    id: 'modx-user-mobilephone'
                    ,name: 'mobilephone'
                    ,fieldLabel: 'Моб. телефон'
                    ,xtype: 'textfield'
                    ,width: 200
                    ,maxLength: 255
                },{
                    id: 'modx-user-fax'
                    ,name: 'fax'
                    ,fieldLabel: 'Факс'
                    ,xtype: 'textfield'
                    ,width: 200
                    ,maxLength: 255
                },{
                    id: 'modx-user-address'
                    ,name: 'address'
                    ,fieldLabel: 'Адрес'
                    ,xtype: 'textarea'
                    ,anchor: '100%'
                    ,grow: true
                },{
                    id: 'modx-user-city'
                    ,name: 'city'
                    ,fieldLabel: 'Город'
                    ,xtype: 'textfield'
                    ,anchor: '100%'
                    ,maxLength: 255
                },{
                    id: 'modx-user-state'
                    ,name: 'state'
                    ,fieldLabel: 'Область'
                    ,xtype: 'textfield'
                    ,width: 100
                    ,maxLength: 100
                },{
                    id: 'modx-user-zip'
                    ,name: 'zip'
                    ,fieldLabel: 'Индекс'
                    ,xtype: 'textfield'
                    ,width: 100
                    ,maxLength: 25
                },{
                    id: 'modx-user-country'
                    ,fieldLabel: 'Страна'
                    ,xtype: 'modx-combo-country'
                    ,value: ''
                },{
                    id: 'modx-user-website'
                    ,name: 'website'
                    ,fieldLabel: 'Веб-сайт'
                    ,xtype: 'textfield'
                    ,anchor: '100%'
                    ,maxLength: 255
                },{
                    id: 'modx-user-dob'
                    ,name: 'dob'
                    ,fieldLabel: 'Дата рождения'
                    ,xtype: 'datefield'
                    ,width: 200
                    ,allowBlank: true
                    ,format: MODx.config.manager_date_format
                },{
                    id: 'modx-user-gender'
                    ,name: 'gender'
                    ,hiddenName: 'gender'
                    ,fieldLabel: 'Пол'
                    ,xtype: 'modx-combo-gender'
                    ,width: 200
                }]
            },{
                columnWidth: .5
                ,defaults: {
                    msgTarget: 'under'
                }
                ,items: [{
                    id: 'modx-user-newpassword'
                    ,name: 'newpassword'
                    ,xtype: 'hidden'
                    ,value: false
                },{
                    id: 'modx-user-primary-group'
                    ,name: 'primary_group'
                    ,xtype: 'hidden'
                },{
                    id: 'modx-user-active'
                    ,name: 'active'
                    ,hideLabel: true
                    ,boxLabel: 'Активный'
                    ,description: _('user_active_desc')
                    ,xtype: 'xcheckbox'
                    ,inputValue: 1
                }/*,{
                    id: 'modx-user-sudo'
                    ,name: 'sudo'
                    ,hideLabel: true
                    ,boxLabel: _('user_sudo')
                    ,description: _('user_sudo_desc')
                    ,xtype: 'xcheckbox'
                    ,inputValue: 1
                    ,value: 0
                }*/,{
                    id: 'modx-user-blocked'
                    ,name: 'blocked'
                    ,hideLabel: true
                    ,boxLabel: 'Заблокирован'
                    ,description: _('user_block_desc')
                    ,xtype: 'xcheckbox'
                    ,inputValue: 1
                },{
                    id: 'modx-user-blockeduntil'
                    ,name: 'blockeduntil'
                    ,fieldLabel: 'Заблокирован до'
                    ,description: _('user_blockeduntil_desc')
                    ,xtype: 'xdatetime'
                    ,width: 300
                    ,timeWidth: 150
                    ,dateWidth: 150
                    ,allowBlank: true
                    ,dateFormat: MODx.config.manager_date_format
                    ,timeFormat: MODx.config.manager_time_format
                    ,hiddenFormat: 'Y-m-d H:i:s'
                },{
                    id: 'modx-user-blockedafter'
                    ,name: 'blockedafter'
                    ,fieldLabel: 'Заблокирован после'
                    ,description: _('user_blockedafter_desc')
                    ,xtype: 'xdatetime'
                    ,width: 300
                    ,timeWidth: 150
                    ,dateWidth: 150
                    ,allowBlank: true
                    ,dateFormat: MODx.config.manager_date_format
                    ,timeFormat: MODx.config.manager_time_format
                    ,hiddenFormat: 'Y-m-d H:i:s'
                },{
                    id: 'modx-user-logincount'
                    ,name: 'logincount'
                    ,fieldLabel: 'Количество входов'
                    ,description: _('user_logincount_desc')
                    ,xtype: 'statictextfield'
                },{
                    id: 'modx-user-lastlogin'
                    ,name: 'lastlogin'
                    ,fieldLabel: 'Последний вход'
                    ,description: _('user_prevlogin_desc')
                    ,xtype: 'statictextfield'
                },{
                    id: 'modx-user-failedlogincount'
                    ,name: 'failedlogincount'
                    ,fieldLabel: 'Ошибки входа'
                    ,description: _('user_failedlogincount_desc')
                    ,xtype: 'textfield'
                }/*,{
                    id: 'modx-user-class-key'
                    ,name: 'class_key'
                    ,fieldLabel: 'Ключ класса'
                    ,description: _('user_class_key_desc')
                     ,xtype: 'statictextfield'
                    ,anchor: '100%'
                    ,value: 'modUser'
                }*/,{
                    id: 'modx-user-comment'
                    ,name: 'comment'
                    ,fieldLabel: 'Комментарий'
                    ,xtype: 'textarea'
                    ,anchor: '100%'
                    ,grow: true
                },{
                    id: 'modx-user-fs-newpassword'
                    ,title: 'Новый пароль'
                    ,xtype: 'fieldset'
                    ,cls: 'x-fieldset-checkbox-toggle' // add a custom class for checkbox replacement
                    ,checkboxToggle: true
                    ,collapsed: (config.user ? true : false)
                    ,forceLayout: true
                    ,listeners: {
                        'expand': {fn:function(p) {
                            Ext.getCmp('modx-user-newpassword').setValue(true);
                            this.markDirty();
                        },scope:this}
                        ,'collapse': {fn:function(p) {
                            Ext.getCmp('modx-user-newpassword').setValue(false);
                            this.markDirty();
                        },scope:this}
                    }
                    ,items: [{
                        xtype: 'radiogroup'
                        ,fieldLabel: 'Метод оповещения о пароле:'
                        ,columns: 1
                        ,items: [{
                            id: 'modx-user-passwordnotifymethod-e'
                            ,name: 'passwordnotifymethod'
                            ,boxLabel: 'Выслать новый пароль на электронную почту.'
                            ,xtype: 'radio'
                            ,value: 'e'
                            ,inputValue: 'e'
                        },{
                            id: 'modx-user-passwordnotifymethod-s'
                            ,name: 'passwordnotifymethod'
                            ,boxLabel: 'Показать новый пароль на экране.'
                            ,xtype: 'radio'
                            ,value: 's'
                            ,inputValue: 's'
                            ,checked: true
                        }]
                    },{
                        xtype: 'radiogroup'
                        ,fieldLabel: 'Метод задания пароля:'
                        ,columns: 1
                        ,items: [{
                            id: 'modx-user-password-genmethod-g'
                            ,name: 'passwordgenmethod'
                            ,boxLabel:  'Позволить MODX сгенерировать пароль.'
                            ,xtype: 'radio'
                            ,inputValue: 'g'
                            ,value: 'g'
                            ,checked: true
                        },{
                            id: 'modx-user-password-genmethod-s'
                            ,name: 'passwordgenmethod'
                            ,boxLabel: 'Я укажу пароль сам:'
                            ,xtype: 'radio'
                            ,inputValue: 'spec'
                            ,value: 'spec'
                        }]
                    },{
                        id: 'modx-user-panel-newpassword'
                        ,xtype: 'panel'
                        ,layout: 'form'
                        ,border: false
                        ,autoHeight: true
                        ,style: 'padding-top: 15px' // nested form, add padding-top as the label will not have it
                        ,items: [{
                            id: 'modx-user-specifiedpassword'
                            ,name: 'specifiedpassword'
                            ,fieldLabel: 'Новый пароль'
                            ,xtype: 'textfield'
                            ,inputType: 'password'
                            ,anchor: '100%'
                        },{
                            id: 'modx-user-confirmpassword'
                            ,name: 'confirmpassword'
                            ,fieldLabel: 'Подтвердить пароль'
                            ,xtype: 'textfield'
                            ,inputType: 'password'
                            ,anchor: '100%'
                        }]
                    }]
                }]
            }]
        },{
            html: MODx.onUserFormRender
            ,border: false
        }];
    }
   
    });
Ext.reg('modx-panel-user',MODx.panel.User);

MODx.combo.Gender = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: new Ext.data.SimpleStore({
            fields: ['d','v']
            ,data: [['',0],[_('user_male'),1],[_('user_female'),2],[_('user_other'),3]]
        })
        ,displayField: 'd'
        ,valueField: 'v'
        ,mode: 'local'
        ,triggerAction: 'all'
        ,editable: false
        ,selectOnFocus: false
    });
    MODx.combo.Gender.superclass.constructor.call(this,config);
};
Ext.extend(MODx.combo.Gender,Ext.form.ComboBox);
Ext.reg('modx-combo-gender',MODx.combo.Gender);


  