/* A jQuery function that waits for the DOM to be ready before executing the code inside the function. */
App.$('document').ready(function () {

    /* Hiding the Assets Manager link in the header. */
    App.$('.app-header a[href$="/assetsmanager"]').parent().hide();

});
