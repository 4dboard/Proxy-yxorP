***

# pool

* Full name: `\yxorP\app\lib\proxy\pool`
* This class implements:
  [`\yxorP\app\lib\proxy\promise\promisorInterface`](./promise/promisorInterface.md)

## Properties

### each

```php
private $each
```

***

## Methods

### __construct

```php
public __construct(\yxorP\app\lib\proxy\clientInterface $client, mixed $requests, array $config = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\app\lib\proxy\clientInterface** |  |
| `$requests` | **mixed** |  |
| `$config` | **array** |  |

***

### batch

```php
public static batch(\yxorP\app\lib\proxy\clientInterface $client, mixed $requests, array $options = []): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\app\lib\proxy\clientInterface** |  |
| `$requests` | **mixed** |  |
| `$options` | **array** |  |

***

### cmpCallback

```php
private static cmpCallback(array& $options, mixed $name, array& $results): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$name` | **mixed** |  |
| `$results` | **array** |  |

***

### promise

```php
public promise(): mixed
```

***


***

