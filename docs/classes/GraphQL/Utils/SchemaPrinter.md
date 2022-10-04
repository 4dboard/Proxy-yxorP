***

# SchemaPrinter

Given an instance of Schema, prints it in GraphQL type language.

* Full name: `\GraphQL\Utils\SchemaPrinter`

## Methods

### doPrint

```php
public static doPrint(\GraphQL\Type\Schema $schema, array&lt;string,bool&gt; $options = []): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$options` | **array<string,bool>** | Available options:<br />- commentDescriptions:<br />    Provide true to use preceding comments as the description.<br />    This option is provided to ease adoption and will be removed in v16. |

***

### printFilteredSchema

```php
protected static printFilteredSchema(\GraphQL\Type\Schema $schema, callable $directiveFilter, callable $typeFilter, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$directiveFilter` | **callable** |  |
| `$typeFilter` | **callable** |  |
| `$options` | **array<string,bool>** |  |

***

### printSchemaDefinition

```php
protected static printSchemaDefinition(\GraphQL\Type\Schema $schema): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |

***

### isSchemaOfCommonNames

GraphQL schema define root types for each type of operation. These types are
the same as any other type and can be named in any manner, however there is
a common naming convention:

```php
protected static isSchemaOfCommonNames(\GraphQL\Type\Schema $schema): bool
```

schema {
query: Query
mutation: Mutation
}

When using this naming convention, the schema description can be omitted.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |

***

### printDirective

```php
protected static printDirective(\GraphQL\Type\Definition\Directive $directive, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **\GraphQL\Type\Definition\Directive** |  |
| `$options` | **array<string,bool>** |  |

***

### printDescription

```php
protected static printDescription(array&lt;string,bool&gt; $options, mixed $def, mixed $indentation = &#039;&#039;, mixed $firstInBlock = true): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array<string,bool>** |  |
| `$def` | **mixed** |  |
| `$indentation` | **mixed** |  |
| `$firstInBlock` | **mixed** |  |

***

### descriptionLines

```php
protected static descriptionLines(string $description, int $maxLen): string[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** |  |
| `$maxLen` | **int** |  |

***

### breakLine

```php
protected static breakLine(string $line, int $maxLen): string[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **string** |  |
| `$maxLen` | **int** |  |

***

### printDescriptionWithComments

```php
protected static printDescriptionWithComments(mixed $lines, mixed $indentation, mixed $firstInBlock): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lines` | **mixed** |  |
| `$indentation` | **mixed** |  |
| `$firstInBlock` | **mixed** |  |

***

### escapeQuote

```php
protected static escapeQuote(mixed $line): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |

***

### printArgs

```php
protected static printArgs(array&lt;string,bool&gt; $options, mixed $args, mixed $indentation = &#039;&#039;): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array<string,bool>** |  |
| `$args` | **mixed** |  |
| `$indentation` | **mixed** |  |

***

### printInputValue

```php
protected static printInputValue(mixed $arg): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arg` | **mixed** |  |

***

### printType

```php
public static printType(\GraphQL\Type\Definition\Type $type, array&lt;string,bool&gt; $options = []): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$options` | **array<string,bool>** |  |

***

### printScalar

```php
protected static printScalar(\GraphQL\Type\Definition\ScalarType $type, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ScalarType** |  |
| `$options` | **array<string,bool>** |  |

***

### printObject

```php
protected static printObject(\GraphQL\Type\Definition\ObjectType $type, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType** |  |
| `$options` | **array<string,bool>** |  |

***

### printFields

```php
protected static printFields(array&lt;string,bool&gt; $options, mixed $type): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array<string,bool>** |  |
| `$type` | **mixed** |  |

***

### printDeprecated

```php
protected static printDeprecated(mixed $fieldOrEnumVal): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldOrEnumVal` | **mixed** |  |

***

### printInterface

```php
protected static printInterface(\GraphQL\Type\Definition\InterfaceType $type, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\InterfaceType** |  |
| `$options` | **array<string,bool>** |  |

***

### printUnion

```php
protected static printUnion(\GraphQL\Type\Definition\UnionType $type, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\UnionType** |  |
| `$options` | **array<string,bool>** |  |

***

### printEnum

```php
protected static printEnum(\GraphQL\Type\Definition\EnumType $type, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\EnumType** |  |
| `$options` | **array<string,bool>** |  |

***

### printEnumValues

```php
protected static printEnumValues(mixed $values, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **mixed** |  |
| `$options` | **array<string,bool>** |  |

***

### printInputObject

```php
protected static printInputObject(\GraphQL\Type\Definition\InputObjectType $type, array&lt;string,bool&gt; $options): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\InputObjectType** |  |
| `$options` | **array<string,bool>** |  |

***

### printIntrospectionSchema

```php
public static printIntrospectionSchema(\GraphQL\Type\Schema $schema, array&lt;string,bool&gt; $options = []): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$options` | **array<string,bool>** |  |

***


***

