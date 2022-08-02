<?php

// Register Helpers
$this->helpers['app'] = 'yxorP\app\modules\app\\Helper\\app';
$this->helpers['acl'] = 'yxorP\app\modules\app\\Helper\\acl';
$this->helpers['async'] = 'yxorP\app\modules\app\\Helper\\async';
$this->helpers['auth'] = 'yxorP\app\modules\app\\Helper\\auth';
$this->helpers['csrf'] = 'yxorP\app\modules\app\\Helper\\csrf';
$this->helpers['i18n'] = 'yxorP\app\modules\app\\Helper\\i18n';
$this->helpers['rspc'] = 'yxorP\app\modules\app\\Helper\\ResponseCache';
$this->helpers['jwt'] = 'yxorP\app\modules\app\\Helper\\jWT';

include_once(__DIR__ . '/functions.php');

// events

$this->on('app.admin.init', function () {
    include(__DIR__ . '/admin.php');
}, 1000);

$this->on('app.api.request', function ($request) {

    // simple response cache ?rspc=1
    if ($this->helper('rspc')->handle($request)) {
        return false;
    }

    include(__DIR__ . '/api.php');

}, 1000);

$this->on('app.user.disguise', function (array &$user) {
    unset($user['password'], $user['apiKey'], $user['_reset_token']);
});

$this->on('app.cli.init', function () {
    $app = $this;
    include(__DIR__ . '/cli.php');
});
