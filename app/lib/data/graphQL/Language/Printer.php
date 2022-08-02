<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Language;

use yxorP\app\lib\data\graphQL\Language\AST\ArgumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\BooleanValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveNode;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\FloatValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentSpreadNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputObjectTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputObjectTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InterfaceTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InterfaceTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\IntValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ListTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\ListValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\NamedTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\NameNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\NonNullTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\NullValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectFieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\OperationTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ScalarTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ScalarTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SelectionSetNode;
use yxorP\app\lib\data\graphQL\Language\AST\StringValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\UnionTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\UnionTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\VariableDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\VariableNode;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function count;
use function implode;
use function json_encode;
use function preg_replace;
use function sprintf;
use function str_replace;
use function strlen;
use function strpos;

/**
 * Prints AST to string. Capable of printing GraphQL queries and Type definition language.
 * Useful for pretty-printing queries or printing back AST for logging, documentation, etc.
 *
 * Usage example:
 *
 * ```php
 * $query = 'query myQuery {someField}';
 * $ast = GraphQL\Language\Parser::parse($query);
 * $printed = GraphQL\Language\Printer::doPrint($ast);
 * ```
 */
class Printer
{
    protected function __construct()
    {
    }

    /**
     * Prints AST to string. Capable of printing GraphQL queries and Type definition language.
     *
     * @param Node $ast
     *
     * @return string
     *
     * @api
     */
    public static function doPrint($ast)
    {
        static $instance;
        $instance = $instance ?? new static();

        return $instance->printAST($ast);
    }

