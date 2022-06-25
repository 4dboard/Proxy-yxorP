<?php namespace yxorP\cache;

use yxorP;

class Cache
{
    public const OPTIONS = '.attr';
    private static $instance;
    private Cache $attr_instance;
    private $options;


    private function __construct($is_super = true)
    {
        $this->options = ['expiry' => -1, 'lock' => false];
        if ($is_super) {
            $this->attr_instance = new self(false);
            if ($this->attr_instance->isExists()) {
                $this->options = $this->attr_instance->get();
            }
        }
    }

    public static function cache()
    {
        if (!isset(self::$instance[yxorP::get('CACHE_KEY')])) {
            self::$instance[yxorP::get('CACHE_KEY')] = new self(yxorP::get('CACHE_KEY'));
        }
        return self::$instance[yxorP::get('CACHE_KEY')];
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

    public function get()
    {
        if (!$this->isValid()) {
            return;
        }
        @include yxorP::get('CACHE_DIR') . yxorP::get('CACHE_KEY');
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

    public function set($val): Cache
    {
        if ($this->options['lock']) return $this;
        $_fopen = fopen(yxorP::get('CACHE_DIR') . yxorP::get('CACHE_KEY') . ".cache", 'xb');
        $_cache = '<?=' . str_replace('std/**

 *

 */
class::__set_state', '(object)', var_export($val, true)) . ';exit;';
        $_write = fwrite($_fopen, $_cache);
        fclose();
        return $this;
    }

    private function isExists(): bool
    {
        return file_exists(yxorP::get('CACHE_DIR') . yxorP::get('CACHE_KEY'));
    }
}