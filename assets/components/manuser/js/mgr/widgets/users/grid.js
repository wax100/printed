MODx.panel.Users = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'modx-panel-users'
		,cls: 'container'
        ,bodyStyle: ''
        ,defaults: { collapsible: false ,autoHeight: true }
        ,items: [{
            html: '<h2>Пользователи</h2>'
            ,border: false
            ,id: 'modx-users-header'
            ,cls: 'modx-page-header'
            },{
            layout: 'form'
            ,items: [{
                html: '<p>Управление зарегистрированными Пользователями. '
				,bodyCssClass: 'panel-desc'
                ,border: false
            },{
                xtype: 'modx-grid-user'
				,cls:'main-wrapper'
                ,preventRender: true
            }]
        }]
    });
    MODx.panel.Users.superclass.constructor.call(this,config);
};
Ext.extend(MODx.panel.Users,MODx.FormPanel);
Ext.reg('modx-panel-users',MODx.panel.Users);


MODx.grid.User = function(config) {
    config = config || {};

    this.sm = new Ext.grid.CheckboxSelectionModel();
    Ext.applyIf(config,{
        url: config.url || MODx.config.base_url+'core/components/manuser/connectors/index.php'
        ,baseParams: {
           action: 'mgr/users/getlist'
            ,usergroup: MODx.request['usergroup'] ? MODx.request['usergroup'] : ''
        }
        ,fields: ['id','username','fullname','email','gender','blocked','role','active','cls']
        ,paging: true
        ,autosave: true
        ,save_action: 'mgr/users/updatefromgrid'
        ,remoteSort: true
        ,viewConfig: {
            forceFit:true
            ,enableRowBody:true
            ,scrollOffset: 0
            ,autoFill: true
            ,showPreview: true
            ,getRowClass : function(rec){
                return rec.data.active ? 'grid-row-active' : 'grid-row-inactive';
            }
        }
        ,sm: this.sm
        ,columns: [this.sm,{
            header: _('id')
            ,dataIndex: 'id'
            ,width: 50
            ,sortable: true
        },{
            header: _('name')
            ,dataIndex: 'username'
            ,width: 150
            ,sortable: true
            ,renderer: function(value, p, record){
                return String.format('<a href="?a=update&namespace=manuser&id={0}" title="{1}" class="x-grid-link">{2}</a>', record.id, _('user_update'), Ext.util.Format.htmlEncode( value ) );
            }
        },{
            header: 'Полное имя'
            ,dataIndex: 'fullname'
            ,width: 180
            ,sortable: true
            ,editor: { xtype: 'textfield' }
            ,renderer: Ext.util.Format.htmlEncode
        },{
            header: _('email')
            ,dataIndex: 'email'
            ,width: 180
            ,sortable: true
            ,editor: { xtype: 'textfield' }
        },{
            header:  _('email')
            ,dataIndex: 'active'
            ,width: 80
            ,sortable: true
            ,editor: { xtype: 'combo-boolean', renderer: 'boolean' }
        },{
            header:  'Заблокирован'
            ,dataIndex: 'blocked'
            ,width: 80
            ,sortable: true
            ,editor: { xtype: 'combo-boolean', renderer: 'boolean' }
        }]
        ,tbar: [{
            text: 'Новый пользователь'
            ,handler: this.createUser
            ,scope: this
            ,cls:'primary-button'
        },{
            text: _('bulk_actions')
            ,menu: [{
                text: _('selected_activate')
                ,handler: this.activateSelected
                ,scope: this
            },{
                text: _('selected_deactivate')
                ,handler: this.deactivateSelected
                ,scope: this
            },{
                text: _('selected_remove')
                ,handler: this.removeSelected
                ,scope: this
            }]
        },'->',{
            xtype: 'modx-combo-usergroup'
            ,name: 'usergroup'
            ,id: 'modx-user-filter-usergroup'
            ,itemId: 'usergroup'
            ,emptyText: _('user_group')+'...'
             ,url: config.url || MODx.config.base_url+'core/components/manuser/connectors/index.php'
            ,baseParams: {
                action: 'mgr/group/getlist'
                ,addAll: true
            }
            ,value: MODx.request['usergroup'] ? MODx.request['usergroup'] : ''
            ,width: 200
            ,listeners: {
                'select': {fn:this.filterUsergroup,scope:this}
            }
        },{
            xtype: 'textfield'
            ,name: 'search'
            ,id: 'modx-user-search'
            ,cls: 'x-form-filter'
            ,emptyText: _('search_ellipsis')
            ,listeners: {
                'change': {fn: this.search, scope: this}
                ,'render': {fn: function(cmp) {
                    new Ext.KeyMap(cmp.getEl(), {
                        key: Ext.EventObject.ENTER
                        ,fn: this.blur
                        ,scope: cmp
                    });
                },scope:this}
            }
        },{
            xtype: 'button'
            ,id: 'modx-filter-clear'
            ,cls: 'x-form-filter-clear'
            ,text: _('filter_clear')
            ,listeners: {
                'click': {fn: this.clearFilter, scope: this}
            }
        }]
    });
    MODx.grid.User.superclass.constructor.call(this,config);
    this.on('afterAutoSave', function(result) {
        if (!result.success) {
            var msg = result.data[0].msg || _('user_err_save');
            MODx.msg.alert(_('error'), msg);
        }
    });
};

