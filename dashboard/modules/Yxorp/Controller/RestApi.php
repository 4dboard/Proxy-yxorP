<?php
/**
 * This file is part of the Yxorp project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yxorp\Controller;

class RestApi extends \LimeExtra\Controller {

    protected function before() {
        $this->app->response->mime = 'json';
    }

    public function authUser() {

        $data = [ 'user' => $this->param('user'), 'password' => $this->param('password') ];

        if (!$data['user'] || !$data['password']) {
            return $this->stop(['error' => 'Missing user or password'], 412);
        }

        $user = $this->module('yxorp')->authenticate($data);
        $generateApiKey = $this->param('generateApiKey', false);

        if (!$user) {
            $this->app->trigger('yxorp.authentication.failed', [$data['user']]);
            return $this->stop(['error' => 'Authentication failed'], 401);
        }

        $this->app->trigger('yxorp.authentication.success', [&$user]);

        if ($generateApiKey) {
            $user['api_key'] = 'account-'.\uniqid(\bin2hex(\random_bytes(16)));
            $this->app->storage->save('yxorp/accounts', $user);
        }

        return $user;
    }

    public function refreshUserApiKey() {

        $apiKey = $this->param('apiKey');

        if (!$apiKey) {
            return $this->stop(['error' => 'apiKey parameter is missing'], 412);
        }

        $user = $this->app->storage->findOne('yxorp/accounts', ['api_key' => $apiKey]);

        if (!$user) {
            return $this->stop(['error' => 'User not found'], 404);
        }

        $user['api_key'] = 'account-'.\uniqid(\bin2hex(\random_bytes(16)));
        $this->app->storage->save('yxorp/accounts', $user);

        return ['success' => true];
    }

    public function saveUser() {

        $data = $this->param('user', false);
        $user = $this->module('yxorp')->getUser();

        if (!$data) {
            return $this->stop(['error' => 'Missing user data'], 412);
        }

        if ($user) {

            $hasAccess = $this->module('yxorp')->hasaccess('yxorp', 'accounts');

            if (!isset($data['_id']) && !$hasAccess) {
                return $this->stop(401);
            }

            if (!$hasAccess && $data['_id'] != $user['_id'] ) {
                return $this->stop(401);
            }

            if (isset($data['_id'], $data['group']) && !$hasAccess) {
                unset($data['group']);
            }
        }

        $data['_modified'] = time();

        // new user needs a password
        if (!isset($data['_id'])) {

            // new user needs a password
            if (!isset($data['password'])) {
                return $this->stop(['error' => 'User password required'], 412);
            }

            // new user needs a username
            if (!isset($data['user']) || !trim($data['user'])) {
                return $this->stop(['error' => 'Username required'], 412);
            }

            $data = \array_merge($account = [
                'user'   => 'admin',
                'name'   => '',
                'email'  => '',
                'active' => true,
                'group'  => 'user',
                'i18n'   => 'en'
            ], $data);

            if (isset($data['api_key'])) {
                $data['api_key'] = 'account-'.\uniqid(\bin2hex(\random_bytes(16)));
            }

            $data['_created'] = $data['_modified'];
        }

        if (isset($data['password'])) {

            if (strlen($data['password'])){
                $data['password'] = $this->app->hash($data['password']);
            } else {
                unset($data['password']);
            }
        }

        if (isset($data['email']) && !$this->app->helper('utils')->isEmail($data['email'])) {
            return $this->stop(['error' => 'Valid email required'], 412);
        }

        if (isset($data['user']) && !\trim($data['user'])) {
            return $this->stop(['error' => 'Username cannot be empty!'], 412);
        }

        foreach (['name', 'user', 'email'] as $key) {
            if (isset($data[$key])) $data[$key] = \strip_tags(\trim($data[$key]));
        }

        // unique check
        // --
        if (isset($data['user'])) {

            $_account = $this->app->storage->findOne('yxorp/accounts', ['user'  => $data['user']]);

            if ($_account && (!isset($data['_id']) || $data['_id'] != $_account['_id'])) {
                $this->app->stop(['error' =>  'Username is already used!'], 412);
            }
        }

        if (isset($data['email'])) {

            $_account = $this->app->storage->findOne('yxorp/accounts', ['email'  => $data['email']]);

            if ($_account && (!isset($data['_id']) || $data['_id'] != $_account['_id'])) {
                $this->app->stop(['error' =>  'Email is already used!'], 412);
            }
        }
        // --

        $this->app->trigger('yxorp.accounts.save', [&$data, isset($data['_id'])]);
        $this->app->storage->save('yxorp/accounts', $data);

        if (isset($data['password'])) {
            unset($data['password']);
        }

        return \json_encode($data);
    }

    public function listUsers() {

        $user    = $this->module('yxorp')->getUser();
        $isAdmin = false;
        $options = \array_merge(['sort' => ['user' => 1]], $this->param('options', []));

        if ($user) {

            if (!$this->module('yxorp')->hasaccess('yxorp', 'accounts')) {
                return $this->stop(401);
            }

            $isAdmin = $this->module('yxorp')->isSuperAdmin($user['group']);
        }

        if ($filter = $this->param('filter')) {

            $options['filter'] = $filter;

            if (\is_string($filter)) {

                $options['filter'] = [
                    '$or' => [
                        ['name'  => ['$regex' => $filter]],
                        ['user'  => ['$regex' => $filter]],
                        ['email' => ['$regex' => $filter]],
                    ]
                ];
            }
        }

        $accounts = $this->app->storage->find('yxorp/accounts', $options)->toArray();

        foreach ($accounts as &$account) {
            unset($account['password'], $account['api_key'], $account['_reset_token']);
            $this->app->trigger('yxorp.accounts.disguise', [&$account]);
        }

        return $accounts;
    }

    public function image() {

        $width = $this->param('w', null);
        $height = $this->param('h', null);

        $mime = $this->param('mime', null);

        if ($mime == 'auto' && strpos($this->app->request->headers['Accept'] ?? '', 'image/webp') !== false) {
            $gdinfo = \gd_info();
            $mime = isset($gdinfo['WebP Support']) && $gdinfo['WebP Support'] ? 'image/webp' : 'auto';
        }

        $options = [
            'src'     => $this->param('src', false),
            'mode'    => $this->param('m', 'thumbnail'),
            'mime'    => $mime,
            'fp'      => $this->param('fp', null),
            'filters' => (array) $this->param('f', []),
            'width'   => $width == 'original' ? 'original' : intval($width),
            'height'  => $height == 'original' ? 'original' : intval($height),
            'quality' => intval($this->param('q', 100)),
            'rebuild' => intval($this->param('r', false)),
            'base64'  => intval($this->param('b64', false)),
            'output'  => $this->param('o', false),
            'redirect' => intval($this->param('re', false))
        ];

        // Set single filter when available
        foreach ([
            'blur', 'brighten',
            'colorize', 'contrast',
            'darken', 'desaturate',
            'edgeDetect', 'emboss',
            'flip', 'invert', 'opacity', 'pixelate', 'sepia', 'sharpen', 'sketch'
        ] as $f) {
            if ($this->param($f)) $options[$f] = $this->param($f);
        }

        return $this->module('yxorp')->thumbnail($options);
    }

    public function assets() {

        $options = [
            'sort' => ['created' => -1]
        ];

        if ($filter = $this->param('filter', null)) $options['filter'] = $filter;
        if ($fields = $this->param('fields', null)) $options['fields'] = $fields;
        if ($limit  = $this->param('limit', null))  $options['limit'] = $limit;
        if ($sort   = $this->param('sort', null))   $options['sort'] = $sort;
        if ($skip   = $this->param('skip', null))   $options['skip'] = $skip;

        return $this->module('yxorp')->listAssets($options);
    }

    public function asset($id = null) {

        if (!$id) {
            return $this->stop('{"error": "Missing id parameter"}', 412);
        }

        $options = [
            'filter' => ['_id' => $id]
        ];

        if ($filter = $this->param('filter', null)) $options['filter'] = $filter;
        if ($fields = $this->param('fields', null)) $options['fields'] = $fields;

        $assets = $this->module('yxorp')->listAssets($options);

        return $assets[0] ?? false;
    }

    public function addAssets() {
        return $this->module('yxorp')->uploadAssets('files', $this->param('meta', []));
    }

    public function updateAssets() {

        if ($asset = $this->param('asset', false)) {
            return $this->module('yxorp')->updateAssets($asset);
        }

        return false;
    }

    public function removeAssets() {

        if ($assets = $this->param('assets', false)) {
            return $this->module('yxorp')->removeAssets($assets);
        }

        return false;
    }
}
