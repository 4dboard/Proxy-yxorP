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
    public string $name;

    /** @var string */
    public string $type;

    /** @var bool */
    public bool $required = false;
}
