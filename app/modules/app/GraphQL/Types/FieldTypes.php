<?php

namespace yxorP\app\modules\app\graphQL\types;

use yxorP\app\modules\app\graphQL\Type\Definition\ObjectType;
use yxorP\app\modules\app\graphQL\Type\Definition\Type;

class fieldTypes
{

    protected static array $types = [];
    protected static array $names = [];

    public static function buildFieldsDefinitions($meta): array
    {

        $fields = [];

        foreach ($meta['fields'] as $field) {

            $def = self::getType($field);

            if ($def) {

                if (isset($def['type'], $field['required']) && $field['required']) {
                    $def['type'] = Type::nonNull($def['type']);
                }

                if ($field['multiple']) {
                    $fields[$field['name']] = Type::listOf($def['type']);
                } else {
                    $fields[$field['name']] = $def;
                }
            }
        }

        return $fields;
    }

    protected static function getType($field): ?array
    {

        $def = [];

        $def['type'] = match ($field['type']) {
            'text', 'code', 'color', 'date', 'datetime', 'wysiwyg', 'time', 'select' => Type::string(),
            'boolean' => Type::boolean(),
            'number' => Type::int(),
            'layout' => jsonType::instance(),
            'set' => new ObjectType([
                'name' => self::getName('Set' . ucfirst($field['name'])),
                'fields' => self::buildFieldsDefinitions($field['opts'])
            ]),
            default => jsonType::instance(),
        };

        return count($def) ? $def : null;
    }

    private static function getName($name)
    {

        if (!isset(self::$names[$name])) {
            self::$names[$name] = 0;
        } else {
            self::$names[$name]++;
            $name .= self::$names[$name];
        }

        return $name;
    }

    public static function instance($field)
    {
        self::getType($field);
    }
}
