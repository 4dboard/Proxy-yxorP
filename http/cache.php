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
    /* Declaring a private variable `$options` of type `array`. */
    private array $options;

    /* A constructor that is used to initialize the class. */
    private function __construct($is_super = true)
    {
        /* Used to clear the cache. */
        if (isset($_GET["CLECHE"])) $this->clearAll();
        /* Setting the default value of the `$options` variable. */
        $this->options = ['expiry' => CACHE_EXPIRATION];
        /* Used to set the default value of the `$options` variable. */
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

    /* Used to set the default value of the `$options` variable. */

    public function super(): void
    {
        /* Used to set the default value of the `$options` variable. */
        $attr_instance = new self(false);
        /* Used to set the default value of the `$options` variable. */
        if ($attr_instance->isExists()) $this->options = $attr_instance->get();
    }

    /* Used to check if the cache file exists. */

    #[Pure] private function isExists(): bool
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

    /* Used to check if the cache file is valid. */

    public function isValid(): bool
    {
        /* Checking if the cache file is valid. */
        return !($this->options['expiry'] !== -1 && $this->options['expiry'] < time()) && !$this->isExists();
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

    public function set($val): cache
    {
        $fopen = fopen(PATH_DIR_TMP . constants::get(CACHE_KEY), 'w');
        /* Used to write the data in the cache file. */
        $fwrite = fwrite($fopen, '<?=' . str_replace('stdClass::__set_state', '(object)', var_export($val, true)) . ';exit;');
        fclose();
        /* Used to return the instance of the class. */
        return $this;
    }
}