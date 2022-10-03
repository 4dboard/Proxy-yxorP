***

# ReferenceExecutor





* Full name: `\GraphQL\Executor\ReferenceExecutor`
* This class implements:
[`\GraphQL\Executor\ExecutorImplementation`](./ExecutorImplementation.md)



## Properties


### UNDEFINED



```php
protected static object $UNDEFINED
```



* This property is **static**.


***

### exeContext



```php
protected \GraphQL\Executor\ExecutionContext $exeContext
```






***

### subFieldCache



```php
protected \SplObjectStorage $subFieldCache
```






***

## Methods


### __construct



```php
protected __construct(\GraphQL\Executor\ExecutionContext $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Executor\ExecutionContext** |  |




***

### create



```php
public static create(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, mixed $rootValue, mixed $contextValue, array|\Traversable $variableValues, ?string $operationName, callable $fieldResolver): \GraphQL\Executor\ExecutorImplementation
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promiseAdapter` | **\GraphQL\Executor\Promise\PromiseAdapter** |  |
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$documentNode` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed** |  |
| `$contextValue` | **mixed** |  |
| `$variableValues` | **array&#124;\Traversable** |  |
| `$operationName` | **?string** |  |
| `$fieldResolver` | **callable** |  |




***

### buildExecutionContext

Constructs an ExecutionContext object from the arguments passed to
execute, which we will pass throughout the other execution methods.

```php
protected static buildExecutionContext(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, mixed $rootValue, mixed $contextValue, array|\Traversable $rawVariableValues, ?string $operationName = null, ?callable $fieldResolver = null, ?\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter = null): \GraphQL\Executor\ExecutionContext|\GraphQL\Error\Error[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$documentNode` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed** |  |
| `$contextValue` | **mixed** |  |
| `$rawVariableValues` | **array&#124;\Traversable** |  |
| `$operationName` | **?string** |  |
| `$fieldResolver` | **?callable** |  |
| `$promiseAdapter` | **?\GraphQL\Executor\Promise\PromiseAdapter** |  |




***

### doExecute

Returns promise of {@link ExecutionResult}. Promise should always resolve, never reject.

```php
public doExecute(): \GraphQL\Executor\Promise\Promise
```











***

### buildResponse



```php
protected buildResponse(mixed|\GraphQL\Executor\Promise\Promise|null $data): \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed&#124;\GraphQL\Executor\Promise\Promise&#124;null** |  |




***

### executeOperation

Implements the "Evaluating operations" section of the spec.

```php
protected executeOperation(\GraphQL\Language\AST\OperationDefinitionNode $operation, mixed $rootValue): array|\GraphQL\Executor\Promise\Promise|\stdClass|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\GraphQL\Language\AST\OperationDefinitionNode** |  |
| `$rootValue` | **mixed** |  |




***

### getOperationRootType

Extracts the root type of the operation from the schema.

```php
protected getOperationRootType(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\OperationDefinitionNode $operation): \GraphQL\Type\Definition\ObjectType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$operation` | **\GraphQL\Language\AST\OperationDefinitionNode** |  |




***

### collectFields

Given a selectionSet, adds all of the fields in that selection to
the passed in map of fields, and returns it at the end.

```php
protected collectFields(\GraphQL\Type\Definition\ObjectType $runtimeType, \GraphQL\Language\AST\SelectionSetNode $selectionSet, \ArrayObject $fields, \ArrayObject $visitedFragmentNames): \ArrayObject
```

CollectFields requires the "runtime type" of an object. For a field which
returns an Interface or Union type, the "runtime type" will be the actual
Object type returned by that field.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$runtimeType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$selectionSet` | **\GraphQL\Language\AST\SelectionSetNode** |  |
| `$fields` | **\ArrayObject** |  |
| `$visitedFragmentNames` | **\ArrayObject** |  |




***

### shouldIncludeNode

Determines if a field should be included based on the @include and @skip
directives, where @skip has higher precedence than @include.

```php
protected shouldIncludeNode(\GraphQL\Language\AST\FragmentSpreadNode|\GraphQL\Language\AST\FieldNode|\GraphQL\Language\AST\InlineFragmentNode $node): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\FragmentSpreadNode&#124;\GraphQL\Language\AST\FieldNode&#124;\GraphQL\Language\AST\InlineFragmentNode** |  |




***

### getFieldEntryKey

Implements the logic to compute the key of a given fields entry

```php
protected static getFieldEntryKey(\GraphQL\Language\AST\FieldNode $node): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\FieldNode** |  |




***

### doesFragmentConditionMatch

Determines if a fragment is applicable to the given type.

```php
protected doesFragmentConditionMatch(\GraphQL\Language\AST\FragmentDefinitionNode|\GraphQL\Language\AST\InlineFragmentNode $fragment, \GraphQL\Type\Definition\ObjectType $type): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fragment` | **\GraphQL\Language\AST\FragmentDefinitionNode&#124;\GraphQL\Language\AST\InlineFragmentNode** |  |
| `$type` | **\GraphQL\Type\Definition\ObjectType** |  |




***

### executeFieldsSerially

Implements the "Evaluating selection sets" section of the spec
for "write" mode.

```php
protected executeFieldsSerially(\GraphQL\Type\Definition\ObjectType $parentType, mixed $rootValue, (string|int)[] $path, \ArrayObject $fields): array|\GraphQL\Executor\Promise\Promise|\stdClass
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$rootValue` | **mixed** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$fields` | **\ArrayObject** |  |




