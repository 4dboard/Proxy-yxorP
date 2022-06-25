***

# Rename

* Full name: `\Zend\Filter\File\Rename`
* Parent class: [`\Zend\Filter\AbstractFilter`](../AbstractFilter.md)

## Properties

### files

Internal array of array(source, target, overwrite)

```php
protected $files
```

***

## Methods

### __construct

Class constructor

```php
public __construct(string|array|\Traversable $options): mixed
```

Options argument may be either a string, a Zend\Config\Config object, or an array. If an array or Zend\Config\Config
object, it accepts the following keys:
'source' => Source filename or directory which will be renamed
'target' => Target filename or directory, the new name of the source file
'overwrite' => Shall existing files be overwritten ?
'randomize' => Shall target files have a random postfix attached?

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** | Target file or directory to be renamed |

***

### getFile

Returns the files to rename and their new name and location

```php
public getFile(): array
```

***

### setFile

Sets a new file or directory as target, deleting existing ones

```php
public setFile(string|array $options): self
```

Array accepts the following keys:
'source' => Source filename or directory which will be renamed
'target' => Target filename or directory, the new name of the sourcefile
'overwrite' => Shall existing files be overwritten?
'randomize' => Shall target files have a random postfix attached?

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array** | Old file or directory to be rewritten |

***

### addFile

Adds a new file or directory as target to the existing ones

```php
public addFile(string|array $options): \Zend\Filter\File\Rename
```

Array accepts the following keys:
'source' => Source filename or directory which will be renamed
'target' => Target filename or directory, the new name of the sourcefile
'overwrite' => Shall existing files be overwritten?
'randomize' => Shall target files have a random postfix attached?

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array** | Old file or directory to be rewritten |

***

### getNewName

Returns only the new filename without moving it But existing files will be erased when the overwrite option is true

```php
public getNewName(string $value, bool $source = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Full path of file to change |
| `$source` | **bool** | Return internal informations |

**Return Value:**

The new filename which has been set



***

### filter

Defined by Zend\Filter\Filter

```php
public filter(string|array $value): string|array
```

Renames the file $value to the new name set before Returns the file $value, removing all but digit characters

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;array** | Full path of file to change or $_FILES data array |

**Return Value:**

The new filename which has been set



***

### _convertOptions

Internal method for creating the file array Supports single and nested arrays

```php
protected _convertOptions(array $options): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### _getFileName

Internal method to resolve the requested source and return all other related parameters

```php
protected _getFileName(string $file): array|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | Filename to get the informations for |

***

## Inherited methods

### hasPcreUnicodeSupport

```php
public static hasPcreUnicodeSupport(): bool
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setOptions

```php
public setOptions(array|\Traversable $options): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |

***

### getOptions

Retrieve options representing object state

```php
public getOptions(): array
```

***

### __invoke

Invoke filter as a command

```php
public __invoke(mixed $value): mixed
```

Proxies to {@link}

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### isOptions

```php
protected static isOptions(mixed $options): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |

yxorP::get('REQUEST')
