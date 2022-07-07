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
namespace Pdp;

/**
 * Public Suffix List.
 */
class PublicSuffixList extends \Arrayy\Arrayy
{
    /**
     * Public constructor.
     *
     * @param array|string $list Array representing Public Suffix List or PHP Public Suffix List file
     */
    public function __construct($list)
    {
        if (\is_string($list)) {
            /** @noinspection PhpIncludeInspection */
            $list = require $list;
        }

        parent::__construct($list);
    }
}
