<?php namespace Pdp\HttpAdapter;

interface HttpAdapterInterface
{
    public function getContent($url, $timeout = 5);
}