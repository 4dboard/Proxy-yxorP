***

# SimpleManagerRegistry

* Full name: `\JMS\Serializer\Tests\Serializer\Doctrine\SimpleManagerRegistry`
* Parent class: [`AbstractManagerRegistry`](../../../../../Doctrine/Common/Persistence/AbstractManagerRegistry.md)

## Properties

### services

```php
private $services
```

***

### serviceCreator

```php
private $serviceCreator
```

***

## Methods

### __construct

```php
public __construct(mixed $serviceCreator, mixed $name = &#039;anonymous&#039;, array $connections = array(&#039;default&#039; =&gt; &#039;default_connection&#039;), array $managers = array(&#039;default&#039; =&gt; &#039;default_manager&#039;), mixed $defaultConnection = null, mixed $defaultManager = null, mixed $proxyInterface = &#039;Doctrine\Common\Persistence\Proxy&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceCreator` | **mixed** |  |
| `$name` | **mixed** |  |
| `$connections` | **array** |  |
| `$managers` | **array** |  |
| `$defaultConnection` | **mixed** |  |
| `$defaultManager` | **mixed** |  |
| `$proxyInterface` | **mixed** |  |

***

### getService

```php
public getService(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### resetService

```php
public resetService(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### getAliasNamespace

```php
public getAliasNamespace(mixed $alias): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **mixed** |  |

yxorP::get('REQUEST')
