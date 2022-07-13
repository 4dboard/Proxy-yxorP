<?php
/**
 * Some utilities for yxorP CMS
 *
 * When using yxorP with multiple users, it needs some customization.
 * By default, some helper functions bypass the user group access control lists,
 * so they definitely need some adjustments. This addon also adds some UI tweaks
 * and helpers.
 *
 * @see       https://github.com/raffaelj/yxorp_rljUtils
 * @see       https://github.com/agentejo/yxorp/
 *
 * @version   0.1.4
 * @author    Raffael Jesche
 * @license   MIT
 */

$this->module('rljutils')->extend([

    'getConfig' => function () {

        static $config;

        if (isset($config)) return $config;

        $config = [
            'hardening' => [
                'allowed_uploads' => true,
                'max_upload_size' => true,
                'collections_find' => true,
                'collections_tree' => true,
                'collections_collections' => true,
                'accounts_find' => true,
                'assetsmanager' => true,
                'disable_getLinkedOverview' => true,
            ],
            'cosmetics' => [
                'widgets_timer_disabled' => true,
                'entry_default_group_main' => true,
                'entry_language_buttons' => true,
                'wysiwyg_entity_encoding_raw' => true,
                'dark_mode_switch' => true,
                'display_sortable_entries' => true,
            ],
            'helpers' => [
                'locked_entries_disabled' => false,
            ],
        ];

        return array_replace_recursive(
            $config,
            $this->app->storage->getKey('yxorp/options', 'rljutils', []),
            $this->app->retrieve('rljutils', [])
        );

    },

]);

// add "assets" to yxorp acl
$actions = $this('acl')->getResources()['yxorp'];
$actions[] = 'assets';

$this('acl')->addResource('yxorp', $actions);

// set some config variables
$config = $this->module('rljutils')->getConfig();
$hardening = $config['hardening'];
$cosmetics = $config['cosmetics'];
$helpers = $config['helpers'];

$this->on('admin.init', function () use ($hardening) {

    if (!empty($hardening['allowed_uploads'])) {

        if (!$this->module('yxorp')->getGroupVar('assets.allowed_uploads', $this->retrieve('allowed_uploads'))) {

            $this->set('allowed_uploads', 'jpg, jpeg, png, gif, svg, pdf, ods, odt, doc, docx, xls, xlsx');

        }

    }

    if (!empty($hardening['max_upload_size'])) {

        // set max_upload_size to 4MB
        if (!$this->module('yxorp')->getGroupVar('assets.max_upload_size', $this->retrieve('max_upload_size'))) {

            $this->set('max_upload_size', 4 << 20);

        }

    }

});

if (YXORP_ADMIN && !YXORP_API_REQUEST) {
    include_once(__DIR__ . '/admin.php');
    include_once(__DIR__ . '/cosmetics.php');
    include_once(__DIR__ . '/helpers.php');
}

// CLI
if (YXORP_CLI) {
    $this->path('#cli', __DIR__ . '/cli');
}
