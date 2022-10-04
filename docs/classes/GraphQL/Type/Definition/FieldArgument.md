***

# FieldArgument

* Full name: `\GraphQL\Type\Definition\FieldArgument`

## Properties

### name

```php
public string $name
```

***

### defaultValue

```php
public mixed $defaultValue
```

***

### description

```php
public string|null $description
```

***

### astNode

```php
public \GraphQL\Language\AST\InputValueDefinitionNode|null $astNode
```

***

### config

```php
public array $config
```

***

### type

```php
private \GraphQL\Type\Definition\Type&amp;\GraphQL\Type\Definition\InputType $type
```

***

## Methods

### __construct

```php
public __construct(array $def): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **array** |  |

***

### createMap

```php
public static createMap(array $config): \GraphQL\Type\Definition\FieldArgument[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |

***

### getType

```php
public getType(): \GraphQL\Type\Definition\Type
```

***

### defaultValueExists

```php
public defaultValueExists(): bool
```

***

### isRequired

```php
public isRequired(): bool
```

***

### assertValid

```php
public assertValid(\GraphQL\Type\Definition\FieldDefinition $parentField, \GraphQL\Type\Definition\Type $parentType): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentField` | **\GraphQL\Type\Definition\FieldDefinition** |  |
| `$parentType` | **\GraphQL\Type\Definition\Type** |  |

***


***

