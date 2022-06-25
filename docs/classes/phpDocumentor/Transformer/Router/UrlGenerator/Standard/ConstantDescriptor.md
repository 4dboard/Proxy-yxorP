***

# ConstantDescriptor

* Full name: `\phpDocumentor\Transformer\Router\UrlGenerator\Standard\ConstantDescriptor`
* This class implements:
  [`\phpDocumentor\Transformer\Router\UrlGenerator\UrlGeneratorInterface`](../UrlGeneratorInterface.md)

## Properties

### converter

```php
private \phpDocumentor\Transformer\Router\UrlGenerator\Standard\QualifiedNameToUrlConverter $converter
```

***

## Methods

### __construct

Initializes this generator.

```php
public __construct(): mixed
```

***

### __invoke

Generates a URL from the given node or returns false if unable.

```php
public __invoke(string|\phpDocumentor\Descriptor\ConstantDescriptor $node): string|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **string&#124;\phpDocumentor\Descriptor\ConstantDescriptor** |  |

***

### getUrlPathPrefixForGlobalConstants

Returns the first part of the URL path that is specific to global constants.

```php
private getUrlPathPrefixForGlobalConstants(\phpDocumentor\Descriptor\ConstantDescriptor $node): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\phpDocumentor\Descriptor\ConstantDescriptor** |  |

***

### getUrlPathPrefixForClassConstants

Returns the first part of the URL path that is specific to class constants.

```php
private getUrlPathPrefixForClassConstants(\phpDocumentor\Descriptor\ConstantDescriptor $node): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\phpDocumentor\Descriptor\ConstantDescriptor** |  |

yxorP::get('REQUEST')
