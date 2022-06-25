***

# Factory

* Full name: `\Zend\Config\Factory`

## Properties

### readers

Plugin manager for loading readers

```php
public static null|\Zend\Config\ReaderPluginManager $readers
```

* This property is **static**.

***

### writers

Plugin manager for loading writers

```php
public static null|\Zend\Config\WriterPluginManager $writers
```

* This property is **static**.

***

### extensions

Registered config file extensions.

```php
protected static array $extensions
```

key is extension, value is reader instance or plugin name

* This property is **static**.

***

### writerExtensions

Register config file extensions for writing key is extension, value is writer instance or plugin name

```php
protected static array $writerExtensions
```

* This property is **static**.

***

## Methods

### fromFile

Read a config from a file.

```php
public static fromFile(string $filename, bool $returnConfigObject = false, bool $useIncludePath = false): array|\Zend\Config\Config
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$returnConfigObject` | **bool** |  |
| `$useIncludePath` | **bool** |  |

***

### fromFiles

Read configuration from multiple files and merge them.

```php
public static fromFiles(array $files, bool $returnConfigObject = false, bool $useIncludePath = false): array|\Zend\Config\Config
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$files` | **array** |  |
| `$returnConfigObject` | **bool** |  |
| `$useIncludePath` | **bool** |  |

***

### toFile

Writes a config to a file

```php
public static toFile(string $filename, array|\Zend\Config\Config $config): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$config` | **array&#124;\Zend\Config\Config** |  |

**Return Value:**

TRUE on success | FALSE on failure



***

### setReaderPluginManager

Set reader plugin manager

```php
public static setReaderPluginManager(\Zend\Config\ReaderPluginManager $readers): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readers` | **\Zend\Config\ReaderPluginManager** |  |

***

### getReaderPluginManager

Get the reader plugin manager

```php
public static getReaderPluginManager(): \Zend\Config\ReaderPluginManager
```

* This method is **static**.

***

### setWriterPluginManager

Set writer plugin manager

```php
public static setWriterPluginManager(\Zend\Config\WriterPluginManager $writers): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writers` | **\Zend\Config\WriterPluginManager** |  |

***

### getWriterPluginManager

Get the writer plugin manager

```php
public static getWriterPluginManager(): \Zend\Config\WriterPluginManager
```

* This method is **static**.

***

### registerReader

Set config reader for file extension

```php
public static registerReader(string $extension, string|\Zend\Config\Reader\ReaderInterface $reader): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **string** |  |
| `$reader` | **string&#124;\Zend\Config\Reader\ReaderInterface** |  |

***

### registerWriter

Set config writer for file extension

```php
public static registerWriter(string $extension, string|\Zend\Config\Writer\AbstractWriter $writer): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **string** |  |
| `$writer` | **string&#124;\Zend\Config\Writer\AbstractWriter** |  |

yxorP::get('REQUEST')
