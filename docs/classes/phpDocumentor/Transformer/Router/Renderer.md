***

# Renderer

Renders an HTML anchor pointing to the location of the provided element.

* Full name: `\phpDocumentor\Transformer\Router\Renderer`

## Properties

### destination

```php
protected string $destination
```

***

### routers

```php
private \phpDocumentor\Transformer\Router\Queue $routers
```

***

## Methods

### __construct

Initializes this renderer with a set of routers that are checked.

```php
public __construct(\phpDocumentor\Transformer\Router\Queue $routers): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$routers` | **\phpDocumentor\Transformer\Router\Queue** |  |

***

### setRouters

Overwrites the associated routers with a new set of routers.

```php
public setRouters(\phpDocumentor\Transformer\Router\Queue $routers): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$routers` | **\phpDocumentor\Transformer\Router\Queue** |  |

***

### getRouters

Returns the routers used in generating the URLs for the anchors.

```php
public getRouters(): \phpDocumentor\Transformer\Router\Queue
```

***

### setDestination

Sets the destination directory relative to the Project's Root.

```php
public setDestination(string $destination): void
```

The destination is the target directory containing the resulting file. This destination is relative to the Project's
root and can be used for the calculation of nesting depths, etc.

For this specific extension the destination is provided in the Twig writer itself.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destination` | **string** |  |

**See Also:**

* \phpDocumentor\Transformer\Router\phpDocumentor\Plugin\Twig\Transformer\Writer\Twig - for the invocation of this
  method.

***

### getDestination

Returns the target directory relative to the Project's Root.

```php
public getDestination(): string
```

***

### render

```php
public render(string|\phpDocumentor\Descriptor\DescriptorAbstract $value, string $presentation): bool|mixed|string|\string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;\phpDocumentor\Descriptor\DescriptorAbstract** |  |
| `$presentation` | **string** |  |

***

### convertToRootPath

Converts the given path to be relative to the root of the documentation target directory.

```php
public convertToRootPath(string $relative_path): string
```

It is not possible to use absolute paths in documentation templates since they may be used locally, or in a subfolder.
As such we need to calculate the number of levels to go up from the current document's directory and then append the
given path.

For example:

    Suppose you are in <root>/classes/my/class.html and you want open
    <root>/my/index.html then you provide 'my/index.html' to this method
    and it will convert it into ../../my/index.html (<root>/classes/my is
    two nesting levels until the root).

This method does not try to normalize or optimize the paths in order to save on development time and performance, and
because it adds no real value.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relative_path` | **string** |  |

***

### renderASeriesOfLinks

Returns a series of anchors and strings for the given collection of routable items.

```php
protected renderASeriesOfLinks(array|\Traversable|\phpDocumentor\Descriptor\Collection $value, string $presentation): string[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **array&#124;\Traversable&#124;\phpDocumentor\Descriptor\Collection** |  |
| `$presentation` | **string** |  |

***

### renderTypeCollection

Renders the view representation for an array or collection.

```php
protected renderTypeCollection(\phpDocumentor\Descriptor\Type\CollectionDescriptor $value, string $presentation): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\phpDocumentor\Descriptor\Type\CollectionDescriptor** |  |
| `$presentation` | **string** |  |

***

### renderLink

```php
protected renderLink(mixed $path, mixed $presentation): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$presentation` | **mixed** |  |

yxorP::get('REQUEST')
