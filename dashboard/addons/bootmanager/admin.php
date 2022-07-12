<?php

$this->on('admin.init', function() {

    if ($this->module('yxorp')->hasaccess('bootmanager', 'manage')) {

        // bind admin routes
        $this->bindClass('Bootmanager\\Controller\\Admin', 'bootmanager');

        // add settings entry
        $this->on('yxorp.view.settings.item', function () {
            $this->renderView('bootmanager:views/partials/settings.php');
        });

    }

});