MODx.grid.User = function(config) {
    config = config || {};
    
    this.sm = new Ext.grid.CheckboxSelectionModel();
    Ext.applyIf(config,{
        url: config.url || MODx.config.base_url+'core/components/manuser/connectors/index.php'
        ,baseParams: {
           action: 'mgr/users/getlist'
            ,usergroup: MODx.request['usergroup'] ? MODx.request['usergroup'] : ''
        }
        ,fields: ['id','username','fullname','email','gender','blocked','role','active','cls']
        ,paging: true
        ,autosave: true
        ,save_action: 'security/user/updatefromgrid'
        ,remoteSort: true
        ,viewConfig: {
            forceFit:true
            ,enableRowBody:true
            ,scrollOffset: 0
            ,autoFill: true
            ,showPreview: true
            ,getRowClass : function(rec){
                return rec.data.active ? 'grid-row-active' : 'grid-row-inactive';
            }
        }
        ,sm: this.sm
        ,columns: [this.sm,{
            header: _('id')
            ,dataIndex: 'id'
            ,width: 50
            ,sortable: true
        },{
            header:   _('name')
            ,dataIndex: 'username'
            ,width: 150
            ,sortable: true
            ,renderer: function(value, p, record){
                return String.format('<a href="?a=update&namespace=manuser&id={0}" title="{1}" class="x-grid-link">{2}</a>', record.id, _('user_update'), Ext.util.Format.htmlEncode( value ) );
            }
        },{
            header: 'Полное имя'
            ,dataIndex: 'fullname'
            ,width: 180
            ,sortable: true
            ,editor: { xtype: 'textfield' }
            ,renderer: Ext.util.Format.htmlEncode
        },{
            header: _('email')
            ,dataIndex: 'email'
            ,width: 180
            ,sortable: true
            ,editor: { xtype: 'textfield' }
        },{
            header: 'Активный'
            ,dataIndex: 'active'
            ,width: 80
            ,sortable: true
            ,editor: { xtype: 'combo-boolean', renderer: 'boolean' }
        },{
            header: 'Заблокирован'
            ,dataIndex: 'blocked'
            ,width: 80
            ,sortable: true
            ,editor: { xtype: 'combo-boolean', renderer: 'boolean' }
        }]
        ,tbar: [{
            text: 'Новый пользователь'
            ,handler: this.createUser
            ,scope: this
            ,cls:'primary-button'
        },{
            text: _('bulk_actions')
            ,menu: [{
                text: _('selected_activate')
                ,handler: this.activateSelected
                ,scope: this
            },{
                text: _('selected_deactivate')
                ,handler: this.deactivateSelected
                ,scope: this
            },{
                text: _('selected_remove')
                ,handler: this.removeSelected
                ,scope: this
            }]
        },'->',{
            xtype: 'modx-combo-usergroup'
            ,name: 'usergroup'
            ,id: 'modx-user-filter-usergroup'
            ,itemId: 'usergroup'
            ,emptyText: _('user_group')+'...'
            ,url: config.url || MODx.config.base_url+'core/components/manuser/connectors/index.php'
            ,baseParams: {
                action: 'mgr/group/getlist'
                ,addAll: true
            }
            ,value: MODx.request['usergroup'] ? MODx.request['usergroup'] : ''
            ,width: 200
            ,listeners: {
                'select': {fn:this.filterUsergroup,scope:this}
            }
        },{
            xtype: 'textfield'
            ,name: 'search'
            ,id: 'modx-user-search'
            ,cls: 'x-form-filter'
            ,emptyText: _('search_ellipsis')
            ,listeners: {
                'change': {fn: this.search, scope: this}
                ,'render': {fn: function(cmp) {
                    new Ext.KeyMap(cmp.getEl(), {
                        key: Ext.EventObject.ENTER
                        ,fn: this.blur
                        ,scope: cmp
                    });
                },scope:this}
            }
        },{
            xtype: 'button'
            ,id: 'modx-filter-clear'
            ,cls: 'x-form-filter-clear'
            ,text: _('filter_clear')
            ,listeners: {
                'click': {fn: this.clearFilter, scope: this}
            }
        }]
    });
    MODx.grid.User.superclass.constructor.call(this,config);
    this.on('afterAutoSave', function(result) {
        if (!result.success) {
            var msg = result.data[0].msg || _('user_err_save');
            MODx.msg.alert(_('error'), msg);
        }
    });
};
Ext.extend(MODx.grid.User,MODx.grid.Grid,{
    getMenu: function() {
        var r = this.getSelectionModel().getSelected();
        var p = r.data.cls;

        var m = [];
        if (this.getSelectionModel().getCount() > 1) {
            m.push({
                text: _('selected_activate')
                ,handler: this.activateSelected
                ,scope: this
            });
            m.push({
                text: _('selected_deactivate')
                ,handler: this.deactivateSelected
                ,scope: this
            });
            m.push('-');
            m.push({
                text: _('selected_remove')
                ,handler: this.removeSelected
                ,scope: this
            });
        } else {
            if (p.indexOf('pupdate') != -1) {
                m.push({
                    text: 'Редактировать'
                    ,handler: this.updateUser
                });
            }
            if (p.indexOf('pcopy') != -1) {
                if (m.length > 0) m.push('-');
                m.push({
                    text: 'Копировать'
                    ,handler: this.duplicateUser
                });
            }
            if (p.indexOf('premove') != -1) {
                if (m.length > 0) m.push('-');
                m.push({
                    text: 'Удалить'
                    ,handler: this.removeUser
                });
            }
        }
        if (m.length > 0) {
            this.addContextMenuItem(m);
        }
    }

    ,createUser: function() {
        MODx.loadPage('create&namespace=manuser');
    }

    ,activateSelected: function() {
        var cs = this.getSelectedAsList();
        if (cs === false) return false;

        MODx.Ajax.request({
            url: this.config.url
            ,params: {
                action: 'security/user/activateMultiple'
                ,users: cs
            }
            ,listeners: {
                'success': {fn:function(r) {
                    this.getSelectionModel().clearSelections(true);
                    this.refresh();
                },scope:this}
            }
        });
        return true;
    }
    ,deactivateSelected: function() {
        var cs = this.getSelectedAsList();
        if (cs === false) return false;

        MODx.Ajax.request({
            url: this.config.url
            ,params: {
                action: 'security/user/deactivateMultiple'
                ,users: cs
            }
            ,listeners: {
                'success': {fn:function(r) {
                    this.getSelectionModel().clearSelections(true);
                    this.refresh();
                },scope:this}
            }
        });
        return true;
    }
    ,removeSelected: function() {
        var cs = this.getSelectedAsList();
        if (cs === false) return false;

        MODx.msg.confirm({
            title: _('user_remove_multiple')
            ,text: _('user_remove_multiple_confirm')
            ,url: this.config.url
            ,params: {
                action: 'security/user/removeMultiple'
                ,users: cs
            }
            ,listeners: {
                'success': {fn:function(r) {
                    this.getSelectionModel().clearSelections(true);
                    this.refresh();
                },scope:this}
            }
        });
        return true;
    }

    ,removeUser: function() {
        MODx.msg.confirm({
            title: _('user_remove')
            ,text: 'Вы уверены, что хотите навсегда удалить этого пользователя?'
            ,url: this.config.url
            ,params: {
                action: 'security/user/delete'
                ,id: this.menu.record.id
            }
            ,listeners: {
                'success': {fn:this.refresh,scope:this}
            }
        });
    }

    ,duplicateUser: function() {
        MODx.Ajax.request({
            url: this.config.url
            ,params: {
                action: 'security/user/duplicate'
                ,id: this.menu.record.id
            }
            ,listeners: {
                'success': {fn:this.refresh,scope:this}
            }
        });
    }

    ,updateUser: function() {
        MODx.loadPage('update&namespace=manuser', 'id='+this.menu.record.id);
    }

    ,rendGender: function(d,c) {
        switch(d.toString()) {
            case '0':
                return '-';
            case '1':
                return _('male');
            case '2':
                return _('female');
        }
    }

    ,filterUsergroup: function(cb,nv,ov) {
        this.getStore().baseParams.usergroup = Ext.isEmpty(nv) || Ext.isObject(nv) ? cb.getValue() : nv;
        this.getBottomToolbar().changePage(1);
        this.refresh();
        return true;
    }
    ,search: function(tf,newValue,oldValue) {
        var nv = newValue || tf;
        this.getStore().baseParams.query = Ext.isEmpty(nv) || Ext.isObject(nv) ? '' : nv;
        this.getBottomToolbar().changePage(1);
        return true;
    }
    ,clearFilter: function() {
        this.getStore().baseParams = {
             action: 'mgr/users/getlist'
        };
        
        Ext.getCmp('modx-user-search').reset();
        Ext.getCmp('modx-user-filter-usergroup').reset();
        this.getBottomToolbar().changePage(1);
        this.refresh();
    }
});
Ext.reg('modx-grid-user',MODx.grid.User);

