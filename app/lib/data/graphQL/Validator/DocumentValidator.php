<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator;

use Exception;
use JetBrains\PhpStorm\Pure;
use Throwable;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Schema;
use yxorP\app\lib\data\graphQL\Utils\TypeInfo;
use yxorP\app\lib\data\graphQL\Validator\Rules\DisableIntrospection;
use yxorP\app\lib\data\graphQL\Validator\Rules\ExecutableDefinitions;
use yxorP\app\lib\data\graphQL\Validator\Rules\FieldsOnCorrectType;
use yxorP\app\lib\data\graphQL\Validator\Rules\FragmentsOnCompositeTypes;
use yxorP\app\lib\data\graphQL\Validator\Rules\KnownArgumentNames;
use yxorP\app\lib\data\graphQL\Validator\Rules\KnownArgumentNamesOnDirectives;
use yxorP\app\lib\data\graphQL\Validator\Rules\KnownDirectives;
use yxorP\app\lib\data\graphQL\Validator\Rules\KnownFragmentNames;
use yxorP\app\lib\data\graphQL\Validator\Rules\KnownTypeNames;
use yxorP\app\lib\data\graphQL\Validator\Rules\LoneAnonymousOperation;
use yxorP\app\lib\data\graphQL\Validator\Rules\LoneSchemaDefinition;
use yxorP\app\lib\data\graphQL\Validator\Rules\NoFragmentCycles;
use yxorP\app\lib\data\graphQL\Validator\Rules\NoUndefinedVariables;
use yxorP\app\lib\data\graphQL\Validator\Rules\NoUnusedFragments;
use yxorP\app\lib\data\graphQL\Validator\Rules\NoUnusedVariables;
use yxorP\app\lib\data\graphQL\Validator\Rules\OverlappingFieldsCanBeMerged;
use yxorP\app\lib\data\graphQL\Validator\Rules\PossibleFragmentSpreads;
use yxorP\app\lib\data\graphQL\Validator\Rules\ProvidedRequiredArguments;
use yxorP\app\lib\data\graphQL\Validator\Rules\ProvidedRequiredArgumentsOnDirectives;
use yxorP\app\lib\data\graphQL\Validator\Rules\QueryComplexity;
use yxorP\app\lib\data\graphQL\Validator\Rules\QueryDepth;
use yxorP\app\lib\data\graphQL\Validator\Rules\QuerySecurityRule;
use yxorP\app\lib\data\graphQL\Validator\Rules\ScalarLeafs;
use yxorP\app\lib\data\graphQL\Validator\Rules\SingleFieldSubscription;
use yxorP\app\lib\data\graphQL\Validator\Rules\UniqueArgumentNames;
use yxorP\app\lib\data\graphQL\Validator\Rules\UniqueDirectivesPerLocation;
use yxorP\app\lib\data\graphQL\Validator\Rules\UniqueFragmentNames;
use yxorP\app\lib\data\graphQL\Validator\Rules\UniqueInputFieldNames;
use yxorP\app\lib\data\graphQL\Validator\Rules\UniqueOperationNames;
use yxorP\app\lib\data\graphQL\Validator\Rules\UniqueVariableNames;
use yxorP\app\lib\data\graphQL\Validator\Rules\ValidationRule;
use yxorP\app\lib\data\graphQL\Validator\Rules\ValuesOfCorrectType;
use yxorP\app\lib\data\graphQL\Validator\Rules\VariablesAreInputTypes;
use yxorP\app\lib\data\graphQL\Validator\Rules\VariablesInAllowedPosition;
use function array_filter;
use function array_merge;
use function count;
use function is_array;
use function sprintf;

/**
 * Implements the "Validation" section of the spec.
 *
 * Validation runs synchronously, returning an array of encountered errors, or
 * an empty array if no errors were encountered and the document is valid.
 *
 * A list of specific validation rules may be provided. If not provided, the
 * default list of rules defined by the GraphQL specification will be used.
 *
 * Each validation rule is an instance of GraphQL\Validator\Rules\ValidationRule
 * which returns a visitor (see the [GraphQL\Language\Visitor API](reference.md#graphqllanguagevisitor)).
 *
 * Visitor methods are expected to return an instance of [GraphQL\Error\Error](reference.md#graphqlerrorerror),
 * or array of such instances when invalid.
 *
 * Optionally a custom TypeInfo instance may be provided. If not provided, one
 * will be created from the provided schema.
 */
class DocumentValidator
{
    /** @var ValidationRule[] */
    private static array $rules = [];

    /** @var ValidationRule[]|null */
    private static ?array $defaultRules;

