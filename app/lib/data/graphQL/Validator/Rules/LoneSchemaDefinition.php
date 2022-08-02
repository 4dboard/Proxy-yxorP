<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Validator\Rules;

use yxorP\app\lib\graphQL\Error\Error;
use yxorP\app\lib\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\graphQL\Language\AST\SchemaDefinitionNode;
use yxorP\app\lib\graphQL\Validator\SDLValidationContext;

/**
 * Lone Schema definition
 *
 * A GraphQL document is only valid if it contains only one schema definition.
 */
class LoneSchemaDefinition extends ValidationRule
{
    public static function canNotDefineSchemaWithinExtensionMessage()
    {
        return 'Cannot define a new schema within a schema extension.';
    }

    public static function schemaDefinitionNotAloneMessage()
    {
        return 'Must provide only one schema definition.';
    }

    public function getSDLVisitor(SDLValidationContext $context)
    {
        $oldSchema = $context->getSchema();
        $alreadyDefined = $oldSchema !== null
            ? (
                $oldSchema->getAstNode() !== null ||
                $oldSchema->getQueryType() !== null ||
                $oldSchema->getMutationType() !== null ||
                $oldSchema->getSubscriptionType() !== null
            )
            : false;

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
}