MODx.window.updateUser = function(config) {
    config = config || {};
    console.log(config);
    this.ident = config.ident || 'meuitem'+Ext.id();
    Ext.applyIf(config,{
        title: 'Редактировать СТО'
        ,id: 'modx-window-user-update'
        ,closable:false
        ,maximizable: false
        ,collapsible:false
        ,resizable: false
        ,width: 900
        ,labelAlign: 'top'
        ,url: MODx.config.base_url+'core/components/crashfix/connectors/index.php'
        ,baseParams: {
            action: 'mgr/user/getlist'
            ,id: config.id
        },
        buttons: [{
            text: 'Закрыть',
            handler: function(){
                Ext.getCmp('modx-window-user-update').close();
                Ext.getCmp('modx-users-grid').refresh();
            }}]
            ,fields: {
                xtype: 'modx-tabs'
                ,activeTab: config.activeTab || 0
                ,bodyStyle: { background: 'transparent'}
                ,deferredRender: false
                ,autoHeight: true
                ,stateful: true
                ,stateId: 'modx-window-user-update'
                ,stateEvents: ['tabchange']
                ,getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};}
                //,listeners: MODx.combo.listeners_disable
                ,items: [{
                    title: 'Информация'
                    ,id: 'user_info'
                    ,hideMode: 'offsets'
                    //,bodyStyle: 'padding:5px 0;'
                    ,defaults: {msgTarget: 'under',border: false}
                    ,items: this.getAddressFields(config)
                    ,bbar: [{
                        xtype: 'tbfill'
                        },{
                        xtype: 'button'
                        ,buttonAlign:'right'
                        ,style: 'margin-right: 50px;'
                        ,text : 'Сохранить'
                        ,listeners: {
                            click: function() {
                            var parent = Ext.get("user_info");
                            var elems = parent.select(".x-form-invalid").elements;
                            if(elems.length>0){
                                return;
                            }
                                saveUser(config.record);
                            },
                        }
                    }]
                    }/*,{
                    xtype: 'new-orders-products'
                    ,title: 'Товары'
                    ,id: 'new-orders-products'
                    ,order_id: config.record.order_id
                    ,item_id: config.record.id
                    ,activeTab : 2
                    ,orderDisabled: disabled
                    ,grid : 'modx-products-grid'
                    },{
                    layout: 'form'
                    ,title: 'Адрес'
                    ,hideMode: 'offsets'
                    ,bodyStyle: 'padding:5px 0;'
                    ,defaults: {msgTarget: 'under',border: false}
                    ,items: this.getAddressFields(config)
                    ,id: 'new-orders-address'
                    ,bbar: [{
                        xtype: 'tbfill'
                        },{
                        xtype: 'button'
                        ,buttonAlign:'right'
                        ,disabled: disabled
                        ,text : 'Сохранить'
                        ,listeners: {
                            click: function() {
                                saveOrder(config.record,2);
                                Ext.getCmp('new-orders-history').refresh();
                            },
                        }
                    }]
                    },{
                    xtype: 'new-orders-history'
                    ,id:  'new-orders-history'
                    ,title: 'История'
                    ,order: config.record.order_id
                    ,orderDisabled: disabled
                    ,item_id: 0
                    ,activeTab : 3
                }*/]
            }
    });
    MODx.window.updateUser.superclass.constructor.call(this,config);
};
Ext.extend(MODx.window.updateUser,MODx.Window,{
    getAddressFields: function(config) {
        return [{
            layout: 'column'
            ,defaults: {msgTarget: 'under',border: false}
            ,items: [{
                columnWidth: .9
                ,layout: 'form'
                ,items: 
                    [{
                        xtype: 'displayfield'
                        ,fieldLabel: 'Если хотя быодно поле, подчеркнутые красным, то изменения НЕ СОХРАНЯТСЯ!'
                        ,anchor: '100%'
                        ,labelStyle: "color:red;"
                    }]
            }]
            },{
            layout: 'column'
            ,defaults: {msgTarget: 'under',border: false}
            ,items: [{
                columnWidth: .07
                ,layout: 'form'
                ,items: 
                    [{
                        xtype: 'displayfield'
                        ,id: 'id'
                        ,name: 'id'
                        ,fieldLabel: 'Id Сто'
                        ,anchor: '100%'
                    }]
                },{
                columnWidth: .35
                ,layout: 'form'
                ,items: 
                    [{
                        xtype: 'textfield'
                        ,id: 'fullname'
                        ,name: 'fullname'
                        ,fieldLabel: 'Название СТО'
                        ,anchor: '100%'
                        ,allowBlank: false
                    }]
                },{
                columnWidth: .25
                ,layout: 'form'
                ,items: 
                    [{
                        xtype: 'textfield'
                        ,id: 'urface'
                        ,name: 'urface'
                        ,fieldLabel: 'Юр. лицо'
                        ,anchor: '100%'
                        ,allowBlank: false
                    }]
                },{
                columnWidth: .15
                ,layout: 'form'
                ,items: 
                    [{
                        xtype: 'textfield'
                        ,id: 'phone'
                        ,name: 'phone'
                        ,fieldLabel: 'Телефон'
                        ,anchor: '100%'
                        ,allowBlank: false
                    }]
                },{
                columnWidth: .15
                ,layout: 'form'
                ,items: [{
                    xtype: 'modx-combo-yesno'
                    //,renderer: 'boolean'
                    ,id: 'phoneActive'
                    ,name: 'phoneActive'
                    ,fieldLabel: 'Активирован?'
                    ,anchor: '100%'
                }]
            }]
            },{
            layout: 'column'
            ,defaults: {msgTarget: 'under',border: false}
            ,items: [{
                columnWidth: .20
                ,layout: 'form'
                ,items: [{
                    xtype: 'textfield'
                    ,id: 'email'
                    ,name: 'email'
                    ,fieldLabel: 'E-mail'
                    ,anchor: '100%'
                    ,allowBlank: false
                }]
                },{
                columnWidth: .25
                ,layout: 'form'
                ,items: [{
                    xtype: 'textfield'
                    ,id: 'city'
                    ,name: 'city'
                    ,fieldLabel: 'Город'
                    ,anchor: '100%'
                    ,allowBlank: false
                }]
                },{
                columnWidth: .25
                ,layout: 'form'
                ,items: [{
                    xtype: 'textfield'
                    ,id: 'inn'
                    ,name: 'inn'
                    ,fieldLabel: 'ИНН'
                    ,anchor: '100%'
                    ,allowBlank: true 
                    ,minValue: 0
                    ,minLength  : 10
                    ,maxLength  : 13
                    ,allowDecimals: false
                }]
                },{
                columnWidth: .25
                ,layout: 'form'
                ,items: [{
                    xtype: 'textfield'
                    ,id: 'kpp'
                    ,name: 'kpp'
                    ,fieldLabel: 'КПП'
                    ,anchor: '100%'
                    ,allowBlank: true
                    ,minValue: 0
                    ,maxLength  : 9
                    ,minLength  : 9
                    ,allowDecimals: false
                }]
            }]
            },{
            layout: 'column'
            ,defaults: {msgTarget: 'under',border: false}
            ,items: [{
                columnWidth: .15
                ,layout: 'form'
                ,items: [{
                    xtype: 'displayfield'
                    ,id: 'fax'
                    ,name: 'fax'
                    ,fieldLabel: 'Счет (руб.)'
                    ,anchor: '100%'
                    ,minValue: 0
                    ,allowDecimals: true
                    ,allowBlank: false
                }]
            },/*{
                columnWidth: .15
                ,layout: 'form'
                ,items: [{
                    xtype: 'numberfield'
                    ,id: 'zip'
                    ,name: 'zip'
                    ,fieldLabel: 'Тариф'
                    ,anchor: '100%'
                    ,minValue:1
                    ,allowDecimals: false
                    ,allowBlank: false
                }]
                },{
                columnWidth: .20
                ,layout: 'form'
                ,items: [{
                    xtype: 'textfield'
                    ,id: 'comment'
                    ,name: 'comment'
                    ,fieldLabel: 'Осталось заявок'
                    ,anchor: '100%'
                    ,minValue:0
                    ,allowBlank: false
                }]
                },*/{
                columnWidth: .25
                ,layout: 'form'
                ,items: [{
                    xtype: 'displayfield'
                    ,id: 'photo'
                    ,name: 'photo'
                    ,fieldLabel: 'Дата регистрации'
                    ,anchor: '100%'
                }]
                },{
                columnWidth: .20
                ,layout: 'form'
                ,items: [{
                    xtype: 'modx-combo-yesno'
                    ,id: 'gender'
                    ,name: 'gender'
                    ,fieldLabel: 'Активен?'
                    ,anchor: '100%'
                }]
            }]
        }];
    }
});
Ext.reg('modx-window-user-update',MODx.window.updateUser);

