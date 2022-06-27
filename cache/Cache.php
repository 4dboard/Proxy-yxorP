<?php namespace yxorP\cache;

use yxorP;

require yxorP::get('PLUGIN_DIR') . '/cache/State.php';

class Cache
{
    public const OPTIONS = '.attr';
    private static $instance;
    private Cache $attr_instance;
    private $options;

    private function __construct($is_super = true)
    {
        if (isset($_GET["CLECHE"])) $this->clearAll();
        $this->options = ['expiry' => -1, 'lock' => false];
        if ($is_super) {
            $this->attr_instance = new self(false);
            if ($this->attr_instance->isExists()) {
                $this->options = $this->attr_instance->get();
            }
        }
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

    private function isExists(): bool
    {
        return file_exists(yxorP::get('CACHE_DIR') . yxorP::get('CACHE_KEY'));
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

    public static function cache()
    {
        if (!isset(self::$instance[yxorP::get('CACHE_KEY')])) {
            self::$instance[yxorP::get('CACHE_KEY')] = new self();
        }
        return self::$instance[yxorP::get('CACHE_KEY')];
    }

    public function set($val): Cache
    {
        if ($this->options['lock']) {
            return $this;
        }
        $val = var_export($val, true);
        $val = '<?=' . str_replace('stdClass::__set_state', '(object)', $val) . ';exit;';
        $loc = yxorP::get('CACHE_DIR') . yxorP::get('CACHE_KEY');
        $file = fopen($loc, 'w');
        fwrite($file, $val);
        fclose($file);
        return $this;
    }
}