<?php

namespace yxorP\app\lib\data\annotation\attribute;

use InvalidArgumentException;
use function get_class;
use function gettype;
use function in_array;
use function is_object;
use function is_scalar;
use function sprintf;

/**
 * Annotation that can be used to signal to the parser
 * to check the available values during the parsing process.
 *
 * @Annotation
 * @Attributes({
 *    @Attribute("value",   required = true,  type = "array"),
 *    @Attribute("literal", required = false, type = "array")
 * })
 */
final class enum
{
    /** @phpstan-var list<scalar> */
    public mixed $value;

    /**
     * Literal target declaration.
     *
     * @var array
     */
    public mixed $literal;

    /**
     * @throws InvalidArgumentException
     *
     * @phpstan-param array{literal?: mixed[], value: list<scalar>} $values
     */
    public function __construct(array $values)
    {
        if (!isset($values['literal'])) {
            $values['literal'] = [];
        }

        foreach ($values['value'] as $var) {
            if (!is_scalar($var)) {
                throw new InvalidArgumentException(sprintf(
                    '@Enum supports only scalar values "%s" given.',
                    is_object($var) ? get_class($var) : gettype($var)
                ));
            }
        }

        foreach ($values['literal'] as $key => $var) {
            if (!in_array($key, $values['value'])) {
                throw new InvalidArgumentException(sprintf(
                    'Undefined enumerator value "%s" for literal "%s".',
                    $key,
                    $var
                ));
            }
        }

        $this->value = $values['value'];
        $this->literal = $values['literal'];
    }
}
