<?php /* yxorP */

use JetBrains\PhpStorm\ArrayShape;

class cache_example extends BaseCache implements cache_driver
{
    public function __construct($config = array())
    {
        $this->setup($config);
        if (!$this->checkdriver() && !isset($config['skipError'])) {
            throw new RuntimeException("Can't use this driver for your website!");
        }

    }

    public function checkdriver(): bool
    {

        return false;
    }

    public function connectServer(): void
    {

    }

    public function driver_set($keyword, $value = "", $time = 300, $option = array())
    {

    }

    public function driver_get($keyword, $option = array())
    {
        return null;
    }

    public function driver_delete($keyword, $option = array())
    {

    }

    #[ArrayShape(["info" => "string", "size" => "string", "data" => "string"])] public function driver_stats($option = array()): array
    {
        return array(
            "info" => "",
            "size" => "",
            "data" => "",
        );
    }

    public function driver_clean($option = array())
    {

    }

    public function driver_isExisting($keyword): void
    {

    }
}