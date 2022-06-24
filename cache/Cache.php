<?php

namespace yxorP\cache;

use yxorP;


class Cache
{
    public const EXT = '.tmp';
    public const OPTIONS = '.attr';
    public static bool $is_pretty = false;
    private static $instance;
    private Cache $attr_instance;
    private mixed $path;
    private $key;
    private $options;

    private function __construct($key, $is_super = true)
    {

        $this->path = yxorP::get('CACHE_DIR');

        $this->key = $key;
        $this->options = ['expiry' => -1, 'lock' => false];
        if ($is_super) {
            $this->attr_instance = new self($this->key . self::OPTIONS, false);
            if ($this->attr_instance->isExists()) {
                $this->options = $this->attr_instance->get();
            }
        }
    }

    private function isExists(): bool
    {
        return file_exists($this->path . $this->key);
    }

    public function get()
    {
        if (!$this->isValid()) {
            return;
        }
        @include $this->path . $this->key;
    }

    public function isValid(): bool
    {
        if ($this->options['expiry'] !== -1 && $this->options['expiry'] < time()) {
            return false;
        }
        if (!$this->isExists()) {
            return false;
        }
        return true;
    }

    public static function cache($key)
    {
        if (!isset(self::$instance[$key])) {
            self::$instance[$key] = new self($key);
        }
        return self::$instance[$key];
    }

    public static function clearAll(): void
    {

        $files = glob(yxorP::get('CACHE_DIR') . '*');


        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
    }

    public function set($val): Cache
    {
        $key = $this->key;
        if ($this->options['lock']) {
            return $this;
        }

        $val = var_export($val, true);

        if (!self::$is_pretty) {
            $val = str_replace(["\\n", ",  '", " => "], ["", ",'", "=>"], $val);
        }

        $val = str_replace('stdClass::__set_state', '(object)', $val);
        $tmp = $this->path . "$key." . uniqid('', true) . self::EXT;
        $file = fopen($tmp, 'xb');
        fwrite($file, '<?=' . $val . ';exit;');
        fclose($file);
        rename($tmp, $this->path . $key);
        return $this;
    }
}
