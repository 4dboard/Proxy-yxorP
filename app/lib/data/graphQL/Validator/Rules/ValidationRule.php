<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use yxorP\app\lib\data\graphQL\Validator\SDLValidationContext;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function class_alias;

abstract class ValidationRule
{
    /** @var string */
    protected $name;

    public function getName()
    {
        return $this->name === '' || $this->name === null ? static::class : $this->name;
    }

    public function __invoke(ValidationContext $context)
    {
        return $this->getVisitor($context);
    }

    /**
     * Returns structure suitable for GraphQL\Language\Visitor
     *
     * @return mixed[]
     * @see \GraphQL\Language\Visitor
     *
     */
    public function getVisitor(ValidationContext $context)
    {
        return [];
    }

    /**
     * Returns structure suitable for GraphQL\Language\Visitor
     *
     * @return mixed[]
     * @see \GraphQL\Language\Visitor
     *
     */
    public function getSDLVisitor(SDLValidationContext $context)
    {
        return [];
    }
}

class_alias(ValidationRule::class, 'GraphQL\Validator\Rules\AbstractValidationRule');