    /**
     * Traverse an AST bottom-up, converting all nodes to strings.
     *
     * That means the AST is manipulated in such a way that it no longer
     * resembles the well-formed result of parsing.
     */
    public function printAST($ast)
    {
        return Visitor::visit(
            $ast,
            [
                'leave' => [
                    NodeKind::NAME => static function (NameNode $node): string {
                        return $node->value;
                    },

                    NodeKind::VARIABLE => static function (VariableNode $node): string {
                        return '$' . $node->name;
                    },

                    NodeKind::DOCUMENT => function (DocumentNode $node): string {
                        return $this->join($node->definitions, "\n\n") . "\n";
                    },

                    NodeKind::OPERATION_DEFINITION => function (OperationDefinitionNode $node): string {
                        $op = $node->operation;
                        $name = $node->name;
                        $varDefs = $this->wrap('(', $this->join($node->variableDefinitions, ', '), ')');
                        $directives = $this->join($node->directives, ' ');
                        $selectionSet = $node->selectionSet;

                        // Anonymous queries with no directives or variable definitions can use
                        // the query short form.
                        return $name === null && strlen($directives ?? '') === 0 && !$varDefs && $op === 'query'
                            ? $selectionSet
                            : $this->join([$op, $this->join([$name, $varDefs]), $directives, $selectionSet], ' ');
                    },

                    NodeKind::VARIABLE_DEFINITION => function (VariableDefinitionNode $node): string {
                        return $node->variable
                            . ': '
                            . $node->type
                            . $this->wrap(' = ', $node->defaultValue)
                            . $this->wrap(' ', $this->join($node->directives, ' '));
                    },

                    NodeKind::SELECTION_SET => function (SelectionSetNode $node) {
                        return $this->block($node->selections);
                    },

                    NodeKind::FIELD => function (FieldNode $node): string {
                        return $this->join(
                            [
                                $this->wrap('', $node->alias, ': ') . $node->name . $this->wrap(
                                    '(',
                                    $this->join($node->arguments, ', '),
                                    ')'
                                ),
                                $this->join($node->directives, ' '),
                                $node->selectionSet,
                            ],
                            ' '
                        );
                    },

                    NodeKind::ARGUMENT => static function (ArgumentNode $node): string {
                        return $node->name . ': ' . $node->value;
                    },

                    NodeKind::FRAGMENT_SPREAD => function (FragmentSpreadNode $node): string {
                        return '...'
                            . $node->name
                            . $this->wrap(' ', $this->join($node->directives, ' '));
                    },

                    NodeKind::INLINE_FRAGMENT => function (InlineFragmentNode $node): string {
                        return $this->join(
                            [
                                '...',
                                $this->wrap('on ', $node->typeCondition),
                                $this->join($node->directives, ' '),
                                $node->selectionSet,
                            ],
                            ' '
                        );
                    },

                    NodeKind::FRAGMENT_DEFINITION => function (FragmentDefinitionNode $node): string {
                        // Note: fragment variable definitions are experimental and may be changed or removed in the future.
                        return sprintf('fragment %s', $node->name)
                            . $this->wrap('(', $this->join($node->variableDefinitions, ', '), ')')
                            . sprintf(' on %s ', $node->typeCondition)
                            . $this->wrap('', $this->join($node->directives, ' '), ' ')
                            . $node->selectionSet;
                    },

                    NodeKind::INT => static function (IntValueNode $node): string {
                        return $node->value;
                    },

                    NodeKind::FLOAT => static function (FloatValueNode $node): string {
                        return $node->value;
                    },

                    NodeKind::STRING => function (StringValueNode $node, $key): string {
                        if ($node->block) {
                            return $this->printBlockString($node->value, $key === 'description');
                        }

                        return json_encode($node->value);
                    },

                    NodeKind::BOOLEAN => static function (BooleanValueNode $node): string {
                        return $node->value ? 'true' : 'false';
                    },

                    NodeKind::NULL => static function (NullValueNode $node): string {
                        return 'null';
                    },

                    NodeKind::ENUM => static function (EnumValueNode $node): string {
                        return $node->value;
                    },

                    NodeKind::LST => function (ListValueNode $node): string {
                        return '[' . $this->join($node->values, ', ') . ']';
                    },

                    NodeKind::OBJECT => function (ObjectValueNode $node): string {
                        return '{' . $this->join($node->fields, ', ') . '}';
                    },

                    NodeKind::OBJECT_FIELD => static function (ObjectFieldNode $node): string {
                        return $node->name . ': ' . $node->value;
                    },

                    NodeKind::DIRECTIVE => function (DirectiveNode $node): string {
                        return '@' . $node->name . $this->wrap('(', $this->join($node->arguments, ', '), ')');
                    },

                    NodeKind::NAMED_TYPE => static function (NamedTypeNode $node): string {
                        // @phpstan-ignore-next-line the printer works bottom up, so this is already a string here
                        return $node->name;
                    },

                    NodeKind::LIST_TYPE => static function (ListTypeNode $node): string {
                        return '[' . $node->type . ']';
                    },

                    NodeKind::NON_NULL_TYPE => static function (NonNullTypeNode $node): string {
                        return $node->type . '!';
                    },

                    NodeKind::SCHEMA_DEFINITION => function (SchemaDefinitionNode $def): string {
                        return $this->join(
                            [
                                'schema',
                                $this->join($def->directives, ' '),
                                $this->block($def->operationTypes),
                            ],
                            ' '
                        );
                    },

                    NodeKind::OPERATION_TYPE_DEFINITION => static function (OperationTypeDefinitionNode $def): string {
                        return $def->operation . ': ' . $def->type;
                    },

                    NodeKind::SCALAR_TYPE_DEFINITION => $this->addDescription(function (ScalarTypeDefinitionNode $def): string {
                        return $this->join(['scalar', $def->name, $this->join($def->directives, ' ')], ' ');
                    }),

                    NodeKind::OBJECT_TYPE_DEFINITION => $this->addDescription(function (ObjectTypeDefinitionNode $def): string {
                        return $this->join(
                            [
                                'type',
                                $def->name,
                                $this->wrap('implements ', $this->join($def->interfaces, ' & ')),
                                $this->join($def->directives, ' '),
                                $this->block($def->fields),
                            ],
                            ' '
                        );
                    }),

                    NodeKind::FIELD_DEFINITION => $this->addDescription(function (FieldDefinitionNode $def): string {
                        $noIndent = Utils::every($def->arguments, static function (string $arg): bool {
                            return strpos($arg, "\n") === false;
                        });

                        return $def->name
                            . ($noIndent
                                ? $this->wrap('(', $this->join($def->arguments, ', '), ')')
                                : $this->wrap("(\n", $this->indent($this->join($def->arguments, "\n")), "\n)"))
                            . ': ' . $def->type
                            . $this->wrap(' ', $this->join($def->directives, ' '));
                    }),

                    NodeKind::INPUT_VALUE_DEFINITION => $this->addDescription(function (InputValueDefinitionNode $def): string {
                        return $this->join(
                            [
                                $def->name . ': ' . $def->type,
                                $this->wrap('= ', $def->defaultValue),
                                $this->join($def->directives, ' '),
                            ],
                            ' '
                        );
                    }),

                    NodeKind::INTERFACE_TYPE_DEFINITION => $this->addDescription(
                        function (InterfaceTypeDefinitionNode $def): string {
                            return $this->join(
                                [
                                    'interface',
                                    $def->name,
                                    $this->wrap('implements ', $this->join($def->interfaces, ' & ')),
                                    $this->join($def->directives, ' '),
                                    $this->block($def->fields),
                                ],
                                ' '
                            );
                        }
                    ),

                    NodeKind::UNION_TYPE_DEFINITION => $this->addDescription(function (UnionTypeDefinitionNode $def): string {
                        return $this->join(
                            [
                                'union',
                                $def->name,
                                $this->join($def->directives, ' '),
                                count($def->types ?? []) > 0
                                    ? '= ' . $this->join($def->types, ' | ')
                                    : '',
                            ],
                            ' '
                        );
                    }),

                    NodeKind::ENUM_TYPE_DEFINITION => $this->addDescription(function (EnumTypeDefinitionNode $def): string {
                        return $this->join(
                            [
                                'enum',
                                $def->name,
                                $this->join($def->directives, ' '),
                                $this->block($def->values),
                            ],
                            ' '
                        );
                    }),

                    NodeKind::ENUM_VALUE_DEFINITION => $this->addDescription(function (EnumValueDefinitionNode $def): string {
                        return $this->join([$def->name, $this->join($def->directives, ' ')], ' ');
                    }),

                    NodeKind::INPUT_OBJECT_TYPE_DEFINITION => $this->addDescription(function (
                        InputObjectTypeDefinitionNode $def
                    ): string {
                        return $this->join(
                            [
                                'input',
                                $def->name,
                                $this->join($def->directives, ' '),
                                $this->block($def->fields),
                            ],
                            ' '
                        );
                    }),

                    NodeKind::SCHEMA_EXTENSION => function (SchemaTypeExtensionNode $def): string {
                        return $this->join(
                            [
                                'extend schema',
                                $this->join($def->directives, ' '),
                                $this->block($def->operationTypes),
                            ],
                            ' '
                        );
                    },

                    NodeKind::SCALAR_TYPE_EXTENSION => function (ScalarTypeExtensionNode $def): string {
                        return $this->join(
                            [
                                'extend scalar',
                                $def->name,
                                $this->join($def->directives, ' '),
                            ],
                            ' '
                        );
                    },

                    NodeKind::OBJECT_TYPE_EXTENSION => function (ObjectTypeExtensionNode $def): string {
                        return $this->join(
                            [
                                'extend type',
                                $def->name,
                                $this->wrap('implements ', $this->join($def->interfaces, ' & ')),
                                $this->join($def->directives, ' '),
                                $this->block($def->fields),
                            ],
                            ' '
                        );
                    },

                    NodeKind::INTERFACE_TYPE_EXTENSION => function (InterfaceTypeExtensionNode $def): string {
                        return $this->join(
                            [
                                'extend interface',
                                $def->name,
                                $this->wrap('implements ', $this->join($def->interfaces, ' & ')),
                                $this->join($def->directives, ' '),
                                $this->block($def->fields),
                            ],
                            ' '
                        );
                    },

                    NodeKind::UNION_TYPE_EXTENSION => function (UnionTypeExtensionNode $def): string {
                        return $this->join(
                            [
                                'extend union',
                                $def->name,
                                $this->join($def->directives, ' '),
                                count($def->types ?? []) > 0
                                    ? '= ' . $this->join($def->types, ' | ')
                                    : '',
                            ],
                            ' '
                        );
                    },

                    NodeKind::ENUM_TYPE_EXTENSION => function (EnumTypeExtensionNode $def): string {
                        return $this->join(
                            [
                                'extend enum',
                                $def->name,
                                $this->join($def->directives, ' '),
                                $this->block($def->values),
                            ],
                            ' '
                        );
                    },

                    NodeKind::INPUT_OBJECT_TYPE_EXTENSION => function (InputObjectTypeExtensionNode $def): string {
                        return $this->join(
                            [
                                'extend input',
                                $def->name,
                                $this->join($def->directives, ' '),
                                $this->block($def->fields),
                            ],
                            ' '
                        );
                    },

                    NodeKind::DIRECTIVE_DEFINITION => $this->addDescription(function (DirectiveDefinitionNode $def): string {
                        $noIndent = Utils::every($def->arguments, static function (string $arg): bool {
                            return strpos($arg, "\n") === false;
                        });

                        return 'directive @'
                            . $def->name
                            . ($noIndent
                                ? $this->wrap('(', $this->join($def->arguments, ', '), ')')
                                : $this->wrap("(\n", $this->indent($this->join($def->arguments, "\n")), "\n"))
                            . ($def->repeatable ? ' repeatable' : '')
                            . ' on ' . $this->join($def->locations, ' | ');
                    }),
                ],
            ]
        );
    }

