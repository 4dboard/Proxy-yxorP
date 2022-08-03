<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type;

use yxorP\app\lib\data\graphQL\Language\AST\SchemaDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function count;
use function is_callable;

/**
 * Schema configuration class.
 * Could be passed directly to schema constructor. List of options accepted by **create** method is
 * [described in docs](type-system/schema.md#configuration-options).
 *
 * Usage example:
 *
 *     $config = SchemaConfig::create()
 *         ->setQuery($myQueryType)
 *         ->setTypeLoader($myTypeLoader);
 *
 *     $schema = new Schema($config);
 */
class SchemaConfig
{
    /** @var ObjectType|null */
    public ?ObjectType $query;

    /** @var ObjectType|null */
    public ?ObjectType $mutation;

    /** @var ObjectType|null */
    public ?ObjectType $subscription;

    /** @var Type[]|callable */
    public $types = [];

    /** @var Directive[]|null */
    public ?array $directives;

    /** @var callable|null */
    public $typeLoader;

    /** @var SchemaDefinitionNode|null */
    public ?SchemaDefinitionNode $astNode;

    /** @var bool */
    public bool $assumeValid = false;

    /** @var SchemaTypeExtensionNode[] */
    public array $extensionASTNodes = [];

    /**
     * Converts an array of options to instance of SchemaConfig
     * (or just returns empty config when array is not passed).
     *
     * @param array $options
     *
     * @return SchemaConfig
     *
     * @api
     */
    public static function create(array $options = []): SchemaConfig
    {
        $config = new static();

        if (count($options) > 0) {
            if (isset($options['query'])) {
                $config->setQuery($options['query']);
            }

            if (isset($options['mutation'])) {
                $config->setMutation($options['mutation']);
            }

            if (isset($options['subscription'])) {
                $config->setSubscription($options['subscription']);
            }

            if (isset($options['types'])) {
                $config->setTypes($options['types']);
            }

            if (isset($options['directives'])) {
                $config->setDirectives($options['directives']);
            }

            if (isset($options['typeLoader'])) {
                Utils::invariant(
                    is_callable($options['typeLoader']),
                    'Schema type loader must be callable if provided but got: %s',
                    Utils::printSafe($options['typeLoader'])
                );
                $config->setTypeLoader($options['typeLoader']);
            }

            if (isset($options['astNode'])) {
                $config->setAstNode($options['astNode']);
            }

            if (isset($options['assumeValid'])) {
                $config->setAssumeValid((bool)$options['assumeValid']);
            }

            if (isset($options['extensionASTNodes'])) {
                $config->setExtensionASTNodes($options['extensionASTNodes']);
            }
        }

        return $config;
    }

    /**
     * @return SchemaDefinitionNode|null
     */
    public function getAstNode(): ?SchemaDefinitionNode
    {
        return $this->astNode;
    }

    /**
     * @param SchemaDefinitionNode $astNode
     * @return SchemaConfig
     */
    public function setAstNode(SchemaDefinitionNode $astNode): static
    {
        $this->astNode = $astNode;

        return $this;
    }

    /**
     * @return ObjectType|null
     *
     * @api
     */
    public function getQuery(): ?ObjectType
    {
        return $this->query;
    }

    /**
     * @param ObjectType|null $query
     *
     * @return SchemaConfig
     *
     * @api
     */
    public function setQuery(?ObjectType $query): static
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @return ObjectType|null
     *
     * @api
     */
    public function getMutation(): ?ObjectType
    {
        return $this->mutation;
    }

    /**
     * @param ObjectType|null $mutation
     *
     * @return SchemaConfig
     *
     * @api
     */
    public function setMutation(?ObjectType $mutation): static
    {
        $this->mutation = $mutation;

        return $this;
    }

    /**
     * @return ObjectType|null
     *
     * @api
     */
    public function getSubscription(): ?ObjectType
    {
        return $this->subscription;
    }

    /**
     * @param ObjectType|null $subscription
     *
     * @return SchemaConfig
     *
     * @api
     */
    public function setSubscription(?ObjectType $subscription): static
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * @return Type[]|callable
     *
     * @api
     */
    public function getTypes(): callable|array
    {
        return $this->types;
    }

    /**
     * @param callable|Type[] $types
     *
     * @return SchemaConfig
     *
     * @api
     */
    public function setTypes(callable|array $types): static
    {
        $this->types = $types;

        return $this;
    }

    /**
     * @return Directive[]|null
     *
     * @api
     */
    public function getDirectives(): ?array
    {
        return $this->directives;
    }

    /**
     * @param Directive[] $directives
     *
     * @return SchemaConfig
     *
     * @api
     */
    public function setDirectives(array $directives): static
    {
        $this->directives = $directives;

        return $this;
    }

    /**
     * @return callable|null
     *
     * @api
     */
    public function getTypeLoader(): ?callable
    {
        return $this->typeLoader;
    }

    /**
     * @param callable $typeLoader
     * @return SchemaConfig
     *
     * @api
     */
    public function setTypeLoader(callable $typeLoader): static
    {
        $this->typeLoader = $typeLoader;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAssumeValid(): bool
    {
        return $this->assumeValid;
    }

    /**
     * @param bool $assumeValid
     *
     * @return SchemaConfig
     */
    public function setAssumeValid(bool $assumeValid): static
    {
        $this->assumeValid = $assumeValid;

        return $this;
    }

    /**
     * @return SchemaTypeExtensionNode[]
     */
    public function getExtensionASTNodes(): array
    {
        return $this->extensionASTNodes;
    }

    /**
     * @param SchemaTypeExtensionNode[] $extensionASTNodes
     */
    public function setExtensionASTNodes(array $extensionASTNodes)
    {
        $this->extensionASTNodes = $extensionASTNodes;
    }
}
