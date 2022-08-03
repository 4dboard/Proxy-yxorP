<?php

namespace yxorP\app\modules\app\graphQL\types;

use yxorP\app\lib\data\graphQL\Language\AST\FloatValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\StringValueNode;
use yxorP\app\modules\app\graphQL\Language\AST\BooleanValueNode;
use yxorP\app\modules\app\graphQL\Language\AST\FloatValueNode;
use yxorP\app\modules\app\graphQL\Language\AST\IntValueNode;
use yxorP\app\modules\app\graphQL\Language\AST\ListValueNode;
use yxorP\app\modules\app\graphQL\Language\AST\ObjectValueNode;
use yxorP\app\modules\app\graphQL\Language\AST\StringValueNode;
use yxorP\app\modules\app\graphQL\Type\Definition\ScalarType;

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

    private function identity($value)
    {
        return $value;
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
}
