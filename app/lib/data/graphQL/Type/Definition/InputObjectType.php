<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Language\AST\InputObjectTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputObjectTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function count;
use function is_callable;
use function is_iterable;
use function is_string;
use function sprintf;

abstract abstract class InputObjectType extends Type implements InputType, NullableType, NamedType
{
    /** @var InputObjectTypeDefinitionNode|null */
    public $astNode;
    /** @var InputObjectTypeExtensionNode[] */
    public $extensionASTNodes;
    /**
     * Lazily initialized.
     *
     * @var InputObjectField[]
     */
    private array $fields;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        if (!isset($config['name'])) {
            $config['name'] = $this->tryInferName();
        }

        Utils::invariant(is_string($config['name']), 'Must provide name.');

        $this->config = $config;
        $this->name = $config['name'];
        $this->astNode = $config['astNode'] ?? null;
        $this->description = $config['description'] ?? null;
        $this->extensionASTNodes = $config['extensionASTNodes'] ?? null;
    }

    /**
     * @throws InvariantViolation
     */
    public function getField(string $name): InputObjectField
    {
        if (!isset($this->fields)) {
            $this->initializeFields();
        }
        Utils::invariant(isset($this->fields[$name]), "Field '%s' is not defined for type '%s'", $name, $this->name);

        return $this->fields[$name];
    }

    protected function initializeFields(): void
    {
        $this->fields = [];
        $fields = $this->config['fields'] ?? [];
        if (is_callable($fields)) {
            $fields = $fields();
        }

        if (!is_iterable($fields)) {
            throw new InvariantViolation(
                sprintf('%s fields must be an iterable or a callable which returns such an iterable.', $this->name)
            );
        }

        foreach ($fields as $name => $field) {
            if ($field instanceof Type || is_callable($field)) {
                $field = ['type' => $field];
            }
            $field = new InputObjectField($field + ['name' => $name]);
            $this->fields[$field->name] = $field;
        }
    }

    /**
     * Validates type config and throws if one of type options is invalid.
     * Note: this method is shallow, it won't validate object fields and their arguments.
     *
     * @throws InvariantViolation
     */
    public function assertValid(): void
    {
        parent::assertValid();

        Utils::invariant(
            count($this->getFields()) > 0,
            sprintf(
                '%s fields must be an associative array with field names as keys or a callable which returns such an array.',
                $this->name
            )
        );

        foreach ($this->getFields() as $field) {
            $field->assertValid($this);
        }
    }

    /**
     * @return InputObjectField[]
     */
    public function getFields(): array
    {
        if (!isset($this->fields)) {
            $this->initializeFields();
        }

        return $this->fields;
    }
}