    /** @var QuerySecurityRule[]|null */
    private static ?array $securityRules;

    /** @var ValidationRule[]|null */
    private static ?array $sdlRules;

    /** @var bool */
    private static bool $initRules = false;

    /**
     * Primary method for query validation. See class description for details.
     *
     * @param ValidationRule[]|null $rules
     *
     * @return Error[]
     *
     * @api
     */
    public static function validate(
        Schema       $schema,
        DocumentNode $ast,
        ?array       $rules = null,
        ?TypeInfo    $typeInfo = null
    ): array
    {
        if ($rules === null) {
            $rules = static::allRules();
        }

        if (is_array($rules) === true && count($rules) === 0) {
            // Skip validation if there are no rules
            return [];
        }

        $typeInfo = $typeInfo ?? new TypeInfo($schema);

        return static::visitUsingRules($schema, $typeInfo, $ast, $rules);
    }

    /**
     * Returns all global validation rules.
     *
     * @return ValidationRule[]
     *
     * @api
     */
    public static function allRules(): array
    {
        if (!self::$initRules) {
            static::$rules = array_merge(static::defaultRules(), self::securityRules(), self::$rules);
            static::$initRules = true;
        }

        return self::$rules;
    }

    public static function defaultRules(): ?array
    {
        if (self::$defaultRules === null) {
            self::$defaultRules = [
                ExecutableDefinitions::class => new ExecutableDefinitions(),
                UniqueOperationNames::class => new UniqueOperationNames(),
                LoneAnonymousOperation::class => new LoneAnonymousOperation(),
                SingleFieldSubscription::class => new SingleFieldSubscription(),
                KnownTypeNames::class => new KnownTypeNames(),
                FragmentsOnCompositeTypes::class => new FragmentsOnCompositeTypes(),
                VariablesAreInputTypes::class => new VariablesAreInputTypes(),
                ScalarLeafs::class => new ScalarLeafs(),
                FieldsOnCorrectType::class => new FieldsOnCorrectType(),
                UniqueFragmentNames::class => new UniqueFragmentNames(),
                KnownFragmentNames::class => new KnownFragmentNames(),
                NoUnusedFragments::class => new NoUnusedFragments(),
                PossibleFragmentSpreads::class => new PossibleFragmentSpreads(),
                NoFragmentCycles::class => new NoFragmentCycles(),
                UniqueVariableNames::class => new UniqueVariableNames(),
                NoUndefinedVariables::class => new NoUndefinedVariables(),
                NoUnusedVariables::class => new NoUnusedVariables(),
                KnownDirectives::class => new KnownDirectives(),
                UniqueDirectivesPerLocation::class => new UniqueDirectivesPerLocation(),
                KnownArgumentNames::class => new KnownArgumentNames(),
                UniqueArgumentNames::class => new UniqueArgumentNames(),
                ValuesOfCorrectType::class => new ValuesOfCorrectType(),
                ProvidedRequiredArguments::class => new ProvidedRequiredArguments(),
                VariablesInAllowedPosition::class => new VariablesInAllowedPosition(),
                OverlappingFieldsCanBeMerged::class => new OverlappingFieldsCanBeMerged(),
                UniqueInputFieldNames::class => new UniqueInputFieldNames(),
            ];
        }

        return self::$defaultRules;
    }

    /**
     * @return QuerySecurityRule[]
     */
    public static function securityRules(): ?array
    {
        // This way of defining rules is deprecated
        // When custom security rule is required - it should be just added via DocumentValidator::addRule();
        // TODO: deprecate this

        if (self::$securityRules === null) {
            self::$securityRules = [
                DisableIntrospection::class => new DisableIntrospection(QuerySecurityRule::DISABLED), // DEFAULT DISABLED
                QueryDepth::class => new QueryDepth(QuerySecurityRule::DISABLED), // default disabled
                QueryComplexity::class => new QueryComplexity(QuerySecurityRule::DISABLED), // default disabled
            ];
        }

        return self::$securityRules;
    }

    /**
     * This uses a specialized visitor which runs multiple visitors in parallel,
     * while maintaining the visitor skip and break API.
     *
     * @param Schema $schema
     * @param TypeInfo $typeInfo
     * @param DocumentNode $documentNode
     * @param ValidationRule[] $rules
     *
     * @return Error[]
     * @throws Exception
     */
    public static function visitUsingRules(Schema $schema, TypeInfo $typeInfo, DocumentNode $documentNode, array $rules): array
    {
        $context = new ValidationContext($schema, $documentNode, $typeInfo);
        $visitors = [];
        foreach ($rules as $rule) {
            $visitors[] = $rule->getVisitor($context);
        }
        Visitor::visit($documentNode, Visitor::visitWithTypeInfo($typeInfo, Visitor::visitInParallel($visitors)));

        return $context->getErrors();
    }

