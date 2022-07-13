<?php $this->on('admin.init', function () {
    if ($this->module('yxorp')->hasaccess('bootmanager', 'manage')) {
        $this->bindClass('Bootmanager\\Controller\\Admin', 'bootmanager');
        $this->on('yxorp.view.settings.item', function () {
            $this->renderView('bootmanager:views/partials/settings.php');
        });
    }
});