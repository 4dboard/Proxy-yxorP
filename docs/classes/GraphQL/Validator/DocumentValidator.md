***

# DocumentValidator

Implements the "Validation" section of the spec.

Validation runs synchronously, returning an array of encountered errors, or
an empty array if no errors were encountered and the document is valid.

A list of specific validation rules may be provided. If not provided, the
default list of rules defined by the GraphQL specification will be used.

Each validation rule is an instance of GraphQL\Validator\Rules\ValidationRule
which returns a visitor (see the [GraphQL\Language\Visitor API](reference.md#graphqllanguagevisitor)).

Visitor methods are expected to return an instance of [GraphQL\Error\Error](reference.md#graphqlerrorerror),
or array of such instances when invalid.

Optionally a custom TypeInfo instance may be provided. If not provided, one
will be created from the provided schema.

* Full name: `\GraphQL\Validator\DocumentValidator`

## Properties

### rules

```php
private static \GraphQL\Validator\Rules\ValidationRule[] $rules
```

* This property is **static**.

***

### defaultRules

```php
private static \GraphQL\Validator\Rules\ValidationRule[]|null $defaultRules
```

* This property is **static**.

***

### securityRules

```php
private static \GraphQL\Validator\Rules\QuerySecurityRule[]|null $securityRules
```

* This property is **static**.

***

### sdlRules

```php
private static \GraphQL\Validator\Rules\ValidationRule[]|null $sdlRules
```

* This property is **static**.

***

### initRules

```php
private static bool $initRules
```

* This property is **static**.

***

## Methods

### validate

Primary method for query validation. See class description for details.

```php
public static validate(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $ast, \GraphQL\Validator\Rules\ValidationRule[]|null $rules = null, ?\GraphQL\Utils\TypeInfo $typeInfo = null): \GraphQL\Error\Error[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$ast` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$rules` | **\GraphQL\Validator\Rules\ValidationRule[]&#124;null** |  |
| `$typeInfo` | **?\GraphQL\Utils\TypeInfo** |  |

***

### allRules

Returns all global validation rules.

```php
public static allRules(): \GraphQL\Validator\Rules\ValidationRule[]
```

* This method is **static**.

***

### defaultRules

```php
public static defaultRules(): mixed
```

* This method is **static**.

***

### securityRules

```php
public static securityRules(): \GraphQL\Validator\Rules\QuerySecurityRule[]
```

* This method is **static**.

***

### sdlRules

```php
public static sdlRules(): mixed
```

* This method is **static**.

***

### visitUsingRules

This uses a specialized visitor which runs multiple visitors in parallel,
while maintaining the visitor skip and break API.

```php
public static visitUsingRules(\GraphQL\Type\Schema $schema, \GraphQL\Utils\TypeInfo $typeInfo, \GraphQL\Language\AST\DocumentNode $documentNode, \GraphQL\Validator\Rules\ValidationRule[] $rules): \GraphQL\Error\Error[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$typeInfo` | **\GraphQL\Utils\TypeInfo** |  |
| `$documentNode` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$rules` | **\GraphQL\Validator\Rules\ValidationRule[]** |  |

***

### getRule

Returns global validation rule by name. Standard rules are named by class name, so
example usage for such rules:

```php
public static getRule(string $name): \GraphQL\Validator\Rules\ValidationRule
```

$rule = DocumentValidator::getRule(GraphQL\Validator\Rules\QueryComplexity::class);

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### addRule

Add rule to list of global validation rules

```php
public static addRule(\GraphQL\Validator\Rules\ValidationRule $rule): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rule` | **\GraphQL\Validator\Rules\ValidationRule** |  |

***

### isError

```php
public static isError(mixed $value): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### append

```php
public static append(mixed& $arr, mixed $items): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arr` | **mixed** |  |
| `$items` | **mixed** |  |

***

### isValidLiteralValue

Utility which determines if a value literal node is valid for an input type.

```php
public static isValidLiteralValue(\GraphQL\Type\Definition\Type $type, mixed $valueNode): \GraphQL\Error\Error[]
```

Deprecated. Rely on validation for documents co
ntaining literal values.

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$valueNode` | **mixed** |  |

***

### validateSDL

```php
public static validateSDL(\GraphQL\Language\AST\DocumentNode $documentAST, ?\GraphQL\Type\Schema $schemaToExtend = null, \GraphQL\Validator\Rules\ValidationRule[]|null $rules = null): \GraphQL\Error\Error[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$documentAST` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$schemaToExtend` | **?\GraphQL\Type\Schema** |  |
| `$rules` | **\GraphQL\Validator\Rules\ValidationRule[]&#124;null** |  |

***

### assertValidSDL

```php
public static assertValidSDL(\GraphQL\Language\AST\DocumentNode $documentAST): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$documentAST` | **\GraphQL\Language\AST\DocumentNode** |  |

***

### assertValidSDLExtension

```php
public static assertValidSDLExtension(\GraphQL\Language\AST\DocumentNode $documentAST, \GraphQL\Type\Schema $schema): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$documentAST` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$schema` | **\GraphQL\Type\Schema** |  |

***

### combineErrorMessages

```php
private static combineErrorMessages(\GraphQL\Error\Error[] $errors): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errors` | **\GraphQL\Error\Error[]** |  |

***


***

