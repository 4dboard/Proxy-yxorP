<?php namespace yxorP\app\lib\data\mongodb\lite;

use ErrorException;
use InvalidArgumentException;
use PDO;
use yxorP\app\lib\http\mongoDB\BSON\ObjectId;
use function array_intersect;
use function array_intersect_key;
use function array_keys;
use function chr;
use function count;
use function explode;
use function implode;
use function in_array;
use function is_array;
use function is_callable;
use function is_null;
use function is_numeric;
use function is_object;
use function is_string;
use function json_decode;
use function json_encode;
use function mb_strlen;
use function mb_strtolower;
use function microtime;
use function pack;
use function preg_match;
use function preg_match_all;
use function random_int;
use function sprintf;
use function strpos;
use function strtr;
use function substr;
use function trim;
use function uniqid;
use function unlink;
use function var_export;

class Database
{
    public const DSN_PATH_MEMORY = ':memory:';
    public PDO $connection;
    protected array $collections = [];
    protected string $path;
    protected array $document_criterias = [];

    public function __construct(string $path = self::DSN_PATH_MEMORY, array $options = [])
    {
        $dns = "sqlite:{$path}";
        $this->path = $path;
        $this->connection = new PDO($dns, null, null, $options);
        $database = $this;
        $this->connection->sqliteCreateFunction('document_key', function ($key, $document) {
            $document = json_decode($document, true);
            $val = '';
            if (str_contains($key, '.')) {
                $keys = explode('.', $key);
                $val = match (count($keys)) {
                    2 => $document[$keys[0]][$keys[1]] ?? '',
                    3 => $document[$keys[0]][$keys[1]][$keys[2]] ?? '',
                    default => $document[$keys[0]] ?? '',
                };
            } else {
                $val = $document[$key] ?? '';
            }
            return is_array($val) || is_object($val) ? json_encode($val) : $val;
        }, 2);
        $this->connection->sqliteCreateFunction('document_criteria', function ($funcid, $document) use ($database) {
            $document = json_decode($document, true);
            return $database->callCriteriaFunction($funcid, $document);
        }, 2);
        $this->connection->exec('PRAGMA journal_mode = MEMORY');
        $this->connection->exec('PRAGMA synchronous = OFF');
        $this->connection->exec('PRAGMA PAGE_SIZE = 4096');
    }

    public function callCriteriaFunction(string $id, array $document): mixed
    {
        return isset($this->document_criterias[$id]) ? $this->document_criterias[$id]($document) : false;
    }

    public function registerCriteriaFunction(mixed $criteria): ?string
    {
        $id = uniqid('criteria');
        if (is_callable($criteria)) {
            $this->document_criterias[$id] = $criteria;
            return $id;
        }
        if (is_array($criteria)) {
            $fn = null;
            eval('$fn = function($document) { return ' . UtilArrayQuery::buildCondition($criteria) . '; };');
            $this->document_criterias[$id] = $fn;
            return $id;
        }
        return null;
    }

    public function vacuum(): void
    {
        $this->connection->query('VACUUM');
    }

    public function drop(): void
    {
        if ($this->path != static::DSN_PATH_MEMORY) {
            unlink($this->path);
        }
    }

    public function dropCollection(string $name): void
    {
        $this->connection->exec("DROP TABLE `{$name}`");
        unset($this->collections[$name]);
    }

    public function listCollections(): array
    {
        foreach ($this->getCollectionNames() as $name) {
            if (!isset($this->collections[$name])) {
                $this->collections[$name] = new collection($name, $this);
            }
        }
        return $this->collections;
    }

    public function getCollectionNames(): array
    {
        $stmt = $this->connection->query("SELECT name FROM sqlite_master WHERE type='table' AND name!='sqlite_sequence';");
        $tables = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $names = [];
        foreach ($tables as $table) {
            $names[] = $table['name'];
        }
        return $names;
    }

    public function __get($collection)
    {
        return $this->selectCollection($collection);
    }

    public function selectCollection(string $name): collection
    {
        if (!isset($this->collections[$name])) {
            if (!in_array($name, $this->getCollectionNames())) {
                $this->createCollection($name);
            }
            $this->collections[$name] = new collection($name, $this);
        }
        return $this->collections[$name];
    }

