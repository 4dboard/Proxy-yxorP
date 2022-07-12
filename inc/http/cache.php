<?php namespace yxorP\inc\http;

/* Importing the namespace `yxorP` into the current namespace. */

use JetBrains\PhpStorm\Pure;
use yxorP;


/* A class that is used to cache data. */

class cache
{
    /* A static variable that is used to store the instance of the class. */
    private static array $instance;

    /* A constructor that is used to initialize the class. */
    private function __construct($is_super = true)
    {
        /* Used to clear the cache. */
        if (isset($_GET["CLECHE"])) $this->clearAll();
        if ($is_super) $this->super();
    }

    /* Used to clear the cache. */
    public static function clearAll(): void
    {
        /* Used to delete all the files in the `tmp` directory. */
        foreach (glob(PATH_DIR_TMP . '*') as $file) unlink($file);
    }

    public function super(): void
    {
        $attr_instance = new self(false);
        if ($attr_instance->isValid()) $attr_instance->get();
    }

    /* Used to check if the cache file exists. */

    #[Pure] public function isValid(): bool
    {
        /* Used to check if the cache file exists. */
        return file_exists(PATH_DIR_TMP_FULL);
    }

    /* Used to get the data from the cache file. */

    public function get(): void
    {
        /* Used to check if the cache file is valid. */
        if (!$this->isValid()) return;
        /* Used to include the cache file. */
        @include PATH_DIR_TMP_FULL;
    }

    /* Used to get the instance of the class. */

    public static function cache(): mixed
    {
        /* Used to check if the instance of the class is already created. If not, then it creates a new instance of the
        class. */
        if (!isset(self::$instance[CACHE_KEY])) self::$instance[CACHE_KEY] = new self();
        /* Returning the instance of the class. */
        return self::$instance[CACHE_KEY];
    }

    /* Used to set the data in the cache file. */

    public function set($val): void
    {
        $fopen = fopen(PATH_DIR_TMP_FULL, 'w');
        fwrite($fopen, '<?=' . str_replace('stdClass::__set_state', '(object)', var_export($val, true)) . ';exit;?>');
        fclose($fopen);
    }
}