<?php

namespace MongoHybrid;

use MongoLite\Client as MongoLiteClient;

class MongoLite {

    protected MongoLiteClient $client;

    public function __construct(string $server, array $options = []) {

        $this->client = new MongoLiteClient(str_replace('mongolite://', '', $server));
        $this->db     = $options['db'];
    }

    public function lstCollections(): array {

        $return = [];

        $databases = $this->client->listDBs();

        foreach ($databases as $database) {

            $collections = $this->client->selectDB($database)->getCollectionNames();

            foreach ($collections as $collection) {

                $return[] = str_replace('_', '/', "{$database}/{$collection}");
            }
        }

        return $return;
    }

    public function getCollection(string $name, ?string $db = null): \MongoLite\Collection {

        if (strpos($name, '/') !== false) {
            list($db, $name) = explode('/', $name, 2);
        }

        if (!$db) {
            $db = $this->db;
        }

        $name = str_replace('/', '_', $name);

        return $this->client->selectCollection($db, $name);
    }

    public function dropCollection(string $name, ?string $db = null) {

        if (strpos($name, '/') !== false) {
            list($db, $name) = explode('/', $name, 2);
        }

        if (!$db) {
            $db = $this->db;
        }

        $name = str_replace('/', '_', $name);

        return $this->client->selectDB($db)->dropCollection($name);
    }

    public function renameCollection(string $name, string $newname, ?string $db = null): bool {

        if (strpos($name, '/') !== false) {
            list($db, $name) = explode('/', $name, 2);
        }

        if (!$db) {
            $db = $this->db;
        }

        $db = $this->client->selectDB($db);

        $name = str_replace('/', '_', $name);
        $newname = str_replace('/', '_', $newname);

        if (!in_array($name, $db->getCollectionNames())) {
            return false;
        }

        $db->connection->exec("ALTER TABLE `{$name}` RENAME TO `{$newname}`");

        return true;
    }

    public function findOne(string $collection, ?array $filter = null, ?array $projection = null): ?array {
        if (!$filter) $filter = [];
        return $this->getCollection($collection)->findOne($filter, $projection);
    }

    public function findOneById(string $collection, string $id): ?array {
        return $this->getCollection($collection)->findOne(['_id' => $id]);
    }

    public function find(string $collection, array $options = []): ResultSet {

        $filter = isset($options['filter']) ? $options['filter'] : null;
        $fields = isset($options['fields']) && $options['fields'] ? $options['fields'] : null;
        $limit  = isset($options['limit'])  ? $options['limit'] : null;
        $sort   = isset($options['sort'])   ? $options['sort'] : null;
        $skip   = isset($options['skip'])   ? $options['skip'] : null;

        $cursor = $this->getCollection($collection)->find($filter, $fields);

        if ($limit) $cursor->limit($limit);
        if ($sort)  $cursor->sort($sort);
        if ($skip)  $cursor->skip($skip);

        $docs      = $cursor->toArray();
        $resultSet = new ResultSet($this, $docs);

        return $resultSet;
    }

    public function aggregate(string $collection, array $pipeline) {

        $cursor    = $this->getCollection($collection)->aggregate($pipeline);
        $docs      = $cursor->toArray();
        $resultSet = new ResultSet($this, $docs);

        return $resultSet;
    }

    public function getFindTermFilter($term) {

        $terms = str_getcsv(trim($term), ' ');

        $filter = function ($doc) use ($term) {
            return stripos(json_encode($doc), $term) !== false;
        };

        if (count($terms) > 1) {

            $filter = function($doc) use($terms) {

                $json = json_encode($doc);

                foreach ($terms as $term) {
                    return stripos($json, $term) !== false;
                }
            };
        }

        return $filter;
    }

    public function insert(string $collection, array &$doc) {
        return $this->getCollection($collection)->insert($doc);
    }

    public function save(string $collection, array &$data, bool $create = false) {
        return $this->getCollection($collection)->save($data, $create);
    }

    public function update(string $collection, mixed $criteria, array $data) {
        return $this->getCollection($collection)->update($criteria, $data);
    }

    public function remove(string $collection, array $filter = []) {
        return $this->getCollection($collection)->remove($filter);
    }

    public function removeField(string $collection, string $field, array $filter = []): bool {

        $collection = $this->getCollection($collection);

        foreach ($collection->find($filter) as $doc) {

            if (isset($doc[$field])) {
                unset($doc[$field]);
                $collection->update(['_id' => $doc['_id']], $doc, false);
            }
        }

        return true;
    }

    public function renameField(string $collection, string $field, string $newfield, array $filter = []): bool {

        $collection = $this->getCollection($collection);

        foreach ($collection->find($filter) as $doc) {

            if (isset($doc[$field])) {
                $doc[$newfield] = $doc[$field];
                unset($doc[$field]);
                $collection->update(['_id' => $doc['_id']], $doc, false);
            }
        }

        return true;
    }

    public function count(string $collection, mixed $filter = null): int {
        return $this->getCollection($collection)->count($filter);
    }
}
