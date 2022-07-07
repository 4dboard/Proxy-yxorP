<?php yxorP\parser

namespace yxorP\parser;

use Arrayy\Arrayy;
use function is_string;

class publicSuffixList extends Arrayy
{
    public function __construct($list)
    {
        if (is_string($list)) {
            $list = require $list;
        }
        parent::__construct($list);
    }
}