***

# Introspection

* Full name: `\GraphQL\Type\Introspection`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SCHEMA_FIELD_NAME`|public| |&#039;__schema&#039;|
|`TYPE_FIELD_NAME`|public| |&#039;__type&#039;|
|`TYPE_NAME_FIELD_NAME`|public| |&#039;__typename&#039;|

## Properties

### map

```php
private static array&lt;string,mixed&gt; $map
```

* This property is **static**.

***

## Methods

### getIntrospectionQuery

```php
public static getIntrospectionQuery(array&lt;string,bool&gt; $options = []): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array<string,bool>** | Available options:<br />- descriptions<br />  Whether to include descriptions in the introspection result.<br />  Default: true<br />- directiveIsRepeatable<br />  Whether to include `isRepeatable` flag on directives.<br />  Default: false |

***

### isIntrospectionType

```php
public static isIntrospectionType(\GraphQL\Type\Definition\Type $type): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### getTypes

```php
public static getTypes(): mixed
```

* This method is **static**.

***

### fromSchema

Build an introspection query from a Schema

```php
public static fromSchema(\GraphQL\Type\Schema $schema, array&lt;string,bool&gt; $options = []): array&lt;string,array&gt;|null
```

Introspection is useful for utilities that care about type and field
relationships, but do not need to traverse through those relationships.

This is the inverse of BuildClientSchema::build(). The primary use case is outside
of the server context, for instance when doing schema comparisons.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$options` | **array<string,bool>** | Available options:<br />- descriptions<br />  Whether to include `isRepeatable` flag on directives.<br />  Default: true<br />- directiveIsRepeatable<br />  Whether to include descriptions in the introspection result.<br />  Default: true |

***

### _schema

```php
public static _schema(): mixed
```

* This method is **static**.

***

### _type

```php
public static _type(): mixed
```

* This method is **static**.

***

### _typeKind

```php
public static _typeKind(): mixed
```

* This method is **static**.

***

### _field

```php
public static _field(): mixed
```

* This method is **static**.

***

### _inputValue

```php
public static _inputValue(): mixed
```

* This method is **static**.

***

### _enumValue

```php
public static _enumValue(): mixed
```

* This method is **static**.

***

### _directive

```php
public static _directive(): mixed
```

* This method is **static**.

***

### _directiveLocation

```php
public static _directiveLocation(): mixed
```

* This method is **static**.

***

### schemaMetaFieldDef

```php
public static schemaMetaFieldDef(): \GraphQL\Type\Definition\FieldDefinition
```

* This method is **static**.

***

### typeMetaFieldDef

```php
public static typeMetaFieldDef(): \GraphQL\Type\Definition\FieldDefinition
```

* This method is **static**.

***

### typeNameMetaFieldDef

```php
public static typeNameMetaFieldDef(): \GraphQL\Type\Definition\FieldDefinition
```

* This method is **static**.

***


***

