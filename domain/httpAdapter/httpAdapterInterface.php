<?php namespace yxorP\domain\HttpAdapter;

interface httpAdapterInterface
{
    public function getContent($url, $timeout = 5);
}