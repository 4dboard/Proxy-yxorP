***

# InvalidConfigurationException

A very general exception which can be thrown whenever non of the more specific exceptions is suitable.

* Full name: `\Symfony\Component\Config\Definition\Exception\InvalidConfigurationException`
* Parent class: [`\Symfony\Component\Config\Definition\Exception\Exception`](./Exception.md)

## Properties

### path

```php
private $path
```

***

### containsHints

```php
private $containsHints
```

***

## Methods

### setPath

```php
public setPath(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### getPath

```php
public getPath(): mixed
```

***

### addHint

Adds extra information that is suffixed to the original exception message.

```php
public addHint(string $hint): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hint` | **string** |  |

yxorP::get('REQUEST')
