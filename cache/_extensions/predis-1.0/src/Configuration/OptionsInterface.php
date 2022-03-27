<?php /* yxorP */


namespace Predis\Configuration;


interface OptionsInterface
{

    public function getDefault($option);


    public function defined($option);


    public function __isset($option);


    public function __get($option);
}
