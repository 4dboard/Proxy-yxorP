<?php namespace yxorP\proxzle;

use yxorP\psr\Http\Message\RequestInterface;

interface ClientInterface
{
    const VERSION = '6.5.4';

    public function send(RequestInterface $request, array $options = []);

    public function sendAsync(RequestInterface $request, array $options = []);

    public function request($method, $uri, array $options = []);

    public function requestAsync($method, $uri, array $options = []);

    public function getConfig($option = null);
}