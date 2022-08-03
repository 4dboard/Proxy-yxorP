<?php namespace yxorP\app\lib\data\mongodb\lite;

use Iterator;
use PDO;
use function array_diff_key;
use function implode;
use function json_decode;

class cursor implements Iterator
{
    protected bool|int $position = false;
    protected array $data = [];
    protected collection $collection;
    protected ?string $criteria;
    protected ?array $projection;
    protected ?int $limit = null;
    protected ?int $skip = null;
    protected ?array $sort = null;

    public function __construct(collection $collection, mixed $criteria, ?array $projection = null)
    {
        $this->collection = $collection;
        $this->criteria = $criteria;
        $this->projection = $projection;
    }

    public function count(): int
    {
        if (!$this->criteria) {
            $stmt = $this->collection->database->connection->query('SELECT COUNT(*) AS C FROM ' . $this->collection->database->connection->quote($this->collection->name));
        } else {
            $sql = ['SELECT COUNT(*) AS C FROM ' . $this->collection->database->connection->quote($this->collection->name)];
            $sql[] = 'WHERE document_criteria("' . $this->criteria . '", document)';
            if ($this->limit) {
                $sql[] = 'LIMIT ' . $this->limit;
            }
            $stmt = $this->collection->database->connection->query(implode(' ', $sql));
        }
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return intval($res['C'] ?? 0);
    }

    public function limit(?int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function sort(?array $sorts): self
    {
        $this->sort = $sorts;
        return $this;
    }

    public function skip(?int $skip): self
    {
        $this->skip = $skip;
        return $this;
    }

    public function each(mixed $callable): self
    {
        foreach ($this->current() as $document) {
            $callable($document);
        }
        return $this;
    }

    public function current(): array
    {
        return $this->data[$this->position];
    }

    public function toArray(): array
    {
        return $this->getData();
    }

    protected function getData(): array
    {
        $conn = $this->collection->database->connection;
        $sql = ['SELECT document FROM ' . $conn->quote($this->collection->name)];
        if ($this->criteria) {
            $sql[] = 'WHERE document_criteria("' . $this->criteria . '", document)';
        }
        if ($this->sort) {
            $orders = [];
            foreach ($this->sort as $field => $direction) {
                $orders[] = 'document_key(' . $conn->quote($field) . ', document) ' . ($direction === -1 ? 'DESC' : 'ASC');
            }
            $sql[] = 'ORDER BY ' . implode(',', $orders);
        }
        if ($this->limit) {
            $sql[] = 'LIMIT ' . $this->limit;
            if ($this->skip) {
                $sql[] = 'OFFSET ' . $this->skip;
            }
        }
        $sql = implode(' ', $sql);
        $stmt = $conn->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $documents = [];
        if (!$this->projection) {
            foreach ($result as $doc) {
                $documents[] = json_decode($doc['document'], true);
            }
        } else {
            $exclude = [];
            $include = [];
            foreach ($this->projection as $key => $value) {
                if ($value) {
                    $include[$key] = 1;
                } else {
                    $exclude[$key] = 1;
                }
            }
            foreach ($result as $doc) {
                $item = json_decode($doc['document'], true);
                $id = $item['_id'];
                if ($exclude) {
                    $item = array_diff_key($item, $exclude);
                }
                if ($include) {
                    $item = array_key_intersect($item, $include);
                }
                if (!isset($exclude['_id'])) {
                    $item['_id'] = $id;
                }
                $documents[] = $item;
            }
        }
        return $documents;
    }

    public function rewind(): void
    {
        if ($this->position !== false) {
            $this->position = 0;
        }
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        if ($this->position === false) {
            $this->data = $this->getData();
            $this->position = 0;
        }
        return isset($this->data[$this->position]);
    }
}

function array_key_intersect($a, $b): array
{
    $array = [];
    foreach ($a as $key => $value) {
        if (isset($b[$key])) $array[$key] = $value;
    }
    return $array;
}
