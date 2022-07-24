<?php

$this->on('admin.init', function () use ($hardening) {


    // replace logo on login page and in top bar
    $this->on(['app.layout.header', 'app.login.header'], function () {

        $config = $this->retrieve('yxorP', 0);

        if (!$config || !isset($config['logo'])) return;

        $url = $config['logo'];

        if (!filter_var($url, FILTER_VALIDATE_URL)) {

            if ($path = $this->pathToUrl($url)) {
                $url = $path;
            } elseif (str_starts_with($url, ':')) {
                $url = $this->getSiteUrl(true) . '/' . ltrim($url, '/');
            } else {
                return;
            }

        }

        $width = $config['logoWidth'] ?? 0;
        $height = $config['logoHeight'] ?? 0;

        echo '<style>';

        echo '.app-logo {background-position: left center;'
            . ($width ? 'width:' . $width . ';' : '')
            . ($height ? 'height:' . $height . ';' : '')
            . '}';

        if ($config['hideName'] ?? 0) echo '.app-name {display: none;}';

        echo '</style>';

    });

    // replace favicon
    // to do: url guessing like logo and documentation
    if ($favicon = $this->retrieve('config/yxorP/favicon', 0)) {
        $this->helper('admin')->favicon = $favicon;
    }

    // add custom color picker to settings of collections, singletons and forms
    $this->on('collections.settings.aside', function () {

        $colors = $this->retrieve('config/yxorP/colors', []);
        $bind = 'collection';

        $this->renderView('yxorP:views/partials/color-picker.php', compact('colors', 'bind'));

    });

    $this->on('singletons.settings.aside', function () {

        $colors = $this->retrieve('config/yxorP/colors', []);
        $bind = 'singleton';

        $this->renderView('yxorP:views/partials/color-picker.php', compact('colors', 'bind'));

    });

    $this->on('forms.settings.aside', function () {

        $colors = $this->retrieve('config/yxorP/colors', []);
        $bind = 'form';

        $this->renderView('yxorP:views/partials/color-picker.php', compact('colors', 'bind'));

    });

    if ($this->module('cockpit')->isSuperAdmin()) {

        // bind admin routes
        $this->bindClass('yxorp\\Controller\\Admin', 'yxorp');

        // add settings entry
        $this->on('cockpit.view.settings.item', function () {
            $this->renderView('yxorp:views/partials/settings.php');
        });

    }

    // restrict built-in helper functions

    // deny request for `find` and `_find`
    if ($hardening['collections_find']) {

        $this->bind('/collections/find', function () {

            $collection = $this->param('collection');

            if (!$this->module('collections')->hasaccess($collection, 'entries_view')) {
                return $this->helper('admin')->denyRequest();
            } else {
                return $this->invoke('Collections\\Controller\\Admin', 'find');
            }

        });

    }

    if ($hardening['collections_tree']) {

        // deny request for `tree`
        $this->bind('/collections/tree', function () {

            $collection = $this->param('collection');

            if (!$this->module('collections')->hasaccess($collection, 'entries_view')) {
                return $this->helper('admin')->denyRequest();
            } else {
                return $this->invoke('Collections\\Controller\\Admin', 'tree');
            }

        });

    }

    if ($hardening['collections_collections']) {

        // don't list collections schema of restricted collections
        $this->bind('/collections/_collections', function () {

            return $this->module('collections')->getCollectionsInGroup(null, 0);

        });

    }

    if ($hardening['accounts_find']) {

        // to do: $this->app->trigger('cockpit.accounts.disguise', [&$account]);

        // disable user lists for non-admins,
        // non-admins must send a user id to receive the user name
        $this->bind('/accounts/find', function () {

            if ($this->module('cockpit')->hasaccess('cockpit', 'accounts')) {

                return $this->invoke('Cockpit\\Controller\\Accounts', 'find');

            }

            // deny request to list all users
            $options = $this->param('options', []);
            if (!isset($options['filter']['_id'])) {
                return $this->helper('admin')->denyRequest();
            }

            $accounts = $this->invoke('Cockpit\\Controller\\Accounts', 'find');

            $allowed = [
                'user',
                'name',
                'group',  // dashboard group info
                '_id'     // used by cp-account field, page breaks if omitted
            ];

            foreach ($accounts['accounts'] as $key => $account) {
                $accounts['accounts'][$key] = array_intersect_key($account, array_flip($allowed));
            }

            return $accounts;

        });

    }

    if ($hardening['assetsmanager']) {

        // deny access to assetsmanager
        if (!$this->module('cockpit')->hasaccess('cockpit', 'assets')) {

            $this->bind('/assetsmanager', function () {

                return $this->helper('admin')->denyRequest();

            });

            $this->bind('/assetsmanager/*', function () {

                return $this->helper('admin')->denyRequest();

            });

            // remove assets link in settings dropdown
            $this->helper('admin')->addAssets('yxorp:assets/hideassets.js');

        }

    }

    if ($hardening['disable_getLinkedOverview']) {

        if (!$this->module('cockpit')->isSuperAdmin()) {

            // disable route
            $this->bind('/collections/utils/getLinkedOverview', function () {
                return $this->helper('admin')->denyRequest();
            });

            // hide LINKED button
            $this->on('collections.entry.aside', function ($collection) {

                // target first button in sidebar to keep JSON button visible for admins
                // might break if markup changes in future updates
                echo '<script>this.on("mount", function() {App.$(".app-main > div > [data-is] > .uk-grid > .uk-width-medium-1-4 .uk-button-group .uk-button:first-child()").addClass("uk-hidden");});</script>';

            });

        }
    }

});
