<?php

$this->on('admin.init', function() use ($hardening) {

    if ($this->module('yxorp')->isSuperAdmin()) {

        // bind admin routes
        $this->bindClass('rljUtils\\Controller\\Admin', 'rljutils');

        // add settings entry
        $this->on('yxorp.view.settings.item', function () {
            $this->renderView('rljutils:views/partials/settings.php');
        });

    }

    // restrict built-in helper functions

    // deny request for `find` and `_find`
    if ($hardening['collections_find']) {

        $this->bind('/collections/find', function(){

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
        $this->bind('/collections/tree', function() {

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
        $this->bind('/collections/_collections', function() {

            return $this->module('collections')->getCollectionsInGroup(null, false);

        });

    }

    if ($hardening['accounts_find']) {

        // to do: $this->app->trigger('yxorp.accounts.disguise', [&$account]);

        // disable user lists for non-admins,
        // non-admins must send a user id to receive the user name
        $this->bind('/accounts/find', function() {

            if ($this->module('yxorp')->hasaccess('yxorp', 'accounts')) {

                return $this->invoke('yxorP\\Controller\\Accounts', 'find');

            }

            // deny request to list all users
            $options = $this->param('options', []);
            if (!isset($options['filter']['_id'])) {
                return $this->helper('admin')->denyRequest();
            }

            $accounts = $this->invoke('yxorP\\Controller\\Accounts', 'find');

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
        if (!$this->module('yxorp')->hasaccess('yxorp', 'assets')) {

            $this->bind('/assetsmanager', function() {

                return $this->helper('admin')->denyRequest();

            });

            $this->bind('/assetsmanager/*', function() {

                return $this->helper('admin')->denyRequest();

            });

            // remove assets link in settings dropdown
            $this->helper('admin')->addAssets('rljutils:assets/hideassets.js');

        }

    }

    if ($hardening['disable_getLinkedOverview']) {

        if (!$this->module('yxorp')->isSuperAdmin()) {

            // disable route
            $this->bind('/collections/utils/getLinkedOverview', function() {
                return $this->helper('admin')->denyRequest();
            });

            // hide LINKED button
            $this->on('collections.entry.aside', function($collection) {

                // target first button in sidebar to keep JSON button visible for admins
                // might break if markup changes in future updates
                echo '<script>this.on("mount", function() {App.$(".app-main > div > [data-is] > .uk-grid > .uk-width-medium-1-4 .uk-button-group .uk-button:first-child()").addClass("uk-hidden");});</script>';

            });

        }
    }

});
