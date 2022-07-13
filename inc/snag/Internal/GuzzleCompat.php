<?php

namespace yxorP\inc\snag\Internal;

use yxorP\inc\proxy\ClientInterface;

/**
 * @internal
 */
final class proxyCompat
{
    /**
     * Get the base URL/URI, which depends on the proxy version.
     *
     * @param ClientInterface $proxy
     *
     * @return mixed
     */
    public static function getBaseUri(ClientInterface $proxy): mixed
    {
        // TODO: validate this by running PHPStan with proxy 5
        return self::isUsingproxy5()
            ? $proxy->getBaseUrl() // @phpstan-ignore-line
            : $proxy->getConfig(self::getBaseUriOptionName());
    }

    /**
     * @return bool
     */
    public static function isUsingproxy5(): bool
    {
        if (defined(ClientInterface::class . '::VERSION')) {
            $version = constant(ClientInterface::class . '::VERSION');

            return version_compare($version, '5.0.0', '>=')
                && version_compare($version, '6.0.0', '<');
        }

        return false;
    }

    /**
     * Get the base URL/URI option name, which depends on the proxy version.
     *
     * @return string
     */
    public static function getBaseUriOptionName(): string
    {
        return self::isUsingproxy5() ? 'base_url' : 'base_uri';
    }

    /**
     * Apply the given $requestOptions to the proxy $options array, if they are
     * not already set.
     *
     * The layout of request options differs in proxy 5 to 6/7; in proxy 5
     * request options live in a 'defaults' array, but in 6/7 they are in the
     * top level
     *
     * @param array $options
     * @param array $requestOptions
     *
     * @return array
     */
    public static function applyRequestOptions(array $options, array $requestOptions): array
    {
        if (self::isUsingproxy5()) {
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
