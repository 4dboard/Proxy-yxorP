<?php

namespace yxorP\app\modules\app\graphQL\types;

use graphQL\Language\AST\BooleanValueNode;
use graphQL\Language\AST\FloatValueNode;
use graphQL\Language\AST\IntValueNode;
use graphQL\Language\AST\ListValueNode;
use graphQL\Language\AST\ObjectValueNode;
use graphQL\Language\AST\StringValueNode;
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
            case ($valueNode instanceof StringValueNode):
            case ($valueNode instanceof BooleanValueNode):
                return $valueNode->value;
            case ($valueNode instanceof IntValueNode):
            case ($valueNode instanceof FloatValueNode):
                return floatval($valueNode->value);
            case ($valueNode instanceof ObjectValueNode):
            {
                $value = [];
                foreach ($valueNode->fields as $field) {
                    $value[$field->name->value] = $this->parseLiteral($field->value);
                }
                return $value;
            }
            case ($valueNode instanceof ListValueNode):
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
