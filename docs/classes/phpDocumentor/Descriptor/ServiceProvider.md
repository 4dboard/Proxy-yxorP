***

# ServiceProvider

This provider is responsible for registering the Descriptor component with the given Application.

* Full name: `\phpDocumentor\Descriptor\ServiceProvider`
* This class implements:
  [`\Cilex\ServiceProviderInterface`](../../Cilex/ServiceProviderInterface.md)

## Methods

### register

Adds the services needed to build the descriptors.

```php
public register(\Cilex\Application $app): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** | An Application instance |

***

### attachAssemblersToFactory

Registers the Assemblers used to convert Reflection objects to Descriptors.

```php
public attachAssemblersToFactory(\phpDocumentor\Descriptor\Builder\AssemblerFactory $factory, \Cilex\Application $app): \phpDocumentor\Descriptor\Builder\AssemblerFactory
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\phpDocumentor\Descriptor\Builder\AssemblerFactory** |  |
| `$app` | **\Cilex\Application** |  |

***

### attachFiltersToManager

Attaches filters to the manager.

```php
public attachFiltersToManager(\phpDocumentor\Descriptor\Filter\Filter $filterManager, \Cilex\Application $app): \phpDocumentor\Descriptor\Filter\Filter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filterManager` | **\phpDocumentor\Descriptor\Filter\Filter** |  |
| `$app` | **\Cilex\Application** |  |

***

### attachValidators

Adds validators to check the Descriptors.

```php
public attachValidators(\Symfony\Component\Validator\Validator $validator): \Symfony\Component\Validator\Validator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$validator` | **\Symfony\Component\Validator\Validator** |  |

***

### addCache

Adds the caching mechanism to the dependency injection container with key 'descriptor.cache'.

```php
protected addCache(\Cilex\Application $app): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

***

### addBuilder

Adds the Building mechanism using the key 'descriptor.builder'.

```php
protected addBuilder(\Cilex\Application $app): void
```

Please note that the type of serializer can be configured using the parameter 'descriptor.builder.serializer'; it
accepts any parameter that Zend\Serializer supports.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

***

### addAssemblers

Adds the assembler factory and attaches the basic assemblers with key 'descriptor.builder.assembler.factory'.

```php
protected addAssemblers(\Cilex\Application $app): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

***

### addFilters

Adds the descriptor filtering mechanism and using key 'descriptor.filter'.

```php
protected addFilters(\Cilex\Application $app): void
```

Please note that filters can only be attached after the builder is instantiated because it is needed; so the filters can
be attached by extending 'descriptor.builder'.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

***

### addValidators

Adds validators for the descriptors to the validator manager.

```php
protected addValidators(\Cilex\Application $app): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |

yxorP::get('REQUEST')
