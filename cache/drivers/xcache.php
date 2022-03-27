<?php /* yxorP */


use JetBrains\PhpStorm\ArrayShape;

class cache_xcache extends BaseCache implements cache_driver
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

        if (extension_loaded('xcache') && function_exists("xcache_get")) {
            return true;
        }
        $this->fallback = true;
        return false;

    }


    public function driver_set($keyword, $value = "", $time = 300, $option = array()): bool
    {

        if (isset($option['skipExisting']) && $option['skipExisting'] == true) {
            if (!$this->isExisting($keyword)) {
                return xcache_set($keyword, serialize($value), $time);
            }
        } else {
            return xcache_set($keyword, serialize($value), $time);
        }
        return false;
    }


    public function driver_get($keyword, $option = array())
    {


        $data = unserialize(xcache_get($keyword));
        if ($data == "") {
            return null;
        }
        return $data;
    }


    public function driver_delete($keyword, $option = array())
    {
        return xcache_unset($keyword);
    }


    #[ArrayShape(["info" => "string", "size" => "string", "data" => "string", 'data' => "array|mixed"])] public function driver_stats($option = array()): array
    {
        $res = array(
            "info" => "",
            "size" => "",
            "data" => "",
        );

        try {
            $res['data'] = xcache_list(XC_TYPE_VAR, 100);
        } catch (Exception $e) {
            $res['data'] = array();
        }
        return $res;
    }


    public function driver_clean($option = array()): bool
    {
        $cnt = xcache_count(XC_TYPE_VAR);
        for ($i = 0; $i < $cnt; $i++) {
            xcache_clear_cache(XC_TYPE_VAR, $i);
        }
        return true;
    }


    public function driver_isExisting($keyword)
    {
        return xcache_isset($keyword);
    }
}