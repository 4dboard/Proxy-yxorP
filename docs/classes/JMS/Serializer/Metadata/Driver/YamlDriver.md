***

# YamlDriver

Base file driver implementation.

* Full name: `\JMS\Serializer\Metadata\Driver\YamlDriver`
* Parent class: [`\Metadata\Driver\AbstractFileDriver`](../../../../Metadata/Driver/AbstractFileDriver.md)

## Methods

### loadMetadataFromFile

Parses the content of the file, and converts it to the desired metadata.

```php
protected loadMetadataFromFile(\ReflectionClass $class, mixed $file): \Metadata\ClassMetadata|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |
| `$file` | **mixed** |  |

***

### getExtension

Returns the extension of the file.

```php
protected getExtension(): string
```

***

### addClassProperties

```php
private addClassProperties(\JMS\Serializer\Metadata\ClassMetadata $metadata, array $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\JMS\Serializer\Metadata\ClassMetadata** |  |
| `$config` | **array** |  |

***

### getCallbackMetadata

```php
private getCallbackMetadata(\ReflectionClass $class, mixed $config): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |
| `$config` | **mixed** |  |

***

## Inherited methods

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
