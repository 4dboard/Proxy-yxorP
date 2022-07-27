<?php namespace yxorP\app\lib\http;
/**
 * It's a class that's used to dispatch events.
 */
class domain
{


    /**
     * @return string|null
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     *
     */
    public static function domain_host(): ?string
    {
        return self::domain_trim(self::domain(), self::domain_sub());
    }

    /**
     *
     */
    public static function domain_sub(): ?string
    {
        return (count(explode(CHAR_PERIOD, self::domain())) > 2) ? strtok(self::domain(), CHAR_PERIOD) . CHAR_PERIOD : null;
    }

    /**
     *
     */
    public static function domain_host_target(): mixed
    {

        return self::domain_trim(self::domain_target(), self::domain_sub_target());
    }

    /**
     * @return string|null
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     */

    /**
     *
     */
    public static function domain_target(): mixed
    {
        return YXORP_TARGET_URL ?: store::store(ENV_DEFAULT_TARGET);
    }

    /**
     * @return void
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     */

    /**
     *
     */
    public static function domain_sub_target(): ?string
    {

        return (count(explode(CHAR_PERIOD, self::domain_target())) > 2) ? strtok(self::domain_target(), CHAR_PERIOD) . CHAR_PERIOD : null;
    }

    /**
     * @return void
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     */

    /**
     * @return string|null
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     */
    private static function domain_trim($domain, $subdomain): ?string
    {
        return (str_starts_with($domain, $subdomain)) ? substr($domain, strlen($subdomain)) : $domain;
    }

    /**
     * @return string|null
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     */

    /**
     * @return string|null
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     */
    private static function domain(): ?string
    {
        return YXORP_HTTP_HOST ?: store::store(ENV_DEFAULT_HOST);
    }

}