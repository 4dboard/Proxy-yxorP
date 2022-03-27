<?php /* yxorP */


namespace Predis\Connection;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;


class Parameters implements ParametersInterface
{
    private static array $defaults = array(
        'scheme' => 'tcp',
        'host' => '127.0.0.1',
        'port' => 6379,
        'timeout' => 5.0,
    );
    private array $parameters;

    #[Pure] public function __construct(array $parameters = array())
    {
        $this->parameters = $this->filter($parameters) + $this->getDefaults();
    }

    protected function filter(array $parameters): array
    {
        return $parameters ?: array();
    }

    protected function getDefaults(): array
    {
        return self::$defaults;
    }

    public static function create($parameters): Parameters
    {
        if (is_string($parameters)) {
            $parameters = static::parse($parameters);
        }

        return new static($parameters ?: array());
    }

    public static function parse($uri)
    {
        if (stripos($uri, 'unix') === 0) {
            // Hack to support URIs for UNIX sockets with minimal effort.
            $uri = str_ireplace('unix:///', 'unix://localhost/', $uri);
        }

        if (!($parsed = parse_url($uri)) || !isset($parsed['host'])) {
            throw new InvalidArgumentException("Invalid parameters URI: $uri");
        }

        if (isset($parsed['query'])) {
            parse_str($parsed['query'], $queryarray);
            unset($parsed['query']);

            $parsed = array_merge($parsed, $queryarray);
        }

        return $parsed;
    }

    public function __get($parameter)
    {
        return $this->parameters[$parameter] ?? null;
    }


    public function __isset($parameter)
    {
        return isset($this->parameters[$parameter]);
    }


    public function toArray(): array
    {
        return $this->parameters;
    }


    public function __sleep()
    {
        return array('parameters');
    }
}