MODx.combo.YesNo = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: new Ext.data.ArrayStore({
            id: 'phoneActive'
            ,fields: ['phoneActive','title']
            ,data: [
            ['0','Нет']
            ,['1','Да']
            ]
        })
        ,mode: 'local'
        ,width: 50
        ,listWidth: 110
        ,displayField: 'title'
        ,valueField: 'phoneActive'
        ,hiddenName: 'extended.phoneActive'
        ,triggerAction: 'all'
        ,renderer: comboRenderer
        ,listeners: {
            'success':  {render: {fn: function(tf) {},scope: this}},
            'click':  {render: {fn: function(tf) {},scope: this}}
        }
    });
    MODx.combo.YesNo.superclass.constructor.call(this,config);
};
Ext.extend(MODx.combo.YesNo,MODx.combo.ComboBox);
Ext.reg('modx-combo-yesno',MODx.combo.YesNo);


function comboRenderer(value, metaData, record, rowIndex, colIndex, store) {
    var opValue = value;
    console.log(record.data);
    switch(record.data.currency_isactive){
        case 1:
        case "1":
        opValue = 'Да';
        break;
        case 0:
        case "0":
        opValue = 'Нет';
        break;
        default:
        break;
    }
    //  return this.tplPublished.apply(record.data.currency_isactive);
    return opValue;
}

