***

# EnumType

Registry of standard GraphQL types
and a base class for all other types.

* Full name: `\GraphQL\Type\Definition\EnumType`
* Parent class: [`\GraphQL\Type\Definition\Type`](./Type.md)
* This class implements:
  [`\GraphQL\Type\Definition\InputType`](./InputType.md), [`\GraphQL\Type\Definition\OutputType`](./OutputType.md)
  , [`\GraphQL\Type\Definition\LeafType`](./LeafType.md), [`\GraphQL\Type\Definition\NullableType`](./NullableType.md)
  , [`\GraphQL\Type\Definition\NamedType`](./NamedType.md)

## Properties

### astNode

```php
public \GraphQL\Language\AST\EnumTypeDefinitionNode|null $astNode
```

***

### values

Lazily initialized.

```php
private \GraphQL\Type\Definition\EnumValueDefinition[] $values
```

***

### valueLookup

Lazily initialized.

```php
private \GraphQL\Utils\MixedStore $valueLookup
```

Actually a MixedStore<mixed, EnumValueDefinition>, PHPStan won't let us type it that way.




***

### nameLookup

```php
private \ArrayObject&lt;string,\GraphQL\Type\Definition\EnumValueDefinition&gt; $nameLookup
```

***

### extensionASTNodes

```php
public \GraphQL\Language\AST\EnumTypeExtensionNode[] $extensionASTNodes
```

***

## Methods

### __construct

```php
public __construct(mixed $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** |  |

***

### getValue

```php
public getValue(string|array $name): \GraphQL\Type\Definition\EnumValueDefinition|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array** |  |

***

### getNameLookup

```php
private getNameLookup(): \ArrayObject
```

***

### getValues

```php
public getValues(): \GraphQL\Type\Definition\EnumValueDefinition[]
```

***

### serialize

Serializes an internal value to include in a response.

```php
public serialize(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### getValueLookup

Actually returns a MixedStore<mixed, EnumValueDefinition>, PHPStan won't let us type it that way

```php
private getValueLookup(): \GraphQL\Utils\MixedStore
```

***

### parseValue

Parses an externally provided value (query variable) to use as an input

```php
public parseValue(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### parseLiteral

Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input

```php
public parseLiteral(\GraphQL\Language\AST\Node $valueNode, array|null $variables = null): null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$valueNode` | **\GraphQL\Language\AST\Node** |  |
| `$variables` | **array&#124;null** |  |

***

### assertValid

```php
public assertValid(): mixed
```

***

## Inherited methods

### id

```php
public static id(): \GraphQL\Type\Definition\ScalarType
```

* This method is **static**.

***

### string

```php
public static string(): \GraphQL\Type\Definition\ScalarType
```

* This method is **static**.

***

### boolean

```php
public static boolean(): \GraphQL\Type\Definition\ScalarType
```

* This method is **static**.

***

### int

```php
public static int(): \GraphQL\Type\Definition\ScalarType
```

* This method is **static**.

***

### float

```php
public static float(): \GraphQL\Type\Definition\ScalarType
```

* This method is **static**.

***

### listOf

```php
public static listOf(\GraphQL\Type\Definition\Type $wrappedType): \GraphQL\Type\Definition\ListOfType
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$wrappedType` | **\GraphQL\Type\Definition\Type** |  |

***

### nonNull

```php
public static nonNull(callable|\GraphQL\Type\Definition\NullableType $wrappedType): \GraphQL\Type\Definition\NonNull
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$wrappedType` | **callable&#124;\GraphQL\Type\Definition\NullableType** |  |

***

### isBuiltInType

Checks if the type is a builtin type

```php
public static isBuiltInType(\GraphQL\Type\Definition\Type $type): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### getAllBuiltInTypes

Returns all builtin in types including base scalar and
introspection types

```php
public static getAllBuiltInTypes(): \GraphQL\Type\Definition\Type[]
```

* This method is **static**.

***

### getStandardTypes

Returns all builtin scalar types

```php
public static getStandardTypes(): \GraphQL\Type\Definition\ScalarType[]
```

* This method is **static**.

***

### getInternalTypes

```php
public static getInternalTypes(): \GraphQL\Type\Definition\Type[]
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### overrideStandardTypes

```php
public static overrideStandardTypes(array&lt;string,\GraphQL\Type\Definition\ScalarType&gt; $types): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **array<string,\GraphQL\Type\Definition\ScalarType>** |  |

***

### isInputType

```php
public static isInputType(\GraphQL\Type\Definition\Type $type): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### getNamedType

```php
public static getNamedType(\GraphQL\Type\Definition\Type $type): ?\GraphQL\Type\Definition\Type
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### isOutputType

```php
public static isOutputType(\GraphQL\Type\Definition\Type $type): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### isLeafType

```php
public static isLeafType(\GraphQL\Type\Definition\Type $type): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### isCompositeType

```php
public static isCompositeType(\GraphQL\Type\Definition\Type $type): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### isAbstractType

```php
public static isAbstractType(\GraphQL\Type\Definition\Type $type): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### assertType

```php
public static assertType(mixed $type): \GraphQL\Type\Definition\Type
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |

***

### getNullableType

```php
public static getNullableType(\GraphQL\Type\Definition\Type $type): \GraphQL\Type\Definition\Type
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### assertValid

```php
public assertValid(): mixed
```

***

### jsonSerialize

```php
public jsonSerialize(): string
```

***

### toString

```php
public toString(): string
```

***

### __toString

```php
public __toString(): string
```

***

### tryInferName

```php
protected tryInferName(): string|null
```

***


***

