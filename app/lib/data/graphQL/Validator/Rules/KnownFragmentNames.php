<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Validator\Rules;

use yxorP\app\lib\graphQL\Error\Error;
use yxorP\app\lib\graphQL\Language\AST\FragmentSpreadNode;
use yxorP\app\lib\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\graphQL\Validator\ValidationContext;
use function sprintf;

class KnownFragmentNames extends ValidationRule
{
    /**
     * @param string $fragName
     */
    public static function unknownFragmentMessage($fragName)
    {
        return sprintf('Unknown fragment "%s".', $fragName);
    }

    public function getVisitor(ValidationContext $context)
    {
        return [
            NodeKind::FRAGMENT_SPREAD => static function (FragmentSpreadNode $node) use ($context): void {
                $fragmentName = $node->name->value;
                $fragment = $context->getFragment($fragmentName);
                if ($fragment) {
                    return;
                }

                $context->reportError(new Error(
                    self::unknownFragmentMessage($fragmentName),
                    [$node->name]
                ));
            },
        ];
    }
}
