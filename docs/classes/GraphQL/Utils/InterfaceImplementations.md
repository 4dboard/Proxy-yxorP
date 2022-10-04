***

# InterfaceImplementations

A way to track interface implementations.

Distinguishes between implementations by ObjectTypes and InterfaceTypes.

* Full name: `\GraphQL\Utils\InterfaceImplementations`

## Properties

### objects

```php
private array&lt;int,\GraphQL\Type\Definition\ObjectType&gt; $objects
```

***

### interfaces

```php
private array&lt;int,\GraphQL\Type\Definition\InterfaceType&gt; $interfaces
```

***

## Methods

### __construct

```php
public __construct(array&lt;int,\GraphQL\Type\Definition\ObjectType&gt; $objects, array&lt;int,\GraphQL\Type\Definition\InterfaceType&gt; $interfaces): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objects` | **array<int,\GraphQL\Type\Definition\ObjectType>** |  |
| `$interfaces` | **array<int,\GraphQL\Type\Definition\InterfaceType>** |  |

***

### objects

```php
public objects(): array&lt;int,\GraphQL\Type\Definition\ObjectType&gt;
```

***

### interfaces

```php
public interfaces(): array&lt;int,\GraphQL\Type\Definition\InterfaceType&gt;
```

***


***

