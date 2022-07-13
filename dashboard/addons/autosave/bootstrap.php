<?php
/**
 * yxorP autosave editor addon
 *
 * @author  Paulo Gomes
 * @package yxorPCMS-Autosave
 * @license MIT
 *
 * @source  https://github.com/pauloamgomes/yxorPCMS-Autosave
 * @see     { README.md } for usage info.
 */

if (YXORP_ADMIN && !YXORP_API_REQUEST) {
    $this->module('autosave')->extend([
        'get' => function ($id) {
            $data = $this->app->storage->findOne('yxorp/autosave', ['_oid' => $id]);
            $type = $data['_type'] ?? NULL;
            $resource = NULL;
            if (!$data || !$data['_oid']) {
                return;
            }

            if ($type === 'collection') {
                $resource = $this->app->storage->findOne("collections/{$data['_name']}", ['_id' => $data['_oid']]);
                if (!$resource || $resource['_modified'] === $data['data']['_modified']) {
                    $this->app->storage->remove('yxorp/autosave', ['_oid' => $id]);
                    return;
                }
            }

            $user = ['name' => 'N/A', 'email' => 'N/A', 'group' => 'N/A'];
            if ($data['_creator'] && $account = $this->app->storage->findOne('yxorp/accounts', ['_id' => $data['_creator']])) {
                $user['name'] = $account['name'] ?? $account['user'];
                $user['email'] = $account['email'];
                $user['group'] = $account['group'];
            }

            return [
                'id' => $data['_id'],
                'date' => date('M d, Y H:i:s', $data['_modified']),
                'data' => $data['data'],
                'user' => $user,
            ];
        },

        'save' => function ($autosaved) {
            $id = $autosaved['id'];
            $data = $autosaved['data'];
            $type = $autosaved['type'];
            $name = $autosaved['name'];

            $user = $this->app->module('yxorp')->getUser();

            $existing = $this->app->storage->findOne('yxorp/autosave', ['_oid' => $id]);

            if ($type === 'collection') {
                $data['_modified'] = time();
            }

            $entry = [
                '_oid' => $id,
                'data' => $data,
                '_type' => $type,
                '_name' => $name,
                '_creator' => $user['_id'] ?? NULL,
                '_modified' => time()
            ];

            $this->app->trigger('yxorp.autosave.save', [&$data, $existing !== NULL]);

            if ($existing) {
                $entry['_id'] = $existing['_id'];
                $this->app->storage->save('yxorp/autosave', $entry);
            } else {
                $this->app->storage->insert('yxorp/autosave', $entry);
            }

            return ['updated' => date('M d, Y H:i:s', $entry["_modified"])];
        },

        'remove' => function ($id) {
            return $this->app->storage->remove('yxorp/autosave', ['_id' => $id]);
        },

        'removeEntry' => function ($id) {
            return $this->app->storage->remove('yxorp/autosave', ['_oid' => $id]);
        },
    ]);
}

if (YXORP_ADMIN && !YXORP_API_REQUEST) {
    include_once __DIR__ . '/admin.php';
    include_once __DIR__ . '/actions.php';
}

if (YXORP_API_REQUEST) {
    include_once __DIR__ . '/actions.php';
}
