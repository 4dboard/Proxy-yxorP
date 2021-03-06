<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use ArrayObject;
use Exception;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Language\AST\EnumTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Utils\MixedStore;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function is_array;
use function is_int;
use function is_string;
use function sprintf;

abstract class EnumType extends Type implements InputType, OutputType, LeafType, NullableType, NamedType
{
    /** @var EnumTypeDefinitionNode|null */
    public $astNode;
    /** @var EnumTypeExtensionNode[] */
    public $extensionASTNodes;
    /**
     * Lazily initialized.
     *
     * @var EnumValueDefinition[]
     */
    private array $values;
    /**
     * Lazily initialized.
     *
     * Actually a MixedStore<mixed, EnumValueDefinition>, PHPStan won't let us type it that way.
     *
     * @var MixedStore
     */
    private MixedStore $valueLookup;
    /** @var ArrayObject<string, EnumValueDefinition> */
    private ArrayObject $nameLookup;

    public function __construct($config)
    {
        if (!isset($config['name'])) {
            $config['name'] = $this->tryInferName();
        }

        Utils::invariant(is_string($config['name']), 'Must provide name.');

        $this->name = $config['name'];
        $this->description = $config['description'] ?? null;
        $this->astNode = $config['astNode'] ?? null;
        $this->extensionASTNodes = $config['extensionASTNodes'] ?? null;
        $this->config = $config;
    }

    /**
     * @param array|string $name
     *
     * @return EnumValueDefinition|null
     */
    public function getValue(array|string $name): ?EnumValueDefinition
    {
        $lookup = $this->getNameLookup();

        if (!is_string($name)) {
            return null;
        }

        return $lookup[$name] ?? null;
    }

    private function getNameLookup(): ArrayObject
    {
        if (!$this->nameLookup) {
            $lookup = new ArrayObject();
            foreach ($this->getValues() as $value) {
                $lookup[$value->name] = $value;
            }
            $this->nameLookup = $lookup;
        }

        return $this->nameLookup;
    }

    /**
     * @return EnumValueDefinition[]
     */
    public function getValues(): array
    {
        if (!isset($this->values)) {
            $this->values = [];
            $config = $this->config;

            if (isset($config['values'])) {
                if (!is_array($config['values'])) {
                    throw new InvariantViolation(sprintf('%s values must be an array', $this->name));
                }
                foreach ($config['values'] as $name => $value) {
                    if (is_string($name)) {
                        if (is_array($value)) {
                            $value += ['name' => $name, 'value' => $name];
                        } else {
                            $value = ['name' => $name, 'value' => $value];
                        }
                    } elseif (is_int($name) && is_string($value)) {
                        $value = ['name' => $value, 'value' => $value];
                    } else {
                        throw new InvariantViolation(
                            sprintf(
                                '%s values must be an array with value names as keys.',
                                $this->name
                            )
                        );
                    }
                    $this->values[] = new EnumValueDefinition($value);
                }
            }
        }

        return $this->values;
    }

    /**
     * @param mixed $value
     *
     * @return mixed
     *
     * @throws Error
     */
    public function serialize(mixed $value): mixed
    {
        $lookup = $this->getValueLookup();
        if (isset($lookup[$value])) {
            return $lookup[$value]->name;
        }

        throw new Error('Cannot serialize value as enum: ' . Utils::printSafe($value));
    }

    /**
     * Actually returns a MixedStore<mixed, EnumValueDefinition>, PHPStan won't let us type it that way
     */
    private function getValueLookup(): MixedStore
    {
        if (!isset($this->valueLookup)) {
            $this->valueLookup = new MixedStore();

            foreach ($this->getValues() as $valueName => $value) {
                $this->valueLookup->offsetSet($value->value, $value);
            }
        }

        return $this->valueLookup;
    }

    /**
     * @param mixed $value
     *
     * @return mixed
     *
     * @throws Error
     */
    public function parseValue(mixed $value): mixed
    {
        $lookup = $this->getNameLookup();
        if (isset($lookup[$value])) {
            return $lookup[$value]->value;
        }

        throw new Error('Cannot represent value as enum: ' . Utils::printSafe($value));
    }

    /**
     * @param array|null $variables
     *
     * @return null
     *
     * @throws Exception
     */
    public function parseLiteral(Node $valueNode, ?array $variables = null)
    {
        if ($valueNode instanceof EnumValueNode) {
            $lookup = $this->getNameLookup();
            if (isset($lookup[$valueNode->value])) {
                $enumValue = $lookup[$valueNode->value];
                if ($enumValue !== null) {
                    return $enumValue->value;
                }
            }
        }

        // Intentionally without message, as all information already in wrapped Exception
        throw new Error();
    }

    /**
     * @throws InvariantViolation
     */
    public function assertValid()
    {
        parent::assertValid();

        Utils::invariant(
            isset($this->config['values']),
            sprintf('%s values must be an array.', $this->name)
        );

        $values = $this->getValues();
        foreach ($values as $value) {
            Utils::invariant(
                !isset($value->config['isDeprecated']),
                sprintf(
                    '%s.%s should provide "deprecationReason" instead of "isDeprecated".',
                    $this->name,
                    $value->name
                )
            );
        }
    }
}
