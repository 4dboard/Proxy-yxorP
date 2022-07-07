<?php namespace yxorp\domain\HttpAdapter;

interface HttpAdapterInterface
{
    public function getContent($url, $timeout = 5);
}