***

### resolveField

Resolves the field on the given root value.

```php
protected resolveField(\GraphQL\Type\Definition\ObjectType $parentType, mixed $rootValue, \ArrayObject $fieldNodes, (string|int)[] $path): array|\Throwable|mixed|null
```

In particular, this figures out the value that the field returns
by calling its resolve function, then calls completeValue to complete promises,
serialize scalars, or execute the sub-selection-set for objects.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$rootValue` | **mixed** |  |
| `$fieldNodes` | **\ArrayObject** |  |
| `$path` | **(string&#124;int)[]** |  |




***

### getFieldDef

This method looks up the field on the given type definition.

```php
protected getFieldDef(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\ObjectType $parentType, string $fieldName): ?\GraphQL\Type\Definition\FieldDefinition
```

It has special casing for the two introspection fields, __schema
and __typename. __typename is special because it can always be
queried as a field, even in situations where no other fields
are allowed, like on a Union. __schema could get automatically
added to the query type, but that would require mutating type
definitions, which would cause issues.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$parentType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$fieldName` | **string** |  |




***

### resolveFieldValueOrError

Isolates the "ReturnOrAbrupt" behavior to not de-opt the `resolveField` function.

```php
protected resolveFieldValueOrError(\GraphQL\Type\Definition\FieldDefinition $fieldDef, \GraphQL\Language\AST\FieldNode $fieldNode, callable $resolveFn, mixed $rootValue, \GraphQL\Type\Definition\ResolveInfo $info): \Throwable|\GraphQL\Executor\Promise\Promise|mixed
```

Returns the result of resolveFn or the abrupt-return Error object.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldDef` | **\GraphQL\Type\Definition\FieldDefinition** |  |
| `$fieldNode` | **\GraphQL\Language\AST\FieldNode** |  |
| `$resolveFn` | **callable** |  |
| `$rootValue` | **mixed** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |




***

### completeValueCatchingError

This is a small wrapper around completeValue which detects and logs errors
in the execution context.

```php
protected completeValueCatchingError(\GraphQL\Type\Definition\Type $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, (string|int)[] $path, mixed $result): array|\GraphQL\Executor\Promise\Promise|\stdClass|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\Type** |  |
| `$fieldNodes` | **\ArrayObject** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$result` | **mixed** |  |




***

### handleFieldError



```php
protected handleFieldError(mixed $rawError, \ArrayObject $fieldNodes, (string|int)[] $path, \GraphQL\Type\Definition\Type $returnType): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rawError` | **mixed** |  |
| `$fieldNodes` | **\ArrayObject** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$returnType` | **\GraphQL\Type\Definition\Type** |  |




***

### completeValue

Implements the instructions for completeValue as defined in the
"Field entries" section of the spec.

```php
protected completeValue(\GraphQL\Type\Definition\Type $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, (string|int)[] $path, mixed& $result): array|mixed|\GraphQL\Executor\Promise\Promise|null
```

If the field type is Non-Null, then this recursively completes the value
for the inner type. It throws a field error if that completion returns null,
as per the "Nullability" section of the spec.

If the field type is a List, then this recursively completes the value
for the inner type on each item in the list.

If the field type is a Scalar or Enum, ensures the completed value is a legal
value of the type by calling the `serialize` method of GraphQL type
definition.

If the field is an abstract type, determine the runtime type of the value
and then complete based on that type

