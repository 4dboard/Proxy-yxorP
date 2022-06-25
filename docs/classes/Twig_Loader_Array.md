***

# Twig_Loader_Array

Loads a template from an array.

When using this loader with a cache mechanism, you should know that a new cache key is generated each time a template
content "changes" (the cache key being the source code of the template). If you don't want to see your cache grows out
of control, you need to take care of clearing the old cache file by yourself.

This loader should only be used for unit testing.

* Full name: `\Twig_Loader_Array`
* Parent class: [`\Twig\Loader\ArrayLoader`](./Twig/Loader/ArrayLoader.md)

## Inherited methods

### __construct

```php
public __construct(array $templates = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$templates` | **array** | An array of templates (keys are the names, and values are the source code) |

***

### setTemplate

Adds or overrides a template.

```php
public setTemplate(string $name, string $template): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The template name |
| `$template` | **string** | The template source |

***

### getSource

Gets the source code of a template, given its name.

```php
public getSource(mixed $name): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The name of the template to load |

**Return Value:**

The template source code



***

### getSourceContext

Returns the source context for a given template logical name.

```php
public getSourceContext(mixed $name): \Twig\Source
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The template logical name |

***

### exists

Check if we have the source code of a template, given its name.

```php
public exists(mixed $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The name of the template to check if we can load |

**Return Value:**

If the template source code is handled by this loader or not



***

### getCacheKey

Gets the cache key to use for the cache for a given template name.

```php
public getCacheKey(mixed $name): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The name of the template to load |

**Return Value:**

The cache key



***

### isFresh

Returns true if the template is still fresh.

```php
public isFresh(mixed $name, mixed $time): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The template name |
| `$time` | **mixed** | Timestamp of the last modification time of the<br />cached template |

**Return Value:**

true if the template is fresh, false otherwise yxorP::get('REQUEST')