    /**
     * Returns global validation rule by name. Standard rules are named by class name, so
     * example usage for such rules:
     *
     * $rule = DocumentValidator::getRule(GraphQL\Validator\Rules\QueryComplexity::class);
     *
     * @param string $name
     *
     * @return ValidationRule
     *
     * @api
     */
    public static function getRule(string $name): ?ValidationRule
    {
        $rules = static::allRules();

        if (isset($rules[$name])) {
            return $rules[$name];
        }

        $name = sprintf('GraphQL\\Validator\\Rules\\%s', $name);

        return $rules[$name] ?? null;
    }

    /**
     * Add rule to list of global validation rules
     *
     * @api
     */
    public static function addRule(ValidationRule $rule)
    {
        self::$rules[$rule->getName()] = $rule;
    }

    public static function isError($value): bool
    {
        return is_array($value)
            ? count(array_filter(
                $value,
                static function ($item): bool {
                    return $item instanceof Throwable;
                }
            )) === count($value)
            : $value instanceof Throwable;
    }

    public static function append(&$arr, $items)
    {
        if (is_array($items)) {
            $arr = array_merge($arr, $items);
        } else {
            $arr[] = $items;
        }

        return $arr;
    }

    /**
     * Utility which determines if a value literal node is valid for an input type.
     *
     * Deprecated. Rely on validation for documents co
     * ntaining literal values.
     *
     * @param Type $type
     * @param $valueNode
     * @return Error[]
     * @throws Exception
     * @deprecated
     */
    public static function isValidLiteralValue(Type $type, $valueNode): array
    {
        $emptySchema = new Schema([]);
        $emptyDoc = new DocumentNode(['definitions' => []]);
        $typeInfo = new TypeInfo($emptySchema, $type);
        $context = new ValidationContext($emptySchema, $emptyDoc, $typeInfo);
        $validator = new ValuesOfCorrectType();
        $visitor = $validator->getVisitor($context);
        Visitor::visit($valueNode, Visitor::visitWithTypeInfo($typeInfo, $visitor));

        return $context->getErrors();
    }

    /**
     * @throws Error
     */
    public static function assertValidSDL(DocumentNode $documentAST)
    {
        $errors = self::validateSDL($documentAST);
        if (count($errors) > 0) {
            throw new Error(self::combineErrorMessages($errors));
        }
    }

    /**
     * @param ValidationRule[]|null $rules
     *
     * @return Error[]
     *
     * @throws Exception
     */
    public static function validateSDL(
        DocumentNode $documentAST,
        ?Schema      $schemaToExtend = null,
        ?array       $rules = null
    ): array
    {
        $usedRules = $rules ?? self::sdlRules();
        $context = new SDLValidationContext($documentAST, $schemaToExtend);
        $visitors = [];
        foreach ($usedRules as $rule) {
            $visitors[] = $rule->getSDLVisitor($context);
        }
        Visitor::visit($documentAST, Visitor::visitInParallel($visitors));

        return $context->getErrors();
    }

    public static function sdlRules(): ?array
    {
        if (self::$sdlRules === null) {
            self::$sdlRules = [
                LoneSchemaDefinition::class => new LoneSchemaDefinition(),
                KnownDirectives::class => new KnownDirectives(),
                KnownArgumentNamesOnDirectives::class => new KnownArgumentNamesOnDirectives(),
                UniqueDirectivesPerLocation::class => new UniqueDirectivesPerLocation(),
                UniqueArgumentNames::class => new UniqueArgumentNames(),
                UniqueInputFieldNames::class => new UniqueInputFieldNames(),
                ProvidedRequiredArgumentsOnDirectives::class => new ProvidedRequiredArgumentsOnDirectives(),
            ];
        }

        return self::$sdlRules;
    }

    /**
     * @param Error[] $errors
     */
    #[Pure] private static function combineErrorMessages(array $errors): string
    {
        $str = '';
        foreach ($errors as $error) {
            $str .= ($error->getMessage() . "\n\n");
        }

        return $str;
    }

    /**
     * @throws Error
     */
    public static function assertValidSDLExtension(DocumentNode $documentAST, Schema $schema)
    {
        $errors = self::validateSDL($documentAST, $schema);
        if (count($errors) > 0) {
            throw new Error(self::combineErrorMessages($errors));
        }
    }
}
