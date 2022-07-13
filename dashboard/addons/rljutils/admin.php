<?php $this->on('admin.init', function () use ($hardening) {
    if ($this->module('yxorp')->isSuperAdmin()) {
        $this->bindClass('rljUtils\\Controller\\Admin', 'rljutils');
        $this->on('yxorp.view.settings.item', function () {
            $this->renderView('rljutils:views/partials/settings.php');
        });
    }
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
        $this->bind('/collections/_collections', function () {
            return $this->module('collections')->getCollectionsInGroup(null, false);
        });
    }
    if ($hardening['accounts_find']) {
        $this->bind('/accounts/find', function () {
            if ($this->module('yxorp')->hasaccess('yxorp', 'accounts')) {
                return $this->invoke('yxorP\\Controller\\Accounts', 'find');
            }
            $options = $this->param('options', []);
            if (!isset($options['filter']['_id'])) {
                return $this->helper('admin')->denyRequest();
            }
            $accounts = $this->invoke('yxorP\\Controller\\Accounts', 'find');
            $allowed = ['user', 'name', 'group', '_id'];
            foreach ($accounts['accounts'] as $key => $account) {
                $accounts['accounts'][$key] = array_intersect_key($account, array_flip($allowed));
            }
            return $accounts;
        });
    }
    if ($hardening['assetsmanager']) {
        if (!$this->module('yxorp')->hasaccess('yxorp', 'assets')) {
            $this->bind('/assetsmanager', function () {
                return $this->helper('admin')->denyRequest();
            });
            $this->bind('/assetsmanager/*', function () {
                return $this->helper('admin')->denyRequest();
            });
            $this->helper('admin')->addAssets('rljutils:assets/hideassets.js');
        }
    }
    if ($hardening['disable_getLinkedOverview']) {
        if (!$this->module('yxorp')->isSuperAdmin()) {
            $this->bind('/collections/utils/getLinkedOverview', function () {
                return $this->helper('admin')->denyRequest();
            });
            $this->on('collections.entry.aside', function ($collection) {
                echo '<script>this.on("mount", function() {App.$(".app-main > div > [data-is] > .uk-grid > .uk-width-medium-1-4 .uk-button-group .uk-button:first-child()").addClass("uk-hidden");});</script>';
            });
        }
    }
});