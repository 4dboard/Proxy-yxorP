***

# BuildClientSchema

* Full name: `\GraphQL\Utils\BuildClientSchema`

## Properties

### introspection

```php
private array&lt;string,array&gt; $introspection
```

***

### options

```php
private array&lt;string,bool&gt; $options
```

***

### typeMap

```php
private array&lt;string,\GraphQL\Type\Definition\NamedType&amp;\GraphQL\Type\Definition\Type&gt; $typeMap
```

***

## Methods

### __construct

```php
public __construct(array&lt;string,array&gt; $introspectionQuery, array&lt;string,bool&gt; $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$introspectionQuery` | **array<string,array>** |  |
| `$options` | **array<string,bool>** |  |

***

### build

Build a schema for use by client tools.

```php
public static build(array&lt;string,array&gt; $introspectionQuery, array&lt;string,bool&gt; $options = []): \GraphQL\Type\Schema
```

Given the result of a client running the introspection query, creates and
returns a \GraphQL\Type\Schema instance which can be then used with all graphql-php
tools, but cannot be used to execute a query, as introspection does not
represent the "resolver", "parse" or "serialize" functions or any other
server-internal mechanisms.

This function expects a complete introspection result. Don't forget to check
the "errors" field of a server response before calling this function.

Accepts options as a third argument:

- assumeValid:
  When building a schema from a GraphQL service's introspection result, it
  might be safe to assume the schema is valid. Set to true to assume the
  produced schema is valid.

      Default: false

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$introspectionQuery` | **array<string,array>** |  |
| `$options` | **array<string,bool>** |  |

***

### buildSchema

```php
public buildSchema(): \GraphQL\Type\Schema
```

***

### getType

```php
private getType(array&lt;string,mixed&gt; $typeRef): \GraphQL\Type\Definition\Type
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeRef` | **array<string,mixed>** |  |

***

### getNamedType

```php
private getNamedType(string $typeName): \GraphQL\Type\Definition\NamedType&amp;\GraphQL\Type\Definition\Type
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeName` | **string** |  |

***

### getInputType

```php
private getInputType(array&lt;string,mixed&gt; $typeRef): \GraphQL\Type\Definition\InputType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeRef` | **array<string,mixed>** |  |

***

### getOutputType

```php
private getOutputType(array&lt;string,mixed&gt; $typeRef): \GraphQL\Type\Definition\OutputType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeRef` | **array<string,mixed>** |  |

***

### getObjectType

```php
private getObjectType(array&lt;string,mixed&gt; $typeRef): \GraphQL\Type\Definition\ObjectType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeRef` | **array<string,mixed>** |  |

***

### getInterfaceType

```php
public getInterfaceType(array&lt;string,mixed&gt; $typeRef): \GraphQL\Type\Definition\InterfaceType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeRef` | **array<string,mixed>** |  |

***

### buildType

```php
private buildType(array&lt;string,mixed&gt; $type): \GraphQL\Type\Definition\NamedType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **array<string,mixed>** |  |

***

### buildScalarDef

```php
private buildScalarDef(array&lt;string,string&gt; $scalar): \GraphQL\Type\Definition\ScalarType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scalar` | **array<string,string>** |  |

***

### buildImplementationsList

```php
private buildImplementationsList(array&lt;string,mixed&gt; $implementingIntrospection): array&lt;int,\GraphQL\Type\Definition\InterfaceType&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$implementingIntrospection` | **array<string,mixed>** |  |

***

### buildObjectDef

```php
private buildObjectDef(array&lt;string,mixed&gt; $object): \GraphQL\Type\Definition\ObjectType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **array<string,mixed>** |  |

***

### buildInterfaceDef

```php
private buildInterfaceDef(array&lt;string,mixed&gt; $interface): \GraphQL\Type\Definition\InterfaceType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interface` | **array<string,mixed>** |  |

***

### buildUnionDef

```php
private buildUnionDef(array&lt;string,string|string[]&gt; $union): \GraphQL\Type\Definition\UnionType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$union` | **array<string,string&#124;string[]>** |  |

***

### buildEnumDef

```php
private buildEnumDef(array&lt;string,string|array&lt;string,string&gt;&gt; $enum): \GraphQL\Type\Definition\EnumType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enum` | **array<string,string&#124;array<string,string>>** |  |

***

### buildInputObjectDef

```php
private buildInputObjectDef(array&lt;string,mixed&gt; $inputObject): \GraphQL\Type\Definition\InputObjectType
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputObject` | **array<string,mixed>** |  |

***

### buildFieldDefMap

```php
private buildFieldDefMap(array&lt;string,mixed&gt; $typeIntrospection): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeIntrospection` | **array<string,mixed>** |  |

***

### buildInputValueDefMap

```php
private buildInputValueDefMap(array&lt;int,array&lt;string,mixed&gt;&gt; $inputValueIntrospections): array&lt;string,array&lt;string,mixed&gt;&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputValueIntrospections` | **array<int,array<string,mixed>>** |  |

***

### buildInputValue

```php
public buildInputValue(array&lt;string,mixed&gt; $inputValueIntrospection): array&lt;string,mixed&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputValueIntrospection` | **array<string,mixed>** |  |

***

### buildDirective

```php
public buildDirective(array&lt;string,mixed&gt; $directive): \GraphQL\Type\Definition\Directive
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **array<string,mixed>** |  |

***


***

