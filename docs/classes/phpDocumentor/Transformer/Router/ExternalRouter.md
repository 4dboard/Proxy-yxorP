***

# ExternalRouter

Connects class, interface and traits to remote documentation sets.

* Full name: `\phpDocumentor\Transformer\Router\ExternalRouter`
* Parent class: [`\phpDocumentor\Transformer\Router\RouterAbstract`](./RouterAbstract.md)

## Properties

### configuration

```php
protected \phpDocumentor\Configuration $configuration
```

***

## Methods

### __construct

Registers the application configuration with this router.

```php
public __construct(\phpDocumentor\Configuration $configuration): mixed
```

The configuration is used to extract which external routes to add to the application.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configuration` | **\phpDocumentor\Configuration** |  |

***

### configure

Configuration function to add routing rules to a router.

```php
public configure(): void
```

***

## Inherited methods

### __construct

Invokes the configure method.

```php
public __construct(): mixed
```

***

### configure

Configuration function to add routing rules to a router.

```php
public configure(): void
```

* This method is **abstract**.

***

### match

Tries to match the provided node with one of the rules in this router.

```php
public match(string|\phpDocumentor\Descriptor\DescriptorAbstract $node): \phpDocumentor\Transformer\Router\Rule|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **string&#124;\phpDocumentor\Descriptor\DescriptorAbstract** |  |

yxorP::get('REQUEST')
