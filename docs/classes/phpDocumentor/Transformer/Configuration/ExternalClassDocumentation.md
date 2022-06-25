***

# ExternalClassDocumentation

Reference that relates classes with a specific prefix to a URL template.

* Full name: `\phpDocumentor\Transformer\Configuration\ExternalClassDocumentation`

## Properties

### prefix

```php
protected string $prefix
```

***

### uri

```php
protected string $uri
```

***

## Methods

### __construct

Registers the prefix and uri on this configuration item.

```php
public __construct(string $prefix, string $uri): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |
| `$uri` | **string** |  |

***

### getPrefix

Returns the prefix that a class should have to contain in order for this reference to apply.

```php
public getPrefix(): string
```

***

### getUri

The URI template that is used to construct a link to the documentation for classes with the prefix in this reference.

```php
public getUri(): string
```

The URI templates may contain the following variables:

- {CLASS}, the Qualified Class Name for the discovered class will be inserted here.

yxorP::get('REQUEST')
