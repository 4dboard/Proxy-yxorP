<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Language;

class VisitorOperation
{
    /** @var bool */
    public $doBreak;

    /** @var bool */
    public $doContinue;

    /** @var bool */
    public $removeNode;
}
