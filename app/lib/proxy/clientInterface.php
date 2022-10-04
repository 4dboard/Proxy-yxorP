<?php namespace yxorP\app\lib\proxy;

use yxorP\app\lib\psr\http\message\requestInterface;

interface clientInterface
{
    const VERSION = '6.5.5';

    public function send(requestInterface $request, array $options = []);

    public function sendAsync(requestInterface $request, array $options = []);

    public function request($method, $uri, array $options = []);

    public function requestAsync($method, $uri, array $options = []);

    public function getConfig($option = null);
}
