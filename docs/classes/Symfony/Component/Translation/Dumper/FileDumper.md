***

# FileDumper

FileDumper is an implementation of DumperInterface that dump a message catalogue to file(s).

Performs backup of already existing files.

Options:

- path (mandatory): the directory where the files should be saved

* Full name: `\Symfony\Component\Translation\Dumper\FileDumper`
* This class implements:
  [`\Symfony\Component\Translation\Dumper\DumperInterface`](./DumperInterface.md)
* This class is an **Abstract class**

## Properties

### relativePathTemplate

A template for the relative paths to files.

```php
protected string $relativePathTemplate
```

***

### backup

Make file backup before the dump.

```php
private bool $backup
```

***

## Methods

### setRelativePathTemplate

Sets the template for the relative paths to files.

```php
public setRelativePathTemplate(string $relativePathTemplate): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relativePathTemplate` | **string** | A template for the relative paths to files |

***

### setBackup

Sets backup flag.

```php
public setBackup(mixed $backup): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$backup` | **mixed** |  |

***

### dump

Dumps the message catalogue.

```php
public dump(\Symfony\Component\Translation\MessageCatalogue $messages, mixed $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **\Symfony\Component\Translation\MessageCatalogue** | The message catalogue |
| `$options` | **mixed** | Options that are used by the dumper |

***

### formatCatalogue

Transforms a domain of a message catalogue to its string representation.

```php
public formatCatalogue(\Symfony\Component\Translation\MessageCatalogue $messages, string $domain, array $options = array()): string
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **\Symfony\Component\Translation\MessageCatalogue** |  |
| `$domain` | **string** |  |
| `$options` | **array** |  |

**Return Value:**

representation



***

### getExtension

Gets the file extension of the dumper.

```php
protected getExtension(): string
```

* This method is **abstract**.

**Return Value:**

file extension



***

### getRelativePath

Gets the relative file path using the template.

```php
private getRelativePath(string $domain, string $locale): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** | The domain |
| `$locale` | **string** | The locale |

**Return Value:**

The relative file path yxorP::get('REQUEST')
