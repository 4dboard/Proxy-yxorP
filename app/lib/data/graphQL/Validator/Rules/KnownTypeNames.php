<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\NamedTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function array_keys;
use function count;
use function sprintf;

/**
 * Known type names
 *
 * A GraphQL document is only valid if referenced types (specifically
 * variable definitions and fragment conditions) are defined by the type schema.
 */
class KnownTypeNames extends ValidationRule
{
    #[ArrayShape([NodeKind::OBJECT_TYPE_DEFINITION => "\Closure", NodeKind::INTERFACE_TYPE_DEFINITION => "\Closure", NodeKind::UNION_TYPE_DEFINITION => "\Closure", NodeKind::INPUT_OBJECT_TYPE_DEFINITION => "\Closure", NodeKind::NAMED_TYPE => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        $skip = static function (): VisitorOperation {
            return Visitor::skipNode();
        };

        return [
            // TODO: when validating IDL, re-enable these. Experimental version does not
            // add unreferenced types, resulting in false-positive errors. Squelched
            // errors for now.
            NodeKind::OBJECT_TYPE_DEFINITION => $skip,
            NodeKind::INTERFACE_TYPE_DEFINITION => $skip,
            NodeKind::UNION_TYPE_DEFINITION => $skip,
            NodeKind::INPUT_OBJECT_TYPE_DEFINITION => $skip,
            NodeKind::NAMED_TYPE => static function (NamedTypeNode $node) use ($context): void {
                $schema = $context->getSchema();
                $typeName = $node->name->value;
                $type = $schema->getType($typeName);
                if ($type !== null) {
                    return;
                }

                $context->reportError(new Error(
                    self::unknownTypeMessage(
                        $typeName,
                        Utils::suggestionList($typeName, array_keys($schema->getTypeMap()))
                    ),
                    [$node]
                ));
            },
        ];
    }

    /**
     * @param string $type
     * @param string[] $suggestedTypes
     * @return string
     */
    public static function unknownTypeMessage(string $type, array $suggestedTypes): string
    {
        $message = sprintf('Unknown type "%s".', $type);
        if (count($suggestedTypes) > 0) {
            $suggestions = Utils::quotedOrList($suggestedTypes);

            $message .= sprintf(' Did you mean %s?', $suggestions);
        }

        return $message;
    }
}
