<?php namespace yxorP\app\lib\proxy\handler;

use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\psr\http\message\requestInterface;

class curlHandler
{
    private $factory;

    #[Pure] #[Pure] public function __construct(array $options = [])
    {
        $this->factory = $options['handle_factory'] ?? new curlFactory(3);
    }

    public function __invoke(requestInterface $request, array $options)
    {
        if (isset($options['delay'])) {
            usleep($options['delay'] * 1000);
        }
        $easy = $this->factory->create($request, $options);
        curl_exec($easy->handle);
        $easy->errno = curl_errno($easy->handle);
        return curlFactory::finish($this, $easy, $this->factory);
    }
}
