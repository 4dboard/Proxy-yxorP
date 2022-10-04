***

# GraphQL

This is the primary facade for fulfilling GraphQL operations.

See [related documentation](executing-queries.md).

* Full name: `\GraphQL\GraphQL`

## Methods

### executeQuery

Executes graphql query.

```php
public static executeQuery(\GraphQL\Type\Schema $schema, string|\GraphQL\Language\AST\DocumentNode $source, mixed $rootValue = null, mixed $contextValue = null, array|null $variableValues = null, ?string $operationName = null, ?callable $fieldResolver = null, \GraphQL\Validator\Rules\ValidationRule[] $validationRules = null): \GraphQL\Executor\ExecutionResult
```

More sophisticated GraphQL servers, such as those which persist queries,
may wish to separate the validation and execution phases to a static time
tooling step, and a server runtime step.

Available options:

schema:
The GraphQL type system to use when validating and executing a query.
source:
A GraphQL language formatted string representing the requested operation.
rootValue:
The value provided as the first argument to resolver functions on the top
level type (e.g. the query object type).
contextValue:
The context value is provided as an argument to resolver functions after
field arguments. It is used to pass shared information useful at any point
during executing this query, for example the currently logged in user and
connections to databases or other services.
variableValues:
A mapping of variable name to runtime value to use for all variables
defined in the requestString.
operationName:
The name of the operation to use if requestString contains multiple
possible operations. Can be omitted if requestString contains only
one operation.
fieldResolver:
A resolver function to use when one is not provided by the schema.
If not provided, the default field resolver is used (which looks for a
value on the source value with the field's name).
validationRules:
A set of rules for query validation step. Default value is all available rules.
Empty array would allow to skip query validation (may be convenient for persisted
queries which are validated before persisting and assumed valid during execution)

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$source` | **string&#124;\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed** |  |
| `$contextValue` | **mixed** |  |
| `$variableValues` | **array&#124;null** |  |
| `$operationName` | **?string** |  |
| `$fieldResolver` | **?callable** |  |
| `$validationRules` | **\GraphQL\Validator\Rules\ValidationRule[]** |  |

***

### promiseToExecute

Same as executeQuery(), but requires PromiseAdapter and always returns a Promise.

```php
public static promiseToExecute(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, string|\GraphQL\Language\AST\DocumentNode $source, mixed $rootValue = null, mixed $context = null, array|null $variableValues = null, ?string $operationName = null, ?callable $fieldResolver = null, \GraphQL\Validator\Rules\ValidationRule[]|null $validationRules = null): \GraphQL\Executor\Promise\Promise
```

Useful for Async PHP platforms.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promiseAdapter` | **\GraphQL\Executor\Promise\PromiseAdapter** |  |
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$source` | **string&#124;\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed** |  |
| `$context` | **mixed** |  |
| `$variableValues` | **array&#124;null** |  |
| `$operationName` | **?string** |  |
| `$fieldResolver` | **?callable** |  |
| `$validationRules` | **\GraphQL\Validator\Rules\ValidationRule[]&#124;null** |  |

***

### execute

```php
public static execute(\GraphQL\Type\Schema $schema, string|\GraphQL\Language\AST\DocumentNode $source, mixed $rootValue = null, mixed $contextValue = null, array|null $variableValues = null, ?string $operationName = null): \GraphQL\Executor\Promise\Promise|array
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$source` | **string&#124;\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed** |  |
| `$contextValue` | **mixed** |  |
| `$variableValues` | **array&#124;null** |  |
| `$operationName` | **?string** |  |

***

### executeAndReturnResult

```php
public static executeAndReturnResult(\GraphQL\Type\Schema $schema, string|\GraphQL\Language\AST\DocumentNode $source, mixed $rootValue = null, mixed $contextValue = null, array|null $variableValues = null, ?string $operationName = null): \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\Promise\Promise
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$source` | **string&#124;\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed** |  |
| `$contextValue` | **mixed** |  |
| `$variableValues` | **array&#124;null** |  |
| `$operationName` | **?string** |  |

***

### getStandardDirectives

Returns directives defined in GraphQL spec

```php
public static getStandardDirectives(): \GraphQL\Type\Definition\Directive[]
```

* This method is **static**.

***

### getStandardTypes

Returns types defined in GraphQL spec

```php
public static getStandardTypes(): \GraphQL\Type\Definition\Type[]
```

* This method is **static**.

***

### overrideStandardTypes

Replaces standard types with types from this list (matching by name)
Standard types not listed here remain untouched.

```php
public static overrideStandardTypes(array&lt;string,\GraphQL\Type\Definition\ScalarType&gt; $types): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **array<string,\GraphQL\Type\Definition\ScalarType>** |  |

***

### getStandardValidationRules

Returns standard validation rules implementing GraphQL spec

```php
public static getStandardValidationRules(): \GraphQL\Validator\Rules\ValidationRule[]
```

* This method is **static**.

***

### setDefaultFieldResolver

Set default resolver implementation

```php
public static setDefaultFieldResolver(callable $fn): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **callable** |  |

***

### setPromiseAdapter

```php
public static setPromiseAdapter(?\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter = null): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promiseAdapter` | **?\GraphQL\Executor\Promise\PromiseAdapter** |  |

***

### useExperimentalExecutor

Experimental: Switch to the new executor

```php
public static useExperimentalExecutor(): mixed
```

* This method is **static**.

***

### useReferenceExecutor

Experimental: Switch back to the default executor

```php
public static useReferenceExecutor(): mixed
```

* This method is **static**.

***

### getInternalDirectives

Returns directives defined in GraphQL spec

```php
public static getInternalDirectives(): \GraphQL\Type\Definition\Directive[]
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***


***

