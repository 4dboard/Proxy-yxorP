<?php declare(strict_types=1);

namespace yxorp\domain;

use Arrayy\Arrayy;
use function is_string;

class PublicSuffixList extends Arrayy
{
    public function __construct($list)
    {
        if (is_string($list)) {
            $list = require $list;
        }
        parent::__construct($list);
    }
}