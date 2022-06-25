***

# AbstractFileDriver

Base file driver implementation.

* Full name: `\Metadata\Driver\AbstractFileDriver`
* This class implements:
  [`\Metadata\Driver\AdvancedDriverInterface`](./AdvancedDriverInterface.md)
* This class is an **Abstract class**

## Properties

### locator

```php
private \Metadata\Driver\FileLocatorInterface|\Metadata\Driver\FileLocator $locator
```

***

## Methods

### __construct

```php
public __construct(\Metadata\Driver\FileLocatorInterface $locator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locator` | **\Metadata\Driver\FileLocatorInterface** |  |

***

### loadMetadataForClass

```php
public loadMetadataForClass(\ReflectionClass $class): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |

***

### getAllClassNames

Gets all the metadata class names known to this driver.

```php
public getAllClassNames(): array
```

***

### loadMetadataFromFile

Parses the content of the file, and converts it to the desired metadata.

```php
protected loadMetadataFromFile(\ReflectionClass $class, string $file): \Metadata\ClassMetadata|null
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |
| `$file` | **string** |  |

***

### getExtension

Returns the extension of the file.

```php
protected getExtension(): string
```

* This method is **abstract**.

yxorP::get('REQUEST')
