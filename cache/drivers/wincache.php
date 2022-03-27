<?php /* yxorP */


use JetBrains\PhpStorm\ArrayShape;

class cache_wincache extends BaseCache implements cache_driver
{


    public function __construct($config = array())
    {
        $this->setup($config);
        if (!$this->checkdriver() && !isset($config['skipError'])) {
            $this->fallback = true;
        }

    }


    public function checkdriver(): bool
    {
        if (extension_loaded('wincache') && function_exists("wincache_ucache_set")) {
            return true;
        }
        $this->fallback = true;
        return false;
    }


    public function driver_set($keyword, $value = "", $time = 300, $option = array()): bool
    {
        if (isset($option['skipExisting']) && $option['skipExisting'] == true) {
            return wincache_ucache_add($keyword, $value, $time);
        }

        return wincache_ucache_set($keyword, $value, $time);
    }


    public function driver_get($keyword, $option = array())
    {


        $x = wincache_ucache_get($keyword, $suc);

        if ($suc == false) {
            return null;
        }

        return $x;
    }


    public function driver_delete($keyword, $option = array()): bool
    {
        return wincache_ucache_delete($keyword);
    }


    #[ArrayShape(["info" => "string", "size" => "string", "data" => "array"])] public function driver_stats($option = array()): array
    {
        return array(
            "info" => "",
            "size" => "",
            "data" => wincache_scache_info(),
        );
    }


    public function driver_clean($option = array()): bool
    {
        wincache_ucache_clear();
        return true;
    }


    public function driver_isExisting($keyword): ?bool
    {
        if (wincache_ucache_exists($keyword)) {
            return true;
        }

        return false;
    }
}