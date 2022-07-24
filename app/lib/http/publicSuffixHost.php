<?php namespace yxorP\app\lib\http;

use SimpleXMLElement;
use yxorP\app\yP;

class publicSuffixHost
{

    public function registrableDomain(): SimpleXMLElement
    {
        return new SimpleXMLElement('<note>' . yP::store(ENV_DEFAULT_HOST) . '</note>');
    }
}