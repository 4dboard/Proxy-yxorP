<?php

namespace yxorP\app\modules\app\graphQL\types;

use graphQL\Language\AST\BooleanValueNodeInterface;
use graphQL\Language\AST\FloatValueNodeInterface;
use graphQL\Language\AST\IntValueNodeInterface;
use graphQL\Language\AST\ListValueNodeInterface;
use graphQL\Language\AST\ObjectValueNodeInterface;
use graphQL\Language\AST\StringValueNodeInterface;
use graphQL\Type\Definition\ScalarType;

class jsonType extends ScalarType
{
    public $name = 'JsonType';
    public $description =
        'The `JSON` scalar type represents JSON values as specified by
        [ECMA-404](http://www.ecma-international.org/publications/files/ECMA-ST/ECMA-404.pdf).';

    public function __construct(string $name = null)
    {
        if ($name) {
            $this->name = $name;
        }
        parent::__construct();
    }

    public static function instance()
    {
        static $instance;

        if (is_null($instance)) {
            $instance = new static();
        }

        return $instance;
    }

    public function parseValue($value)
    {
        return $this->identity($value);
    }

    public function serialize($value)
    {
        return $this->identity($value);
    }

    public function parseLiteral($valueNode, array $variables = null)
    {

        switch ($valueNode) {
            case ($valueNode instanceof StringValueNodeInterface):
            case ($valueNode instanceof BooleanValueNodeInterface):
                return $valueNode->value;
            case ($valueNode instanceof IntValueNodeInterface):
            case ($valueNode instanceof FloatValueNodeInterface):
                return floatval($valueNode->value);
            case ($valueNode instanceof ObjectValueNodeInterface):
            {
                $value = [];
                foreach ($valueNode->fields as $field) {
                    $value[$field->name->value] = $this->parseLiteral($field->value);
                }
                return $value;
            }
            case ($valueNode instanceof ListValueNodeInterface):
                return array_map([$this, 'parseLiteral'], $valueNode->values);
            default:
                return null;
        }
    }

    private function identity($value)
    {
        return $value;
    }
}
