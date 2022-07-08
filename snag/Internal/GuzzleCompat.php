<?php namespace yxorP\snag\Internal;

final class GuzzleCompat
{
    public static function getBaseUri(GuzzleHttp\ClientInterface $guzzle)
    {
        return self::isUsingGuzzle5() ? $guzzle->getBaseUrl() : $guzzle->getConfig(self::getBaseUriOptionName());
    }

    public static function isUsingGuzzle5(): bool
    {
        if (defined(GuzzleHttp\ClientInterface::class . '::VERSION')) {
            $version = constant(GuzzleHttp\ClientInterface::class . '::VERSION');
            return version_compare($version, '5.0.0', '>=') && version_compare($version, '6.0.0', '<');
        }
        return false;
    }

    public static function getBaseUriOptionName(): string
    {
        return self::isUsingGuzzle5() ? 'base_url' : 'base_uri';
    }

    public static function applyRequestOptions(array $options, array $requestOptions): array
    {
        if (self::isUsingGuzzle5()) {
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