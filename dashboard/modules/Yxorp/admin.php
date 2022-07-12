<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Helpers
 */

// because auto-load not ready yet
include(__DIR__ . '/Helper/Admin.php');

$app->helpers['admin'] = 'yxorP\\Helper\\Admin';
$app->helpers['csrf'] = 'yxorP\\Helper\\Csrf';

// init + load i18n
$app->on('before', function () {

    $this->helper('i18n')->locale = $this->retrieve('i18n', 'en');

    $locale = $this->module('yxorp')->getUser('i18n', $this->helper('i18n')->locale);

    if ($translationspath = $this->path("#config:yxorp/i18n/{$locale}.php")) {
        $this->helper('i18n')->locale = $locale;
        $this->helper('i18n')->load($translationspath, $locale);
    }

    $this->bind('/yxorp.i18n.data', function () {
        $this->response->mime = 'js';
        $data = $this->helper('i18n')->data($this->helper('i18n')->locale);
        return 'if (i18n) { i18n.register(' . (count($data) ? json_encode($data) : '{}') . '); }';
    });
});

/**
 * register assets
 */

$assets = [

    // polyfills
    'assets:polyfills/dom4.js',
    'assets:polyfills/document-register-element.js',
    'assets:polyfills/URLSearchParams.js',

    // libs
    'assets:lib/moment.js',
    'assets:lib/jquery.js',
    'assets:lib/lodash.js',
    'assets:lib/riot/riot.js',
    'assets:lib/riot/riot.bind.js',
    'assets:lib/riot/riot.view.js',
    'assets:lib/uikit/js/uikit.min.js',
    'assets:lib/uikit/js/components/notify.min.js',
    'assets:lib/uikit/js/components/tooltip.min.js',
    'assets:lib/uikit/js/components/lightbox.min.js',
    'assets:lib/uikit/js/components/sortable.min.js',
    'assets:lib/uikit/js/components/sticky.min.js',
    'assets:lib/mousetrap.js',
    'assets:lib/storage.js',
    'assets:lib/i18n.js',

    // app
    'assets:app/js/app.js',
    'assets:app/js/app.utils.js',
    'assets:app/js/codemirror.js',
    'assets:app/components/cp-actionbar.js',
    'assets:app/components/cp-fieldcontainer.js',
    'yxorp:assets/components.js',
    'yxorp:assets/yxorp.js',

    'assets:app/css/style.css',
];

// load custom css style
if ($app->path('#config:yxorp/style.css')) {
    $assets[] = '#config:yxorp/style.css';
}

$app['app.assets.base'] = $assets;


/**
 * register routes
 */

$app->bind('/', function () {

    if ($this['yxorp.start'] && $this->module('yxorp')->getUser()) {
        $this->reroute($this['yxorp.start']);
    }

    return $this->invoke('yxorP\\Controller\\Base', 'dashboard');
});

$app->bindClass('yxorP\\Controller\\Utils', 'yxorp/utils');
$app->bindClass('yxorP\\Controller\\Base', 'yxorp');
$app->bindClass('yxorP\\Controller\\Settings', 'settings');
$app->bindClass('yxorP\\Controller\\Accounts', 'accounts');
$app->bindClass('yxorP\\Controller\\Auth', 'auth');
$app->bindClass('yxorP\\Controller\\Media', 'media');
$app->bindClass('yxorP\\Controller\\Assets', 'assetsmanager');
$app->bindClass('yxorP\\Controller\\RestAdmin', 'restadmin');
$app->bindClass('yxorP\\Controller\\Webhooks', 'webhooks');


/**
 * Check user session for backend ui
 */
$app->on('yxorp.auth.setuser', function ($user, $permanent) {
    if (!$permanent) return;
    $this('session')->write('yxorp.session.time', time());
});

// update session time
$app->on('admin.init', function () {
    if ($this['route'] != '/check-backend-session' && isset($_SESSION['yxorp.session.time'])) {
        $_SESSION['yxorp.session.time'] = time();
    }
});

// check + validate session time
$app->bind('/check-backend-session', function () {

    session_write_close();

    $user = $this->module('yxorp')->getUser();
    $status = true;

    if (!$user) {
        $status = false;
    }

    // check for inactivity: 45min by default
    if ($status && isset($_SESSION['yxorp.session.time']) && ($_SESSION['yxorp.session.time'] + $this->retrieve('session.lifetime', 2700) < time())) {
        $this->module('yxorp')->logout();
        $status = false;
    }

    return ['status' => $status];
});


/**
 * on admint init
 */
$app->on('admin.init', function () {

    // bind finder
    $this->bind('/finder', function () {

        $this->layout = 'yxorp:views/layouts/app.php';
        $this["user"] = $this->module('yxorp')->getUser();
        return $this->view('yxorp:views/base/finder.php');

    }, $this->module('yxorp')->hasaccess('yxorp', 'finder'));

}, 0);


/**
 * listen to app search to filter accounts
 */

$app->on('yxorp.search', function ($search, $list) {

    if (!$this->module('yxorp')->hasaccess('yxorp', 'accounts')) {
        return;
    }

    foreach ($this->storage->find('yxorp/accounts') as $a) {

        if (strripos($a['name'] . ' ' . $a['user'], $search) !== false) {
            $list[] = [
                'icon' => 'user',
                'title' => $a['name'],
                'url' => $this->routeUrl('/accounts/account/' . $a['_id'])
            ];
        }
    }
});

// dashboard widgets


$app->on('admin.dashboard.widgets', function ($widgets) {

    $title = $this('i18n')->get('Today');

    $widgets[] = [
        'name' => 'time',
        'content' => $this->view('yxorp:views/widgets/datetime.php', compact('title')),
        'area' => 'main'
    ];

}, 100);

/**
 * handle error pages
 */
$app->on('after', function () {

    switch ($this->response->status) {

        case 401:

            if ($this->request->is('ajax') || YXORP_API_REQUEST) {
                $this->response->body = '{"error": "401", "message":"Unauthorized"}';
            } else {
                $this->response->body = $this->view('yxorp:views/errors/401.php');
            }

            $this->trigger('yxorp.request.error', ['401']);
            break;

        case 404:

            if ($this->request->is('ajax') || YXORP_API_REQUEST) {
                $this->response->body = '{"error": "404", "message":"File not found"}';
            } else {

                if (!$this->module('yxorp')->getUser()) {
                    $this->reroute('/auth/login?to=' . $this->retrieve('route'));
                }

                $this->response->body = $this->view('yxorp:views/errors/404.php');
            }

            $this->trigger('yxorp.request.error', ['404']);
            break;
    }

    /**
     * send some debug information
     * back to client (visible in the network panel)
     */
    if ($this['debug'] && !headers_sent()) {

        /**
         * some system info
         */

        $DURATION_TIME = microtime(true) - YXORP_START_TIME;
        $MEMORY_USAGE = memory_get_peak_usage(false) / 1024 / 1024;

        header('YXORP_DURATION_TIME: ' . $DURATION_TIME . 'sec');
        header('YXORP_MEMORY_USAGE: ' . $MEMORY_USAGE . 'mb');
        header('YXORP_LOADED_FILES: ' . count(get_included_files()));
    }
});

// load package info
$app['yxorp'] = json_decode($app('fs')->read('#root:package.json'), true);

// init app helper
$app('admin')->init();
