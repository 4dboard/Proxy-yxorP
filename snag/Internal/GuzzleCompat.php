<?php namespace yxorP\snag\Internal;

use yxorP\proxy\ClientInterface;

final class ProxyCompat
{
    public static function getBaseUri(ClientInterface $proxy)
    {
        return self::isUsingProxy5() ? $proxy->getBaseUrl() : $proxy->getConfig(self::getBaseUriOptionName());
    }

    public static function isUsingProxy5(): bool
    {
        if (defined(ClientInterface::class . '::VERSION')) {
            $version = constant(ClientInterface::class . '::VERSION');
            return version_compare($version, '5.0.0', '>=') && version_compare($version, '6.0.0', '<');
        }
        return false;
    }

    public static function getBaseUriOptionName(): string
    {
        return self::isUsingProxy5() ? 'base_url' : 'base_uri';
    }

    public static function applyRequestOptions(array $options, array $requestOptions): array
    {
        if (self::isUsingProxy5()) {
            if (!isset($options['defaults'])) {
                $options['defaults'] = [];
            }
            foreach ($requestOptions as $key => $value) {
                if (!isset($options['defaults'][$key])) {
                    $options['defaults'][$key] = $value;
                }
            }
            return $options;
        }
        foreach ($requestOptions as $key => $value) {
            if (!isset($options[$key])) {
                $options[$key] = $value;
            }
        }
        return $options;
    }
}