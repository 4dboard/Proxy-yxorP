<?php

namespace yxorP\app\modules\system\helper;

use yxorP\app\lib\data\graphQL\Server\Helper;
use yxorP\app\lib\http\helperAware;

class revisions extends helperAware
{

    protected $storage;

    public function initialize()
    {
        $this->storage = $this->app->dataStorage;
    }

    public function count($id)
    {
        return $this->storage->count('system/revisions', ['_oid' => $id]);
    }

    public function getList(string $id, int $limit = 50, int $skip = 0)
    {
        return $this->storage->find('system/revisions', [
            'filter' => ['_oid' => $id],
            'sort' => ['_created' => -1],
            'limit' => $limit,
            'skip' => $skip
        ])->toArray();
    }

    public function add($id, $data, $meta = null, $by = null, $created = null, $ref = null)
    {

        if ($by === true) {

            $by = null;
            $user = $this->app->helper('auth')->getUser();

            if ($user) {
                $by = $user['_id'];
            }
        }

        $filtered = [];

        foreach ($data as $key => $value) {

            if ($key[0] === '_') {
                continue;
            }

            $filtered[$key] = $value;
        }

        if (!count($filtered)) {
            return false;
        }

        if ($ref) {

            $isDifferent = false;

            foreach ($filtered as $key => $value) {

                if (json_encode($value) !== json_encode($ref[$key] ?? null)) {
                    $isDifferent = true;
                    break;
                }
            }

            if (!$isDifferent) {
                return false;
            }
        }

        $revision = [
            '_oid' => $id,
            'data' => $filtered,
            'meta' => $meta,
            '_by' => $by,
            '_created' => $created ?? time()
        ];

        $this->storage->insert('system/revisions', $revision);

        return $revision;
    }

    public function get($id)
    {
        return $this->storage->findOne('system/revisions', ['_oid' => $id]);
    }


    public function latest($id)
    {

        $revs = $this->storage->find('system/revisions', [
            'filter' => ['_oid' => $id],
            'sort' => ['_created' => -1],
            'limit' => 1
        ])->toArray();

        return $revs[0] ?? null;
    }


    public function remove($rid)
    {
        return $this->storage->remove('system/revisions', ['_id' => $rid]);
    }

    public function removeAll($id)
    {
        return $this->storage->remove('system/revisions', ['_oid' => $id]);
    }

}
