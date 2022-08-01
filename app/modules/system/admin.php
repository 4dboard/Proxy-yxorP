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

/* Adding a link to the modules menu. */
$this->helper('menus')->addLink('modules', ['label' => 'Api', 'icon' => 'system:assets/icons/api.svg', 'route' => '/system/api', 'active' => false]);

/* Adding permissions to the system. */
$this->on('app.permissions.collect', function (ArrayObject $permissions) {

    /* Adding a permission to the system. */
    $permissions['Locales'] = ['app/locales/manage' => 'Manage locales'];

    /* Adding a permission to the system. */
    $permissions['Api & Security'] = ['app/api/manage' => 'Manage Api access'];

    /* Adding a permission to the system. */
    $permissions['Logs'] = ['app/logs' => 'View app logs'];

});

/* Adding a listener to the event `app.user.login` and when the event is triggered it will execute the function. */
$this->on('app.user.login', function ($user) {

    /* Logging the user login. */
    $this->module('system')->log("User Login: {$user['user']}", type: 'info', context: ['_id' => $user['_id'], 'user' => $user['user'], 'name' => $user['name'], 'email' => $user['email'], 'ip' => $this->getClientIp()]);

});


/* Adding a listener to the event `app.search` and when the event is triggered it will execute the function. */
$this->on('app.search', function ($search, $findings) {

    /* Checking if the user has the permission to manage users. */
    if (!$this->helper('acl')->isAllowed('app/users/manage')) return;

    /* Searching for users that match the search criteria. */
    $users = $this->dataStorage->find('system/users', ['filter' => ['$or' => [['name' => ['$regex' => $search, '$options' => 'i']], ['label' => ['$regex' => $search, '$options' => 'i']]]], 'limit' => 5])->toArray();

    /* Adding the users to the findings array. */
    foreach ($users as $user) $findings[] = ['title' => isset($user['name']) && $user['name'] ? "{$user['name']} ({$user['user']})" : $user['user'], 'route' => $this->routeUrl("/system/users/user/{$user['_id']}"), 'group' => 'Users', 'icon' => 'system:assets/icons/users.svg'];

});
