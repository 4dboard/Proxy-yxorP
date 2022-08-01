<?php

/* Adding a helper to the system. */
$this->helpers['settings'] = 'System\\Helper\\settings';
/* Binding the class `System\Controller\api` to the route `/system/api`. */
/* Binding the class `System\Controller\locales` to the route `/system/locales`. */
$this->bindClass('System\\Controller\\api', '/system/api');
/* Binding the class `System\Controller\logs` to the route `/system/logs`. */
$this->bindClass('System\\Controller\\locales', '/system/locales');
/* Binding the class `System\Controller\Users\roles` to the route `/system/users/roles`. */
$this->bindClass('System\\Controller\\logs', '/system/logs');
/* Binding the class `System\Controller\users` to the route `/system/users`. */
$this->bindClass('System\\Controller\\Users\\roles', '/system/users/roles');
/* Binding the class `System\Controller\users` to the route `/system/users`. */
$this->bindClass('System\\Controller\\users', '/system/users');
/* Binding the class `System\Controller\utils` to the route `/system/utils`. */
$this->bindClass('System\\Controller\\utils', '/system/utils');
/* Binding the class `System\Controller\settings` to the route `/system`. */
$this->bindClass('System\\Controller\\settings', '/system');

$this->helper('menus')->addLink('modules', ['label' => 'Api', 'icon' => 'system:assets/icons/api.svg', 'route' => '/system/api', 'active' => false]);

$this->on('app.permissions.collect', function (ArrayObject $permissions) {

    $permissions['Locales'] = ['app/locales/manage' => 'Manage locales'];

    $permissions['Api & Security'] = ['app/api/manage' => 'Manage Api access'];

    $permissions['Logs'] = ['app/logs' => 'View app logs'];

});

$this->on('app.user.login', function ($user) {

    $this->module('system')->log("User Login: {$user['user']}", type: 'info', context: ['_id' => $user['_id'], 'user' => $user['user'], 'name' => $user['name'], 'email' => $user['email'], 'ip' => $this->getClientIp()]);

});


$this->on('app.search', function ($search, $findings) {

    if (!$this->helper('acl')->isAllowed('app/users/manage')) return;

    $users = $this->dataStorage->find('system/users', ['filter' => ['$or' => [['name' => ['$regex' => $search, '$options' => 'i']], ['label' => ['$regex' => $search, '$options' => 'i']]]], 'limit' => 5])->toArray();

    foreach ($users as $user) $findings[] = ['title' => isset($user['name']) && $user['name'] ? "{$user['name']} ({$user['user']})" : $user['user'], 'route' => $this->routeUrl("/system/users/user/{$user['_id']}"), 'group' => 'Users', 'icon' => 'system:assets/icons/users.svg'];

});