    public function createCollection(string $name): void
    {
        $this->connection->exec("CREATE TABLE `{$name}` ( id INTEGER PRIMARY KEY AUTOINCREMENT, document TEXT )");
    }
}

class UtilArrayQuery
{
    protected static $closures = [];

    public static function closureCall(string $uid, mixed $doc)
    {
        return call_user_func_array(self::$closures[$uid], [$doc]);
    }

    /**
     * @throws \Exception
     */
    public static function buildCondition(mixed $criteria, string $concat = ' && '): string
    {
        $fn = [];
        foreach ($criteria as $key => $value) {
            switch ($key) {
                case '$and':
                    $_fn = [];
                    foreach ($value as $v) {
                        $_fn[] = self::buildCondition($v);
                    }
                    $fn[] = '(' . implode(' && ', $_fn) . ')';
                    break;
                case '$or':
                    $_fn = [];
                    foreach ($value as $v) {
                        $_fn[] = self::buildCondition($v);
                    }
                    $fn[] = '(' . implode(' || ', $_fn) . ')';
                    break;
                case '$where':
                    if (is_string($value) || !is_callable($value)) {
                        throw new InvalidArgumentException($key . ' Function should be callable');
                    }
                    $uid = uniqid('mongoliteCallable') . bin2hex(random_bytes(5));
                    self::$closures[$uid] = $value;
                    $fn[] = '\\MongoLite\\UtilArrayQuery::closureCall("' . $uid . '", $document)';
                    break;
                default:
                    $d = '$document';
                    if (str_contains($key, '(') || str_contains($key, '"') || str_contains($key, "'")) {
                        throw new InvalidArgumentException('Unallowed characters used in filter keys');
                    }
                    if (str_contains($key, '.')) {
                        $keys = explode('.', $key);
                        foreach ($keys as $k) {
                            $d .= '[\'' . $k . '\']';
                        }
                    } else {
                        $d .= '[\'' . $key . '\']';
                    }
                    if (is_array($value)) {
                        $fn[] = "\\MongoLite\\UtilArrayQuery::check((isset({$d}) ? {$d} : null), " . var_export($value, true) . ')';
                    } else {
                        if (is_null($value)) {
                            $fn[] = "(!isset({$d}))";
                        } else {
                            $_value = var_export($value, true);
                            $fn[] = "(isset({$d}) && (
                                is_array({$d}) && is_string({$_value})
                                    ? in_array({$_value}, {$d})
                                    : {$d}=={$_value}
                                )
                            )";
                        }
                    }
            }
        }
        return count($fn) ? trim(implode($concat, $fn)) : 'true';
    }

    /**
     * @throws \ErrorException
     */
    public static function check(mixed $value, array $condition): bool
    {
        $keys = array_keys($condition);
        foreach ($keys as $key) {
            if ($key === '$options') continue;
            if (!self::evaluate($key, $value, $condition[$key])) {
                return false;
            }
        }
        return true;
    }

    /**
     * @throws \ErrorException
     */
    private static function evaluate(string $func, mixed $a, mixed $b): int|bool
    {
        $r = false;
        if (is_null($a) && $func != '$exists') {
            return false;
        }
        switch ($func) {
            case '$eq':
                $r = $a === $b;
                break;
            case '$ne':
                $r = $a != $b;
                break;
            case '$gte':
                if ((is_numeric($a) && is_numeric($b)) || (is_string($a) && is_string($b))) {
                    $r = $a >= $b;
                }
                break;
            case '$gt':
                if ((is_numeric($a) && is_numeric($b)) || (is_string($a) && is_string($b))) {
                    $r = $a > $b;
                }
                break;
            case '$lte':
                if ((is_numeric($a) && is_numeric($b)) || (is_string($a) && is_string($b))) {
                    $r = $a <= $b;
                }
                break;
            case '$lt':
                if ((is_numeric($a) && is_numeric($b)) || (is_string($a) && is_string($b))) {
                    $r = $a < $b;
                }
                break;
            case '$in':
                if (is_array($a)) {
                    $r = is_array($b) ? count(array_intersect($a, $b)) : false;
                } else {
                    $r = is_array($b) && in_array($a, $b);
                }
                break;
            case '$nin':
                if (is_array($a)) {
                    $r = is_array($b) && count(array_intersect($a, $b)) === 0;
                } else {
                    $r = is_array($b) && in_array($a, $b) === false;
                }
                break;
            case '$has':
                if (is_array($b)) throw new InvalidArgumentException('Invalid argument for $has array not supported');
                if (!is_array($a)) $a = @json_decode($a, true) ?: [];
                $r = in_array($b, $a);
                break;
            case '$all':
                if (!is_array($a)) $a = @json_decode($a, true) ?: [];
                if (!is_array($b)) throw new InvalidArgumentException('Invalid argument for $all option must be array');
                $r = count(array_intersect_key($a, $b)) === count($b);
                break;
            case '$regex':
            case '$preg':
            case '$match':
            case '$not':
                $r = (boolean)@preg_match(isset($b[0]) && $b[0] === '/' ? $b : '/' . $b . '/iu', $a, $match);
                if ($func === '$not') {
                    $r = !$r;
                }
                break;
            case '$size':
                if (!is_array($a)) $a = @json_decode($a, true) ?: [];
                $r = (int)$b === count($a);
                break;
            case '$mod':
                if (!is_array($b)) throw new InvalidArgumentException('Invalid argument for $mod option must be array');
                $r = $a % $b[0] === $b[1] ?? 0;
                break;
            case '$exists':
                $r = $b ? !is_null($a) : is_null($a);
                break;
            case '$fuzzy':
            case '$text':
                $distance = 3;
                $minScore = 0.7;
                if (is_array($b) && isset($b['$search'])) {
                    if (isset($b['$minScore']) && is_numeric($b['$minScore'])) $minScore = $b['$minScore'];
                    if (isset($b['$distance']) && is_numeric($b['$distance'])) $distance = $b['$distance'];
                    $b = $b['search'];
                }
                $r = fuzzy_search($b, $a, $distance) >= $minScore;
                break;
            default:
                throw new ErrorException("Condition not valid ... Use {$func} for custom operations");
        }
        return $r;
    }
}

