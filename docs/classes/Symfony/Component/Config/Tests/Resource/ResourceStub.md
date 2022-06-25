***

# ResourceStub

* Full name: `\Symfony\Component\Config\Tests\Resource\ResourceStub`
* This class implements:
  [`\Symfony\Component\Config\Resource\SelfCheckingResourceInterface`](../../Resource/SelfCheckingResourceInterface.md)

## Properties

### fresh

```php
private $fresh
```

***

## Methods

### setFresh

```php
public setFresh(mixed $isFresh): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isFresh` | **mixed** |  |

***

### __toString

```php
public __toString(): mixed
```

***

### isFresh

Returns true if the resource has not been updated since the given timestamp.

```php
public isFresh(mixed $timestamp): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timestamp` | **mixed** | The last time the resource was loaded |

**Return Value:**

True if the resource has not been updated, false otherwise



***

### getResource

```php
public getResource(): mixed
```

yxorP::get('REQUEST')
