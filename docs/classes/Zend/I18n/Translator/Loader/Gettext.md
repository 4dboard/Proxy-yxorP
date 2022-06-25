***

# Gettext

Gettext loader.

* Full name: `\Zend\I18n\Translator\Loader\Gettext`
* Parent class: [`\Zend\I18n\Translator\Loader\AbstractFileLoader`](./AbstractFileLoader.md)

## Properties

### file

Current file pointer.

```php
protected resource $file
```

***

### littleEndian

Whether the current file is little endian.

```php
protected bool $littleEndian
```

***

## Methods

### load

load(): defined by FileLoaderInterface.

```php
public load(string $locale, string $filename): \Zend\I18n\Translator\TextDomain
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |
| `$filename` | **string** |  |

**See Also:**

* \Zend\I18n\Translator\Loader\FileLoaderInterface::load() -

***

### readInteger

Read a single integer from the current file.

```php
protected readInteger(): int
```

***

### readIntegerList

Read an integer from the current file.

```php
protected readIntegerList(int $num): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$num` | **int** |  |

***

## Inherited methods

### setUseIncludePath

Indicate whether or not to use the include_path to resolve translation files

```php
public setUseIncludePath(bool $flag = true): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

***

### useIncludePath

Are we using the include_path to resolve translation files?

```php
public useIncludePath(): bool
```

***

### resolveFile

Resolve a translation file

```php
protected resolveFile(string $filename): string|false
```

Checks if the file exists and is readable, returning a boolean false if not; if the "useIncludePath"
flag is enabled, it will attempt to resolve the file from the include_path if the file does not exist on the current
working path.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |

***

### resolveViaIncludePath

Resolve a translation file via the include_path

```php
protected resolveViaIncludePath(string $filename): string|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |

yxorP::get('REQUEST')
