<?php /* yxorP */


namespace Predis\Profile;

use InvalidArgumentException;
use Predis\ClientException;
use ReflectionClass;
use ReflectionException;


final class Factory
{
    private static array $profiles = array(
        '2.0' => RedisVersion200::class,
        '2.2' => RedisVersion220::class,
        '2.4' => RedisVersion240::class,
        '2.6' => RedisVersion260::class,
        '2.8' => RedisVersion280::class,
        '3.0' => RedisVersion300::class,
        'default' => RedisVersion300::class,
        'dev' => RedisUnstable::class,
    );


    private function __construct()
    {

    }


    /**
     * @throws ClientException
     */
    public static function getDefault()
    {
        return self::get('default');
    }

    /**
     * @throws ClientException
     */
    public static function get($version)
    {
        if (!isset(self::$profiles[$version])) {
            throw new ClientException("Unknown server profile: '$version'.");
        }

        $profile = self::$profiles[$version];

        return new $profile();
    }

    /**
     * @throws ClientException
     */
    public static function getDevelopment()
    {
        return self::get('dev');
    }

    /**
     * @throws ReflectionException
     */
    public static function define($alias, $class): void
    {
        $reflection = new ReflectionClass($class);

        if (!$reflection->isSubclassOf(ProfileInterface::class)) {
            throw new InvalidArgumentException("The class '$class' is not a valid profile class.");
        }

        self::$profiles[$alias] = $class;
    }
}
