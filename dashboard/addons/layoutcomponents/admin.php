<?php $app->on('admin.init', function () {
    $this->bindClass('LayoutComponents\\Controller\\Admin', 'layout-components');
    $this->on('yxorp.view.settings.item', function () {
        $this->renderView("layoutcomponents:views/partials/settings-link.php");
    });
    $this->on('app.layout.header', function () {
        if ($file = $this->path('#storage:components.json')) {
            $content = @file_get_contents($file);
            if (!$content) {
                return;
            } ?>
            <script>
                window.CP_LAYOUT_COMPONENTS = App.$.extend(window.CP_LAYOUT_COMPONENTS || {}, <?=$content?>);
            </script>
        <?php }
    });
});