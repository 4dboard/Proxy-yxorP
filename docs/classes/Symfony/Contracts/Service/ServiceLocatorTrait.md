***

# ServiceLocatorTrait

A trait to help implement ServiceProviderInterface.

* Full name: `\Symfony\Contracts\Service\ServiceLocatorTrait`

## Properties

### factories

```php
private array $factories
```

***

### loading

```php
private array $loading
```

***

### providedTypes

```php
private array $providedTypes
```

***

## Methods

### __construct

```php
public __construct(callable[] $factories): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factories` | **callable[]** |  |

***

### has

{@inheritdoc}

```php
public has(string $id): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### get

{@inheritdoc}

```php
public get(string $id): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### getProvidedServices

{@inheritdoc}

```php
public getProvidedServices(): array
```

***

### createNotFoundException

```php
private createNotFoundException(string $id): \Psr\Container\NotFoundExceptionInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### createCircularReferenceException

```php
private createCircularReferenceException(string $id, array $path): \Psr\Container\ContainerExceptionInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$path` | **array** |  |

***

***


