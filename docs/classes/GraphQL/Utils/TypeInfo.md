***

# TypeInfo

* Full name: `\GraphQL\Utils\TypeInfo`

## Properties

### schema

```php
private \GraphQL\Type\Schema $schema
```

***

### typeStack

```php
private ((\GraphQL\Type\Definition\OutputType&amp;\GraphQL\Type\Definition\Type)|null)[] $typeStack
```

***

### parentTypeStack

```php
private ((\GraphQL\Type\Definition\CompositeType&amp;\GraphQL\Type\Definition\Type)|null)[] $parentTypeStack
```

***

### inputTypeStack

```php
private ((\GraphQL\Type\Definition\InputType&amp;\GraphQL\Type\Definition\Type)|null)[] $inputTypeStack
```

***

### fieldDefStack

```php
private \GraphQL\Type\Definition\FieldDefinition[] $fieldDefStack
```

***

### defaultValueStack

```php
private array $defaultValueStack
```

***

### directive

```php
private \GraphQL\Type\Definition\Directive|null $directive
```

***

### argument

```php
private \GraphQL\Type\Definition\FieldArgument|null $argument
```

***

### enumValue

```php
private mixed $enumValue
```

***

## Methods

### __construct

```php
public __construct(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type|null $initialType = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$initialType` | **\GraphQL\Type\Definition\Type&#124;null** |  |

***

### isEqualType

```php
public static isEqualType(\GraphQL\Type\Definition\Type $typeA, \GraphQL\Type\Definition\Type $typeB): bool
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeA` | **\GraphQL\Type\Definition\Type** |  |
| `$typeB` | **\GraphQL\Type\Definition\Type** |  |

***

### isTypeSubTypeOf

```php
public static isTypeSubTypeOf(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $maybeSubType, \GraphQL\Type\Definition\Type $superType): mixed
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$maybeSubType` | **\GraphQL\Type\Definition\Type** |  |
| `$superType` | **\GraphQL\Type\Definition\Type** |  |

***

### doTypesOverlap

```php
public static doTypesOverlap(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\CompositeType $typeA, \GraphQL\Type\Definition\CompositeType $typeB): mixed
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$typeA` | **\GraphQL\Type\Definition\CompositeType** |  |
| `$typeB` | **\GraphQL\Type\Definition\CompositeType** |  |

***

### extractTypes

Given root type scans through all fields to find nested types. Returns array where keys are for type name
and value contains corresponding type instance.

```php
public static extractTypes(\GraphQL\Type\Definition\Type|null $type, \GraphQL\Type\Definition\Type[]|null $typeMap = null): \GraphQL\Type\Definition\Type[]|null
```

Example output:
[
'String' => $instanceOfStringType,
'MyType' => $instanceOfMyType,
...
]

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type&#124;null** |  |
| `$typeMap` | **\GraphQL\Type\Definition\Type[]&#124;null** |  |

***

### extractTypesFromDirectives

```php
public static extractTypesFromDirectives(\GraphQL\Type\Definition\Directive $directive, \GraphQL\Type\Definition\Type[] $typeMap = []): \GraphQL\Type\Definition\Type[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **\GraphQL\Type\Definition\Directive** |  |
| `$typeMap` | **\GraphQL\Type\Definition\Type[]** |  |

***

### getParentInputType

```php
public getParentInputType(): (\GraphQL\Type\Definition\Type&amp;\GraphQL\Type\Definition\InputType)|null
```

***

### getArgument

```php
public getArgument(): ?\GraphQL\Type\Definition\FieldArgument
```

***

### getEnumValue

```php
public getEnumValue(): mixed
```

***

### enter

```php
public enter(\GraphQL\Language\AST\Node $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\Node** |  |

***

### getType

```php
public getType(): ?\GraphQL\Type\Definition\OutputType
```

***

### getParentType

```php
public getParentType(): ?\GraphQL\Type\Definition\CompositeType
```

***

### getFieldDefinition

Not exactly the same as the executor's definition of getFieldDef, in this
statically evaluated environment we do not always have an Object type,
and need to handle Interface and Union types.

```php
private static getFieldDefinition(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $parentType, \GraphQL\Language\AST\FieldNode $fieldNode): ?\GraphQL\Type\Definition\FieldDefinition
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$parentType` | **\GraphQL\Type\Definition\Type** |  |
| `$fieldNode` | **\GraphQL\Language\AST\FieldNode** |  |

***

### typeFromAST

```php
public static typeFromAST(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\NamedTypeNode|\GraphQL\Language\AST\ListTypeNode|\GraphQL\Language\AST\NonNullTypeNode $inputTypeNode): ?\GraphQL\Type\Definition\Type
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$inputTypeNode` | **\GraphQL\Language\AST\NamedTypeNode&#124;\GraphQL\Language\AST\ListTypeNode&#124;\GraphQL\Language\AST\NonNullTypeNode** |  |

***

### getDirective

```php
public getDirective(): ?\GraphQL\Type\Definition\Directive
```

***

### getFieldDef

```php
public getFieldDef(): ?\GraphQL\Type\Definition\FieldDefinition
```

***

### getDefaultValue

```php
public getDefaultValue(): mixed|null
```

***

### getInputType

```php
public getInputType(): ?\GraphQL\Type\Definition\InputType
```

***

### leave

```php
public leave(\GraphQL\Language\AST\Node $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\Node** |  |

***


***

