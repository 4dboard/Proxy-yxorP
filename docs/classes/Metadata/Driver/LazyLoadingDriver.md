***

# LazyLoadingDriver

* Full name: `\Metadata\Driver\LazyLoadingDriver`
* This class implements:
  [`\Metadata\Driver\DriverInterface`](./DriverInterface.md)

## Properties

### container

```php
private $container
```

***

### realDriverId

```php
private $realDriverId
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, mixed $realDriverId): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Symfony\Component\DependencyInjection\ContainerInterface** |  |
| `$realDriverId` | **mixed** |  |

***

### loadMetadataForClass

```php
public loadMetadataForClass(\ReflectionClass $class): \Metadata\ClassMetadata
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |

yxorP::get('REQUEST')
