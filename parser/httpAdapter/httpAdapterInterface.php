<?php namespace yxorP\parser\HttpAdapter;

interface httpAdapterInterface
{
    public function getContent($url, $timeout = 5);
}