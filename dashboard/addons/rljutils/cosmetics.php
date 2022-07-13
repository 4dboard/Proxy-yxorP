<?php $this->on('admin.init', function () use ($cosmetics) {
    if (!empty($cosmetics['widgets_timer_disabled'])) {
        $this->on('admin.dashboard.widgets', function ($widgets) {
            foreach ($widgets as $key => $widget) {
                if ($widget['name'] == 'time') {
                    unset($widgets[$key]);
                    break;
                }
            }
        }, 0);
    }
    if (!empty($cosmetics['entry_default_group_main'])) {
        $this->on('collections.entry.aside', function () {
            echo '<span if="{ group === \'\' && !(group = \'Main\') }" class="">test</span>';
        });
    }
    if (!empty($cosmetics['entry_language_buttons'])) {
        $this->on('collections.entry.aside', function () {
            $this->renderView($this->path('rljutils:views/partials/entry_language_buttons.php'));
        });
        $this->on('singletons.form.aside', function () {
            $this->renderView($this->path('rljutils:views/partials/singletons_language_buttons.php'));
        });
    }
    if (!empty($cosmetics['wysiwyg_entity_encoding_raw'])) {
        $this->on('app.layout.header', function () {
            echo '<script>App.$(document).on("init-wysiwyg-editor", function(e, editor) {editor.settings.entity_encoding = "raw";});</script>';
        });
    }
    if (!empty($cosmetics['dark_mode_switch'])) {
        $this->bind('/darkmode/toggle', function () {
            $user_id = $this->module('yxorp')->getUser('_id');
            $on = $this->storage->getKey('yxorp/options', 'darkmode.' . $user_id, false);
            $this->storage->setKey('yxorp/options', 'darkmode.' . $user_id, !$on);
            return ['darkmode' => !$on];
        });
        $user_id = $this->module('yxorp')->getUser('_id');
        $on = $this->storage->getKey('yxorp/options', 'darkmode.' . $user_id, false);
        if ($on) {
            $this('admin')->addassets('rljutils:DarkMode/assets/style.min.css');
            $this('admin')->addassets('rljutils:DarkMode/assets/darkmode.js');
        }
        $this->on('yxorp.menu.system', function () {
            $user_id = $this->module('yxorp')->getUser('_id');
            $on = $this->storage->getKey('yxorp/options', 'darkmode.' . $user_id, false);
            $style_url = $this->pathToUrl('rljutils:DarkMode/assets/style.min.css', true);
            $script_url = $this->pathToUrl('rljutils:DarkMode/assets/darkmode.js', true);
            $this->renderView('rljutils:DarkMode/views/partials/menu_toggle.php', compact('on', 'style_url', 'script_url'));
        });
    }
    if (!empty($cosmetics['display_sortable_entries'])) {
        $this('admin')->addassets('rljutils:assets/display_sortable_entries.css');
    }
});