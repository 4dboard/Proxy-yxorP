<?php /* yxorP */

use JetBrains\PhpStorm\ArrayShape;

class cache_apc extends BaseCache implements cache_driver
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

        if (extension_loaded('apc') && ini_get('apc.enabled')) {
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
    ): bool|array
    {
        if (isset($option['skipExisting']) && $option['skipExisting'] === true) {
            return apc_add($keyword, $value, $time);
        }

        return apc_store($keyword, $value, $time);
    }

    public function driver_get($keyword, $option = array())
    {
        $data = apc_fetch($keyword, $bo);
        if ($bo === false) {
            return null;
        }
        return $data;

    }

    public function driver_delete($keyword, $option = array()): array|bool
    {
        return apc_delete($keyword);
    }

    #[ArrayShape(["info" => "string", "size" => "string", "data" => "string", 'data' => "array|bool"])] public function driver_stats($option = array()): array
    {
        $res = array(
            "info" => "",
            "size" => "",
            "data" => "",
        );

        try {
            $res['data'] = apc_cache_info("user");
        } catch (Exception $e) {
            $res['data'] = array();
        }

        return $res;
    }

    public function driver_clean($option = array())
    {
        @apc_clear_cache();
        @apc_clear_cache("user");
    }

    public function driver_isExisting($keyword): bool
    {
        return (bool)apc_exists($keyword);
    }
}