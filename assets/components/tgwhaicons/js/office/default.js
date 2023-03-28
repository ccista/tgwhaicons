Ext.onReady(function () {
    tgwhaicons.config.connector_url = OfficeConfig.actionUrl;

    var grid = new tgwhaicons.panel.Home();
    grid.render('office-tgwhaicons-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});