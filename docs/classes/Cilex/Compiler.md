***

# Compiler

The Compiler class compiles the Cilex framework.

This is an adapted version of the Silex\Compiler class.

* Full name: `\Cilex\Compiler`

## Properties

### version

```php
protected $version
```

***

## Methods

### compile

Compiles the Cilex source code into one single Phar file.

```php
public compile(string $pharFile = &#039;cilex.phar&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pharFile` | **string** | Name of the output Phar file |

***

### addFile

```php
protected addFile(\Phar $phar, \splFileInfo $file, mixed $strip = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$phar` | **\Phar** |  |
| `$file` | **\splFileInfo** |  |
| `$strip` | **mixed** |  |

***

### getStub

```php
protected getStub(): mixed
```

***

### stripWhitespace

Removes whitespace from a PHP source string while preserving line numbers.

```php
public static stripWhitespace(string $source): string
```

Based on Kernel::stripComments(), but keeps line numbers intact.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** | A PHP string |

**Return Value:**

The PHP string with the whitespace removed yxorP::get('REQUEST')
