tgwhaicons.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'tgwhaicons-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('tgwhaicons_items'),
                layout: 'anchor',
                items: [{
                    html: _('tgwhaicons_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'tgwhaicons-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    tgwhaicons.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(tgwhaicons.panel.Home, MODx.Panel);
Ext.reg('tgwhaicons-panel-home', tgwhaicons.panel.Home);
