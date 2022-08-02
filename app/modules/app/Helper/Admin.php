<?php

namespace yxorP\app\modules\app\helper;

use yxorP\app\lib\data\graphQL\Server\Helper;
use yxorP\app\lib\http\helperAware;


/**
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 */
class admin extends helperAware
{

    public function lockResourceId($resourceId, $user = null)
    {

        if (!$resourceId) {
            return false;
        }

        $key = "locked:{$resourceId}";
        $user = $user ?? $this->app->helper('auth')->getUser();

        if (!$user) {
            return false;
        }

        $now = time();

        $meta = [
            'rid' => $resourceId,
            'user' => ['_id' => $user['_id'], 'name' => $user['name'], 'user' => $user['user'], 'email' => $user['email']],
            'sid' => md5(session_id()),
            'time' => $now,
            '_created' => $now,
            '_updated' => $now,
        ];

        $this->app->dataStorage->setKey('app/options', $key, $meta);

        return true;
    }

    public function updateLockedResourceId($resourceId)
    {

        $meta = null;

        if (!$this->isResourceEditableByCurrentUser($resourceId)) {
            return false;
        }

        $now = time();
        $key = "locked:{$resourceId}";

        $meta['time'] = $now;
        $meta['_updated'] = $now;

        $this->app->dataStorage->setKey('app/options', $key, $meta);

        return true;
    }

    public function isResourceEditableByCurrentUser($resourceId, &$meta = null)
    {

        $meta = $this->isResourceLocked($resourceId);

        if (!$meta) {
            return true;
        }

        $user = $this->app->helper('auth')->getUser();

        if ($meta['user']['_id'] === $user['_id'] && $meta['sid'] === md5(session_id())) {
            return true;
        }

        return false;
    }

    public function isResourceLocked($resourceId, $ttl = null)
    {

        $ttl = $ttl ?? 300;
        $key = "locked:{$resourceId}";
        $meta = $this->app->dataStorage->getKey('app/options', $key, false);

        if ($meta && ($meta['time'] + $ttl) < time()) {
            $this->app->dataStorage->removeKey('app/options', $key);
            $meta = false;
        }

        if ($meta) {
            return $meta;
        }

        return false;
    }

    public function unlockResourceId($resourceId)
    {

        $meta = $this->isResourceLocked($resourceId);

        $key = "locked:{$resourceId}";
        $this->app->dataStorage->removeKey('app/options', $key);

        if ($meta) {

            $user = $this->app->helper('auth')->getUser();

            // $this->app->helper('eventStream')->add('notify', [
            //     'message' => \_t("Resource \"%s\" unlocked by %s", [$resourceId, $user['name']]),
            //     'user' => $user ? ['_id' => $user['_id'], 'name' => $user['name'], 'user' => $user['user'], 'email' => $user['email']] : null,
            // ], [
            //     'sessionId' => $meta['sid']
            // ]);
        }

        return true;
    }

}
