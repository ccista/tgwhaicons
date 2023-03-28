var tgwhaicons = function (config) {
    config = config || {};
    tgwhaicons.superclass.constructor.call(this, config);
};
Ext.extend(tgwhaicons, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('tgwhaicons', tgwhaicons);

tgwhaicons = new tgwhaicons();