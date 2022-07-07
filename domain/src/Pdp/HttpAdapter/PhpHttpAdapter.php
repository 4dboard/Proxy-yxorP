<?php

declare(strict_types=1);

/**
 * PHP Domain Parser: Public Suffix List based URL parsing.
 *
 * @see       http://github.com/jeremykendall/php-domain-parser for the canonical source repository
 *
 * @copyright Copyright (c) 2014 Jeremy Kendall (http://about.me/jeremykendall)
 * @license   http://github.com/jeremykendall/php-domain-parser/blob/master/LICENSE MIT License
 */
namespace Pdp\HttpAdapter;

/**
 * php http adapter
 */
class PhpHttpAdapter implements HttpAdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getContent($url, $timeout = 5)
    {
        $ctx = \stream_context_create(
            [
                'http' => [
                    'timeout' => $timeout,
                ],
            ]
        );

        return \file_get_contents($url, false, $ctx);
    }
}
