<?php namespace yxorP\cache;

use yxorP;

require yxorP::get('PLUGIN_DIR') . '/cache/State.php';

mkdir(yxorp::set('CACHE_DIR', yxorp::get('PLUGIN_DIR') . DIRECTORY_SEPARATOR . 'tmp'));

yxorp::set('CACHE_KEY', rtrim(strtr(base64_encode(yxorp::get('SERVER')['HTTP_HOST'] . yxorp::get('SERVER')['REQUEST_URI']), '+/', '-_'), '=') . '.tmp');


yxorp::set('CACHE_TIME', @time() + (60 * 60 * 24 * 31 * 365));


class Cache
{
    public const OPTIONS = '.attr';
    private static $instance;
    private Cache $attr_instance;
    private $options;

    private function __construct($is_super = true)
    {


        if (isset($_GET["CLECHE"])) $this->clearAll();
        $this->options = ['expiry' => yxorp::get('CACHE_DIR')];
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
        @include yxorP::get('CACHE_DIR') . DIRECTORY_SEPARATOR . yxorP::get('CACHE_KEY');
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
        echo yxorP::get('CACHE_DIR') . DIRECTORY_SEPARATOR . yxorP::get('CACHE_KEY');
        $loc = fopen(yxorP::get('CACHE_DIR') . DIRECTORY_SEPARATOR . yxorP::get('CACHE_KEY'), 'w');
        $file = fwrite($loc, '<?=' . str_replace('stdClass::__set_state', '(object)', var_export($val, true)) . ';exit;');
        fclose($file);
        return $this;
    }
}