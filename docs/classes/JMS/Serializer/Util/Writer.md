***

# Writer

A writer implementation.

This may be used to simplify writing well-formatted code.

* Full name: `\JMS\Serializer\Util\Writer`

## Properties

### indentationSpaces

```php
public $indentationSpaces
```

***

### indentationLevel

```php
public $indentationLevel
```

***

### content

```php
public $content
```

***

### changeCount

```php
public $changeCount
```

***

### changes

```php
private $changes
```

***

## Methods

### indent

```php
public indent(): mixed
```

***

### outdent

```php
public outdent(): mixed
```

***

### writeln

```php
public writeln(string $content): \JMS\Serializer\Util\Writer
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |

***

### revert

```php
public revert(): mixed
```

***

### write

```php
public write(string $content): \JMS\Serializer\Util\Writer
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |

***

### rtrim

```php
public rtrim(mixed $preserveNewLines = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$preserveNewLines` | **mixed** |  |

***

### reset

```php
public reset(): mixed
```

***

### getContent

```php
public getContent(): mixed
```

yxorP::get('REQUEST')
