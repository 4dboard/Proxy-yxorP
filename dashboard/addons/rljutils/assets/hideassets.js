// hide assets link in app header dropdown menu
App.$('document').ready(function () {

    App.$('.app-header a[href$="/assetsmanager"]').parent().hide();

});