function levenshtein_utf8(string $s1, string $s2): int
{
    $map = [];
    $utf8_to_extended_ascii = function ($str) use ($map) {
        $matches = [];
        if (!preg_match_all('/[\xC0-\xF7][\x80-\xBF]+/', $str, $matches)) return $str;
        foreach ($matches[0] as $mbc) {
            if (!isset($map[$mbc])) $map[$mbc] = chr(128 + count($map));
        }
        return strtr($str, $map);
    };
    return levenshtein($utf8_to_extended_ascii($s1), $utf8_to_extended_ascii($s2));
}

function fuzzy_search(string $search, string $text, $distance = 3): float
{
    $needles = explode(' ', mb_strtolower($search, 'UTF-8'));
    $tokens = explode(' ', mb_strtolower($text, 'UTF-8'));
    $score = 0;
    foreach ($needles as $needle) {
        foreach ($tokens as $token) {
            if (str_contains($token, $needle)) {
                $score += 1;
            } else {
                $d = levenshtein_utf8($needle, $token);
                if ($d <= $distance) {
                    $l = mb_strlen($token, 'UTF-8');
                    $matches = $l - $d;
                    $score += ($matches / $l);
                }
            }
        }
    }
    return $score / count($needles);
}

/**
 * @throws \Exception
 */
function createMongoDbLikeId(): string
{
    if (class_exists('MongoDB\\BSON\\ObjectId')) {
        $objId = new ObjectId();
        return (string)$objId;
    }
    $timestamp = microtime(true);
    $processId = random_int(10000, 99999);
    $id = random_int(10, 1000);
    $result = '';
    $bin = sprintf('%s%s%s%s', pack('N', $timestamp * 10000), substr(md5(uniqid()), 0, 3), pack('n', $processId), substr(pack('N', $id), 1, 3));
    for ($i = 0; $i < 12; $i++) {
        $result .= sprintf('%02x', ord($bin[$i]));
    }
    return $result;
}
