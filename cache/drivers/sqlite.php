<?php /* yxorP */


use JetBrains\PhpStorm\ArrayShape;

class cache_sqlite extends BaseCache implements cache_driver
{

    public const SQLITE_DIR = 'sqlite';

    public const INDEXING_FILE = 'indexing';


    public int $max_size = 10;


    public $instant = array();

    public $indexing;

    public string $path = "";


    public int $currentDB = 1;


    public function __construct($config = array())
    {

        $this->setup($config);
        if (!$this->checkdriver() && !isset($config['skipError'])) {
            $this->fallback = true;
        }

        if (!file_exists($this->getPath() . "/" . self::SQLITE_DIR) && !mkdir($concurrentDirectory = $this->getPath() . "/" . self::SQLITE_DIR, $this->__setChmodAuto()) && !is_dir($concurrentDirectory)) {
            $this->fallback = true;
        }
        $this->path = $this->getPath() . "/" . self::SQLITE_DIR;
    }

    public function checkdriver(): bool
    {
        if (extension_loaded('pdo_sqlite') && is_writable($this->getPath())) {
            return true;
        }
        $this->fallback = true;
        return false;
    }

    public function driver_set(
        $keyword,
        $value = "",
        $time = 300,
        $option = array()
    ): bool
    {
        $skipExisting = $option['skipExisting'] ?? false;
        $toWrite = true;


        $in_cache = $this->get($keyword, $option);

        if ($skipExisting == true) {
            if ($in_cache == null) {
                $toWrite = true;
            } else {
                $toWrite = false;
            }
        }

        if ($toWrite == true) {
            try {
                $stm = $this->db($keyword)
                    ->prepare("INSERT OR REPLACE INTO `caching` (`keyword`,`object`,`exp`) values(:keyword,:object,:exp)");
                $stm->execute(array(
                    ":keyword" => $keyword,
                    ":object" => $this->encode($value),
                    ":exp" => time() + (int)$time,
                ));

                return true;
            } catch (PDOException $e) {

                try {
                    $stm = $this->db($keyword, true)
                        ->prepare("INSERT OR REPLACE INTO `caching` (`keyword`,`object`,`exp`) values(:keyword,:object,:exp)");
                    $stm->execute(array(
                        ":keyword" => $keyword,
                        ":object" => $this->encode($value),
                        ":exp" => time() + (int)$time,
                    ));
                } catch (PDOException $e) {
                    return false;
                }
            }
        }
        return false;
    }

    public function db($keyword, $reset = false)
    {

        $instant = $this->indexing($keyword);


        if (!isset($this->instant[$instant])) {

            $createTable = false;
            if (!file_exists($this->path . "/db" . $instant) || $reset == true) {
                $createTable = true;
            }
            $PDO = new PDO("sqlite:" . $this->path . "/db" . $instant);
            $PDO->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);

            if ($createTable == true) {
                $this->initDB($PDO);
            }

            $this->instant[$instant] = $PDO;
            unset($PDO);

        }

