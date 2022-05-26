<?php /* yxorP */

interface cache_driver
{

    public function __construct($config = array());

    public function checkdriver();

    public function driver_set(
        $keyword,
        $value = "",
        $time = 300,
        $option = array()
    );

    public function driver_get($keyword, $option = array());

    public function driver_stats($option = array());

    public function driver_delete($keyword, $option = array());

    public function driver_clean($option = array());
}