<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaDefinitionNode;
use yxorP\app\lib\data\graphQL\Validator\SDLValidationContext;

/**
 * Lone Schema definition
 *
 * A GraphQL document is only valid if it contains only one schema definition.
 */
class LoneSchemaDefinition extends ValidationRule
{
    #[ArrayShape([NodeKind::SCHEMA_DEFINITION => "\Closure"])] public function getSDLVisitor(SDLValidationContext $context): array
    {
        $oldSchema = $context->getSchema();
        $alreadyDefined = $oldSchema !== null && ((
                $oldSchema->getAstNode() !== null ||
                $oldSchema->getQueryType() !== null ||
                $oldSchema->getMutationType() !== null ||
                $oldSchema->getSubscriptionType() !== null
            ));

        $schemaDefinitionsCount = 0;

        return [
            NodeKind::SCHEMA_DEFINITION => static function (SchemaDefinitionNode $node) use ($alreadyDefined, $context, &$schemaDefinitionsCount): void {
                if ($alreadyDefined !== false) {
                    $context->reportError(new Error(self::canNotDefineSchemaWithinExtensionMessage(), $node));

                    return;
                }

                if ($schemaDefinitionsCount > 0) {
                    $context->reportError(new Error(self::schemaDefinitionNotAloneMessage(), $node));
                }

                ++$schemaDefinitionsCount;
            },
        ];
    }

    public static function canNotDefineSchemaWithinExtensionMessage(): string
    {
        return 'Cannot define a new schema within a schema extension.';
    }

    public static function schemaDefinitionNotAloneMessage(): string
    {
        return 'Must provide only one schema definition.';
    }
}
