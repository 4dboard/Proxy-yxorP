***

# MetadataFactory

* Full name: `\Metadata\MetadataFactory`
* This class implements:
  [`\Metadata\AdvancedMetadataFactoryInterface`](./AdvancedMetadataFactoryInterface.md)

## Properties

### driver

```php
private $driver
```

***

### cache

```php
private $cache
```

***

### loadedMetadata

```php
private $loadedMetadata
```

***

### loadedClassMetadata

```php
private $loadedClassMetadata
```

***

### hierarchyMetadataClass

```php
private $hierarchyMetadataClass
```

***

### includeInterfaces

```php
private $includeInterfaces
```

***

### debug

```php
private $debug
```

***

## Methods

### __construct

```php
public __construct(\Metadata\Driver\DriverInterface $driver, string $hierarchyMetadataClass = &#039;Metadata\ClassHierarchyMetadata&#039;, bool $debug = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driver` | **\Metadata\Driver\DriverInterface** |  |
| `$hierarchyMetadataClass` | **string** |  |
| `$debug` | **bool** |  |

***

### setIncludeInterfaces

```php
public setIncludeInterfaces(bool $include): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$include` | **bool** |  |

***

### setCache

```php
public setCache(\Metadata\Cache\CacheInterface $cache): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\Metadata\Cache\CacheInterface** |  |

***

### getMetadataForClass

```php
public getMetadataForClass(string $className): \Metadata\ClassHierarchyMetadata|\Metadata\MergeableClassMetadata|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |

***

### getAllClassNames

Gets all the possible classes.

```php
public getAllClassNames(): array
```

***

### addClassMetadata

```php
private addClassMetadata(\Metadata\ClassMetadata|null& $metadata, \Metadata\ClassMetadata $toAdd): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\ClassMetadata&#124;null** |  |
| `$toAdd` | **\Metadata\ClassMetadata** |  |

***

### getClassHierarchy

```php
private getClassHierarchy(string $class): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |

***

### filterNullMetadata

```php
private filterNullMetadata(\Metadata\NullMetadata|null $metadata = null): \Metadata\ClassMetadata|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Metadata\NullMetadata&#124;null** |  |

yxorP::get('REQUEST')
