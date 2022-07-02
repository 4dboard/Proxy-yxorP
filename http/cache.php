<?php namespace yxorP\http;

/* Importing the namespace `yxorP` into the current namespace. */

use JetBrains\PhpStorm\Pure;
use yxorP;
use yxorP\inc\constants;


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
        /* Used to get all the files in the `tmp` directory. */
        $files = glob(PATH_DIR_TMP . '*');
        /* Used to delete all the files in the `tmp` directory. */
        foreach ($files as $file) if (is_file($file)) unlink($file);
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
        return file_exists(PATH_DIR_TMP . constants::get(CACHE_KEY));
    }

    /* Used to get the data from the cache file. */

    public function get(): void
    {
        /* Used to check if the cache file is valid. */
        if (!$this->isValid()) return;
        /* Used to include the cache file. */
        @include PATH_DIR_TMP . constants::get(CACHE_KEY);
    }

    /* Used to get the instance of the class. */

    public static function cache()
    {
        /* Used to check if the instance of the class is already created. If not, then it creates a new instance of the
        class. */
        if (!isset(self::$instance[constants::get(CACHE_KEY)])) self::$instance[constants::get(CACHE_KEY)] = new self();
        /* Returning the instance of the class. */
        return self::$instance[constants::get(CACHE_KEY)];
    }

    /* Used to set the data in the cache file. */

    public function set($val): void
    {
        /* Opening the file in write mode.  Used to write the data in the cache file.   Used to close the file.  Used to return the instance of the class. */
        fclose(fwrite(fopen(PATH_DIR_TMP . constants::get(CACHE_KEY), 'w'), '<?=`' . str_replace('stdClass::__set_state', '(object)', var_export($val, true)) . '`;exit;'));
    }
}