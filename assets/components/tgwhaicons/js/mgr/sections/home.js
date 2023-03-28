tgwhaicons.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'tgwhaicons-panel-home',
            renderTo: 'tgwhaicons-panel-home-div'
        }]
    });
    tgwhaicons.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(tgwhaicons.page.Home, MODx.Component);
Ext.reg('tgwhaicons-page-home', tgwhaicons.page.Home);