        return $this->instant[$instant];
    }

    public function indexing($keyword)
    {
        if ($this->indexing == null) {
            $createTable = false;
            if (!file_exists($this->path . "/indexing")) {
                $createTable = true;
            }

            $PDO = new PDO("sqlite:" . $this->path . "/" . self::INDEXING_FILE);
            $PDO->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);

            if ($createTable == true) {
                $this->initIndexing($PDO);
            }
            $this->indexing = $PDO;
            unset($PDO);

            $stm = $this->indexing->query("SELECT MAX(`db`) as `db` FROM `balancing`");
            $row = $stm->fetch(PDO::FETCH_ASSOC);
            if (!isset($row['db'])) {
                $db = 1;
            } elseif ($row['db'] <= 1) {
                $db = 1;
            } else {
                $db = $row['db'];
            }


            $size = file_exists($this->path . "/db" . $db) ? filesize($this->path . "/db" . $db) : 1;
            $size = round($size / 1024 / 1024, 1);


            if ($size > $this->max_size) {
                ++$db;
            }
            $this->currentDB = $db;

        }


        $stm = $this->indexing->prepare("SELECT * FROM `balancing` WHERE `keyword`=:keyword LIMIT 1");
        $stm->execute(array(
            ":keyword" => $keyword,
        ));
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        if (isset($row['db']) && $row['db'] != "") {
            $db = $row['db'];
        } else {

            $db = $this->currentDB;
            $stm = $this->indexing->prepare("INSERT INTO `balancing` (`keyword`,`db`) VALUES(:keyword, :db)");
            $stm->execute(array(
                ":keyword" => $keyword,
                ":db" => $db,
            ));
        }

        return $db;
    }

    public function initIndexing(PDO $db): void
    {


        $dir = opendir($this->path);
        while ($file = readdir($dir)) {
            if ($file !== "." && $file !== ".." && $file !== "indexing" && $file !== "dbfastcache") {
                unlink($this->path . "/" . $file);
            }
        }

        $db->exec('drop table if exists "balancing"');
        $db->exec('CREATE TABLE "balancing" ("keyword" VARCHAR PRIMARY KEY NOT NULL UNIQUE, "db" INTEGER)');
        $db->exec('CREATE INDEX "db" ON "balancing" ("db")');
        $db->exec('CREATE UNIQUE INDEX "lookup" ON "balancing" ("keyword")');

    }

    public function initDB(PDO $db): void
    {
        $db->exec('drop table if exists "caching"');
        $db->exec('CREATE TABLE "caching" ("id" INTEGER PRIMARY KEY AUTOINCREMENT, "keyword" VARCHAR UNIQUE, "object" BLOB, "exp" INTEGER)');
        $db->exec('CREATE UNIQUE INDEX "cleanup" ON "caching" ("keyword","exp")');
        $db->exec('CREATE INDEX "exp" ON "caching" ("exp")');
        $db->exec('CREATE UNIQUE INDEX "keyword" ON "caching" ("keyword")');
    }

    public function driver_get($keyword, $option = array())
    {


        try {
            $stm = $this->db($keyword)
                ->prepare("SELECT * FROM `caching` WHERE `keyword`=:keyword LIMIT 1");
            $stm->execute(array(
                ":keyword" => $keyword,
            ));
            $row = $stm->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            try {
                $stm = $this->db($keyword, true)
                    ->prepare("SELECT * FROM `caching` WHERE `keyword`=:keyword LIMIT 1");
                $stm->execute(array(
                    ":keyword" => $keyword,
                ));
                $row = $stm->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return null;
            }

        }

        if ($this->isExpired($row)) {
            $this->deleteRow($row);
            return null;
        }

        if (isset($row['id'])) {
            return $this->decode($row['object']);
        }

        return null;
    }


    public function isExpired($row): bool
    {
        return isset($row['exp']) && time() >= $row['exp'];
    }


    public function deleteRow($row)
    {
        try {
            $stm = $this->db($row['keyword'])
                ->prepare("DELETE FROM `caching` WHERE (`id`=:id) OR (`exp` <= :U) ");
            $stm->execute(array(
                ":id" => $row['id'],
                ":U" => time(),
            ));
        } catch (PDOException $e) {
            return false;
        }
    }


    public function driver_delete($keyword, $option = array())
    {
        try {
            $stm = $this->db($keyword)
                ->prepare("DELETE FROM `caching` WHERE (`keyword`=:keyword) OR (`exp` <= :U)");
            $stm->execute(array(
                ":keyword" => $keyword,
                ":U" => time(),
            ));
        } catch (PDOException $e) {
            return false;
        }


    }


    #[ArrayShape(["info" => "string", "size" => "string", "data" => "string", 'info' => "array|int[]", 'size' => "int|mixed"])] public function driver_stats($option = array()): array
    {
        $res = array(
            "info" => "",
            "size" => "",
            "data" => "",
        );
        $total = 0;
        $optimized = 0;

        $dir = opendir($this->path);
        while ($file = readdir($dir)) {
            if ($file !== "." && $file !== "..") {
                $file_path = $this->path . "/" . $file;
                $size = filesize($file_path);
                $total += $size;

                try {
                    $PDO = new PDO("sqlite:" . $file_path);
                    $PDO->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);

                    $stm = $PDO->prepare("DELETE FROM `caching` WHERE `exp` <= :U");
                    $stm->execute(array(
                        ":U" => date("U"),
                    ));

                    $PDO->exec("VACUUM;");
                    $size = filesize($file_path);
                    $optimized += $size;
                } catch (PDOException $e) {
                    $size = 0;
                    $optimized = 0;
                }


            }
        }
        $res['size'] = $optimized;
        $res['info'] = array(
            "total before removing expired entries [bytes]" => $total,
            "optimized after removing expired entries [bytes]" => $optimized,
        );

        return $res;
    }


    public function driver_clean($option = array())
    {


        $this->instant = array();
        $this->indexing = null;


        $dir = opendir($this->path);
        while ($file = readdir($dir)) {
            if ($file !== "." && $file !== "..") {
                unlink($this->path . "/" . $file);
            }
        }
    }


    public function driver_isExisting($keyword): ?bool
    {
        try {
            $stm = $this->db($keyword)
                ->prepare("SELECT COUNT(`id`) as `total` FROM `caching` WHERE `keyword`=:keyword");
            $stm->execute(array(
                ":keyword" => $keyword,
            ));
            $data = $stm->fetch(PDO::FETCH_ASSOC);
            return $data['total'] >= 1;
        } catch (PDOException $e) {
            return false;
        }
    }
}
