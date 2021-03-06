<?php namespace yxorP\app\lib\http;
class domain
{
    public static function domain_host(): ?string
    {
        return self::domain_trim(self::domain(), self::domain_sub());
    }

    private static function domain_trim($domain, $subdomain): ?string
    {
        return (str_starts_with($domain, $subdomain)) ? substr($domain, strlen($subdomain)) : $domain;
    }

    private static function domain(): ?string
    {
        return YXORP_HTTP_HOST ?: store::handler(ENV_DEFAULT_HOST);
    }

    public static function domain_sub(): ?string
    {
        return (count(explode(CHAR_PERIOD, self::domain())) > 2) ? strtok(self::domain(), CHAR_PERIOD) . CHAR_PERIOD : null;
    }

    public static function domain_host_target(): ?string
    {
        return self::domain_trim(self::domain_target(), self::domain_sub_target());
    }

    public static function domain_target(): mixed
    {
        return YXORP_TARGET_URL ?: store::handler(ENV_DEFAULT_TARGET);
    }

    public static function domain_sub_target(): ?string
    {
        return (count(explode(CHAR_PERIOD, self::domain_target())) > 2) ? strtok(self::domain_target(), CHAR_PERIOD) . CHAR_PERIOD : null;
    }
}
