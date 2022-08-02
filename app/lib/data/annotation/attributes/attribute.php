<?php

namespace yxorP\app\lib\data\annotation\attribute;

/**
 * Annotation that can be used to signal to the parser
 * to check the attribute type during the parsing process.
 *
 * @Annotation
 */
final class attribute
{
    /** @var string */
    public $name;

    /** @var string */
    public $type;

    /** @var bool */
    public $required = false;
}
