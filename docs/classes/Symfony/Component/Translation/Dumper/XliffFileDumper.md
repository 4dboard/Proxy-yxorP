***

# XliffFileDumper

XliffFileDumper generates xliff files from a message catalogue.

* Full name: `\Symfony\Component\Translation\Dumper\XliffFileDumper`
* Parent class: [`\Symfony\Component\Translation\Dumper\FileDumper`](./FileDumper.md)

## Methods

### formatCatalogue

Transforms a domain of a message catalogue to its string representation.

```php
public formatCatalogue(\Symfony\Component\Translation\MessageCatalogue $messages, mixed $domain, array $options = array()): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **\Symfony\Component\Translation\MessageCatalogue** |  |
| `$domain` | **mixed** |  |
| `$options` | **array** |  |

**Return Value:**

representation



***

### getExtension

Gets the file extension of the dumper.

```php
protected getExtension(): string
```

**Return Value:**

file extension



***

### dumpXliff1

```php
private dumpXliff1(mixed $defaultLocale, \Symfony\Component\Translation\MessageCatalogue $messages, mixed $domain, array $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultLocale` | **mixed** |  |
| `$messages` | **\Symfony\Component\Translation\MessageCatalogue** |  |
| `$domain` | **mixed** |  |
| `$options` | **array** |  |

***

### dumpXliff2

```php
private dumpXliff2(mixed $defaultLocale, \Symfony\Component\Translation\MessageCatalogue $messages, mixed $domain, array $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultLocale` | **mixed** |  |
| `$messages` | **\Symfony\Component\Translation\MessageCatalogue** |  |
| `$domain` | **mixed** |  |
| `$options` | **array** |  |

***

### hasMetadataArrayInfo

```php
private hasMetadataArrayInfo(string $key, array|null $metadata = null): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$metadata` | **array&#124;null** |  |

***

## Inherited methods

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
