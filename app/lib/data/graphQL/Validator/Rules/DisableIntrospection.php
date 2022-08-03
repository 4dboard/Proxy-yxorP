<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;

class DisableIntrospection extends QuerySecurityRule
{
    public const ENABLED = 1;

    /** @var bool */
    private $isEnabled;

    public function __construct($enabled = self::ENABLED)
    {
        $this->setEnabled($enabled);
    }

    public function setEnabled($enabled)
    {
        $this->isEnabled = $enabled;
    }

    public function getVisitor(ValidationContext $context)
    {
        return $this->invokeIfNeeded(
            $context,
            [
                NodeKind::FIELD => static function (FieldNode $node) use ($context): void {
                    if ($node->name->value !== '__type' && $node->name->value !== '__schema') {
                        return;
                    }

                    $context->reportError(new Error(
                        static::introspectionDisabledMessage(),
                        [$node]
                    ));
                },
            ]
        );
    }

    public static function introspectionDisabledMessage()
    {
        return 'GraphQL introspection is not allowed, but the query contained __schema or __type';
    }

    protected function isEnabled()
    {
        return $this->isEnabled != self::DISABLED;
    }
}