Otherwise, the field type expects a sub-selection set, and will complete the
value by evaluating all sub-selections.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\Type** |  |
| `$fieldNodes` | **\ArrayObject** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$result` | **mixed** |  |




***

### isPromise



```php
protected isPromise(mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getPromise

Only returns the value if it acts like a Promise, i.e. has a "then" function,
otherwise returns null.

```php
protected getPromise(mixed $value): ?\GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### promiseReduce

Similar to array_reduce(), however the reducing callback may return
a Promise, in which case reduction will continue after each promise resolves.

```php
protected promiseReduce(array $values, callable $callback, \GraphQL\Executor\Promise\Promise|mixed|null $initialValue): \GraphQL\Executor\Promise\Promise|mixed|null
```

If the callback does not return a Promise, then this function will also not
return a Promise.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |
| `$callback` | **callable** |  |
| `$initialValue` | **\GraphQL\Executor\Promise\Promise&#124;mixed&#124;null** |  |




***

### completeListValue

Complete a list value by completing each item in the list with the inner type.

```php
protected completeListValue(\GraphQL\Type\Definition\ListOfType $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, (string|int)[] $path, array|\Traversable& $results): array|\GraphQL\Executor\Promise\Promise|\stdClass
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\ListOfType** |  |
| `$fieldNodes` | **\ArrayObject** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$results` | **array&#124;\Traversable** |  |




***

### completeLeafValue

Complete a Scalar or Enum by serializing to a valid value, throwing if serialization is not possible.

```php
protected completeLeafValue(\GraphQL\Type\Definition\LeafType $returnType, mixed& $result): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\LeafType** |  |
| `$result` | **mixed** |  |




***

### completeAbstractValue

Complete a value of an abstract type by determining the runtime object type
of that value, then complete the value for that type.

```php
protected completeAbstractValue(\GraphQL\Type\Definition\AbstractType $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, (string|int)[] $path, array& $result): array|\GraphQL\Executor\Promise\Promise|\stdClass
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\AbstractType** |  |
| `$fieldNodes` | **\ArrayObject** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$result` | **array** |  |




***

### defaultTypeResolver

If a resolveType function is not given, then a default resolve behavior is
used which attempts two strategies:

```php
protected defaultTypeResolver(mixed|null $value, mixed|null $contextValue, \GraphQL\Type\Definition\ResolveInfo $info, \GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\UnionType $abstractType): \GraphQL\Executor\Promise\Promise|\GraphQL\Type\Definition\Type|string|null
```

First, See if the provided value has a `__typename` field defined, if so, use
that value as name of the resolved type.

Otherwise, test each possible type for the abstract type by calling
isTypeOf for the object being coerced, returning the first type that matches.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed&#124;null** |  |
| `$contextValue` | **mixed&#124;null** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |
| `$abstractType` | **\GraphQL\Type\Definition\InterfaceType&#124;\GraphQL\Type\Definition\UnionType** |  |




***

### completeObjectValue

Complete an Object value by executing all sub-selections.

```php
protected completeObjectValue(\GraphQL\Type\Definition\ObjectType $returnType, \ArrayObject $fieldNodes, \GraphQL\Type\Definition\ResolveInfo $info, (string|int)[] $path, mixed& $result): array|\GraphQL\Executor\Promise\Promise|\stdClass
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$fieldNodes` | **\ArrayObject** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$result` | **mixed** |  |




***

### invalidReturnTypeError



```php
protected invalidReturnTypeError(\GraphQL\Type\Definition\ObjectType $returnType, array $result, \ArrayObject $fieldNodes): \GraphQL\Error\Error
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$result` | **array** |  |
| `$fieldNodes` | **\ArrayObject** |  |




***

### collectAndExecuteSubfields



```php
protected collectAndExecuteSubfields(\GraphQL\Type\Definition\ObjectType $returnType, \ArrayObject $fieldNodes, (string|int)[] $path, mixed& $result): array|\GraphQL\Executor\Promise\Promise|\stdClass
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$fieldNodes` | **\ArrayObject** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$result` | **mixed** |  |




***

### collectSubFields

A memoized collection of relevant subfields with regard to the return
type. Memoizing ensures the subfields are not repeatedly calculated, which
saves overhead when resolving lists of values.

```php
protected collectSubFields(\GraphQL\Type\Definition\ObjectType $returnType, \ArrayObject $fieldNodes): \ArrayObject
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$fieldNodes` | **\ArrayObject** |  |




***

### executeFields

Implements the "Evaluating selection sets" section of the spec
for "read" mode.

```php
protected executeFields(\GraphQL\Type\Definition\ObjectType $parentType, mixed $rootValue, (string|int)[] $path, \ArrayObject $fields): \GraphQL\Executor\Promise\Promise|\stdClass|array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentType` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$rootValue` | **mixed** |  |
| `$path` | **(string&#124;int)[]** |  |
| `$fields` | **\ArrayObject** |  |




***

### fixResultsIfEmptyArray

Differentiate empty objects from empty lists.

```php
protected static fixResultsIfEmptyArray(array|mixed $results): array|\stdClass|mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$results` | **array&#124;mixed** |  |



**See Also:**

* https://github.com/webonyx/graphql-php/issues/59 - 

***

### promiseForAssocArray

Transform an associative array with Promises to a Promise which resolves to an
associative array where all Promises were resolved.

```php
protected promiseForAssocArray(array&lt;string,\GraphQL\Executor\Promise\Promise|mixed&gt; $assoc): \GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assoc` | **array<string,\GraphQL\Executor\Promise\Promise&#124;mixed>** |  |




***

### ensureValidRuntimeType



```php
protected ensureValidRuntimeType(string|\GraphQL\Type\Definition\ObjectType|null $runtimeTypeOrName, \GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\UnionType $returnType, \GraphQL\Type\Definition\ResolveInfo $info, mixed& $result): \GraphQL\Type\Definition\ObjectType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$runtimeTypeOrName` | **string&#124;\GraphQL\Type\Definition\ObjectType&#124;null** |  |
| `$returnType` | **\GraphQL\Type\Definition\InterfaceType&#124;\GraphQL\Type\Definition\UnionType** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |
| `$result` | **mixed** |  |




***


***