    public function join($maybeArray, $separator = ''): string
    {
        return $maybeArray
            ? implode(
                $separator,
                Utils::filter(
                    $maybeArray,
                    static function ($x): bool {
                        return (bool)$x;
                    }
                )
            )
            : '';
    }

    /**
     * If maybeString is not null or empty, then wrap with start and end, otherwise
     * print an empty string.
     */
    public function wrap($start, $maybeString, $end = '')
    {
        return $maybeString ? ($start . $maybeString . $end) : '';
    }

    /**
     * Given array, print each item on its own line, wrapped in an
     * indented "{ }" block.
     */
    public function block($array)
    {
        return $array && $this->length($array)
            ? "{\n" . $this->indent($this->join($array, "\n")) . "\n}"
            : '';
    }

    public function length($maybeArray)
    {
        return $maybeArray ? count($maybeArray) : 0;
    }

    public function indent($maybeString)
    {
        return $maybeString ? '  ' . str_replace("\n", "\n  ", $maybeString) : '';
    }

    /**
     * Print a block string in the indented block form by adding a leading and
     * trailing blank line. However, if a block string starts with whitespace and is
     * a single-line, adding a leading blank line would strip that whitespace.
     */
    private function printBlockString($value, $isDescription)
    {
        $escaped = str_replace('"""', '\\"""', $value);

        return ($value[0] === ' ' || $value[0] === "\t") && strpos($value, "\n") === false
            ? ('"""' . preg_replace('/"$/', "\"\n", $escaped) . '"""')
            : ('"""' . "\n" . ($isDescription ? $escaped : $this->indent($escaped)) . "\n" . '"""');
    }

    public function addDescription(callable $cb)
    {
        return function ($node) use ($cb): string {
            return $this->join([$node->description, $cb($node)], "\n");
        };
    }

    public function manyList($start, $list, $separator, $end)
    {
        return $this->length($list) === 0 ? null : ($start . $this->join($list, $separator) . $end);
    }
}
