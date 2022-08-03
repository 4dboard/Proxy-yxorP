<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language;

class VisitorOperation
{
    /** @var bool */
    public bool $doBreak;

    /** @var bool */
    public bool $doContinue;

    /** @var bool */
    public bool $removeNode;
}
