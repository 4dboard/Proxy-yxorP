<?php namespace yxorP\app\lib\http;

use Exception;
use SQLite3;
use function file_exists;
use function is_array;
use function is_numeric;
use function is_string;
use const SQLITE3_ASSOC;

class indexLite
{
    protected string $path;
    protected SQLite3 $db;

    /**
     * @throws \Exception
     */
    public function __construct(string $path, array $options = [])
    {
        $this->path = $path;
        if (!file_exists($this->path)) {
            throw new Exception("Index <{$path}> does not exist.");
        }
        $this->db = new SQLite3($this->path);
        $this->db->exec('PRAGMA journal_mode = MEMORY');
        $this->db->exec('PRAGMA synchronous = OFF');
        $this->db->exec('PRAGMA PAGE_SIZE = 4096');
    }

    public function add($id, array $document, $safe = true)
    {
        if ($safe) {
            $this->remove($id);
        }
        $document['id'] = $id;
        $fields = array_keys($document);
        $stmt = $this->db->prepare("INSERT INTO documents (" . implode(',', array_map(fn($f) => $this->db->escapeString($f), $fields)) . ") VALUES(" . implode(',', array_map(fn($f) => ":{$f}", $fields)) . ")");
        foreach ($fields as $field) {
            $document[$field] = $this->stringify($document[$field]);
            $stmt->bindParam(":{$field}", $document[$field]);
        }
        $stmt->execute();
    }

    public function remove($id)
    {
        $stmt = $this->db->prepare("DELETE FROM documents WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    protected function stringify($value): string
    {
        if (is_string($value)) {
            return $value;
        }
        if (!$value) {
            return '';
        }
        if (is_numeric($value)) {
            return $value . '';
        }
        if (is_array($value)) {
            $str = [];
            array_walk_recursive($value, function ($val) use (&$str) {
                if (is_string($val) && strlen($val) > 15) {
                    $str[] = $val;
                }
            });
            return implode(' ', $str);
        }
        return '';
    }

    public function search(string $query, ?array $fields = null): array
    {
        if (!trim($query)) {
            return [];
        }
        $fields = $fields ?? ['*'];
        $stmt = $this->db->prepare("SELECT " . implode(',', array_map(fn($f) => $this->db->escapeString($f), $fields)) . " FROM documents WHERE documents MATCH :query ORDER BY rank");
        $stmt->bindParam(':query', $query);
        $result = $stmt->execute();
        $hits = [];
        while ($hit = $result->fetchArray(SQLITE3_ASSOC)) {
            $hits[] = $hit;
        }
        return $hits;
    }
}
