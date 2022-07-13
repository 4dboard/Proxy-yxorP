<?php namespace MongoLite;
class Collection
{
    public $database;
    public $name;

    public function __construct($name, $database)
    {
        $this->name = $name;
        $this->database = $database;
    }

    public function drop()
    {
        $this->database->dropCollection($this->name);
    }

    public function insertMany($documents)
    {
        return $this->insert($documents);
    }

    public function insert(&$document)
    {
        if (isset($document[0])) {
            $this->database->connection->beginTransaction();
            foreach ($document as &$doc) {
                if (!\is_array($doc)) continue;
                $res = $this->_insert($doc);
                if (!$res) {
                    $this->database->connection->rollBack();
                    return $res;
                }
            }
            $this->database->connection->commit();
            return \count($document);
        } else {
            return $this->_insert($document);
        }
    }

    protected function _insert(&$document)
    {
        $table = $this->name;
        $document['_id'] = isset($document['_id']) ? $document['_id'] : createMongoDbLikeId();
        $data = ['document' => \json_encode($document, JSON_UNESCAPED_UNICODE)];
        $fields = [];
        $values = [];
        foreach ($data as $col => $value) {
            $fields[] = "`{$col}`";
            $values[] = (\is_null($value) ? 'NULL' : $this->database->connection->quote($value));
        }
        $fields = \implode(',', $fields);
        $values = \implode(',', $values);
        $sql = "INSERT INTO `{$table}` ({$fields}) VALUES ({$values})";
        $res = $this->database->connection->exec($sql);
        if ($res) {
            return $document['_id'];
        } else {
            trigger_error('SQL Error: ' . \implode(', ', $this->database->connection->errorInfo()) . ":\n" . $sql);
            return false;
        }
    }

    public function save(&$document, $create = false)
    {
        if (isset($document['_id'])) {
            $ret = $this->update(['_id' => $document['_id']], ['$set' => $document]);
            if (!$ret && $create) {
                $ret = $this->insert($document);
            }
        } else {
            $ret = $this->insert($document);
        }
        return $ret;
    }

    public function update($criteria, $data, $merge = true)
    {
        $conn = $this->database->connection;
        $sql = 'SELECT id, document FROM `' . $this->name . '` WHERE document_criteria("' . $this->database->registerCriteriaFunction($criteria) . '", document)';
        $stmt = $conn->query($sql);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($result as &$doc) {
            $_doc = \json_decode($doc['document'], true);
            $document = $merge ? \array_merge($_doc, isset($data['$set']) ? $data['$set'] : []) : $data;
            $document['_id'] = $_doc['_id'];
            $sql = 'UPDATE `' . $this->name . '` SET document=' . $conn->quote(json_encode($document, JSON_UNESCAPED_UNICODE)) . ' WHERE id=' . $doc['id'];
            $conn->exec($sql);
        }
        return count($result);
    }

    public function remove($criteria)
    {
        $sql = 'DELETE FROM `' . $this->name . '` WHERE document_criteria("' . $this->database->registerCriteriaFunction($criteria) . '", document)';
        return $this->database->connection->exec($sql);
    }

    public function count($criteria = null)
    {
        return $this->find($criteria)->count();
    }

    public function find($criteria = null, $projection = null)
    {
        return new Cursor($this, $this->database->registerCriteriaFunction($criteria), $projection);
    }

    public function findOne($criteria = null, $projection = null)
    {
        $items = $this->find($criteria, $projection)->limit(1)->toArray();
        return isset($items[0]) ? $items[0] : null;
    }

    public function renameCollection($newname)
    {
        if (!in_array($newname, $this->database->getCollectionNames())) {
            $this->database->connection->exec('ALTER TABLE `' . $this->name . '` RENAME TO `' . $newname . '`');
            $this->name = $newname;
            return true;
        }
        return false;
    }
}