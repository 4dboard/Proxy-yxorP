<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator;

use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Type\Schema;

abstract class ASTValidationContext
{
    /** @var DocumentNode */
    protected DocumentNode $ast;

    /** @var Error[] */
    protected array $errors;

    /** @var Schema */
    protected ?Schema $schema;

    public function __construct(DocumentNode $ast, ?Schema $schema = null)
    {
        $this->ast = $ast;
        $this->schema = $schema;
        $this->errors = [];
    }

    public function reportError(Error $error)
    {
        $this->errors[] = $error;
    }

    /**
     * @return Error[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @return DocumentNode
     */
    public function getDocument(): DocumentNode
    {
        return $this->ast;
    }

    public function getSchema(): ?Schema
    {
        return $this->schema;
    }
}