//измененеие инфы о заказе массив информации, с какой закладки отправлено
function saveUser(data){
    
    
    var dataArr = {};
        //сохранение 1й вкладки: цена, валюта, статус, коммент
        dataArr['fullname'] = Ext.getCmp('fullname').getValue();
        dataArr['phone'] = Ext.getCmp('phone').getValue();
        dataArr['phoneActive'] = Ext.getCmp('phoneActive').getValue();
        dataArr['email'] = Ext.getCmp('email').getValue();
        dataArr['city'] = Ext.getCmp('city').getValue();
        dataArr['inn'] = Ext.getCmp('inn').getValue();
        dataArr['kpp'] = Ext.getCmp('kpp').getValue();
        dataArr['fax'] = Ext.getCmp('fax').getValue();
        //dataArr['zip'] = Ext.getCmp('zip').getValue();
        //dataArr['comment'] = Ext.getCmp('comment').getValue();
        dataArr['gender'] = Ext.getCmp('gender').getValue();
        dataArr['urface'] = Ext.getCmp('urface').getValue();
        
    var dataJs = JSON.stringify(dataArr);
    
    Ext.MessageBox.show({
        title:'Сохранение',
        msg: 'Сохранение данных, пожалуйста подождите...',
        progressText: 'Сохранение...',
        width:300,
        wait:true,
        waitConfig: {interval:200},
        animateTarget: 'waitButton'
    });
    /*setTimeout(function(){
        Ext.MessageBox.hide();
        Ext.example.msg('Done', 'data saved!');
    }, 8000);*/
    MODx.Ajax.request({
        url: MODx.config.base_url+'core/components/crashfix/connectors/index.php'
        ,method: 'POST'
        ,params: {
            action: 'mgr/users/save'
            ,id: data.id
            ,data : dataJs
        }
        ,listeners: {
            success: {fn:function(r) {
                Ext.MessageBox.hide();
            },scope:this}
        }
    });
}

