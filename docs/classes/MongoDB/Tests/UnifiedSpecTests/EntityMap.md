***

# EntityMap

* Full name: `\MongoDB\Tests\UnifiedSpecTests\EntityMap`
* This class implements:
  [`\ArrayAccess`](../../../ArrayAccess.md)

## Properties

### map

```php
private array $map
```

***

### lsidsBySession

Track lsids so they can be accessed after Session::getLogicalSessionId()
has been called.

```php
private \stdClass[] $lsidsBySession
```

***

### isSupportedType

```php
private static \PHPUnit\Framework\Constraint\Constraint $isSupportedType
```

* This property is **static**.

***

## Methods

### __destruct

```php
public __destruct(): mixed
```

***

### offsetExists

```php
public offsetExists(mixed $id): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |

**See Also:**

* http://php.net/arrayaccess.offsetexists -

***

### offsetGet

```php
public offsetGet(mixed $id): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |

**See Also:**

* http://php.net/arrayaccess.offsetget -

***

### offsetSet

```php
public offsetSet(mixed $id, mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$value` | **mixed** |  |

**See Also:**

* http://php.net/arrayaccess.offsetset -

***

### offsetUnset

```php
public offsetUnset(mixed $id): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |

**See Also:**

* http://php.net/arrayaccess.offsetunset -

***

### set

```php
public set(string $id, mixed $value, ?string $parentId = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$value` | **mixed** |  |
| `$parentId` | **?string** |  |

***

### closeCursor

Closes a cursor by removing it from the entity map.

```php
public closeCursor(string $cursorId): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cursorId` | **string** |  |

**See Also:**

* \MongoDB\Tests\UnifiedSpecTests\Operation::executeForCursor() -

***

### getClient

```php
public getClient(string $clientId): \MongoDB\Client
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **string** |  |

***

### getCollection

```php
public getCollection(string $collectionId): \MongoDB\Collection
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collectionId` | **string** |  |

***

### getDatabase

```php
public getDatabase(string $databaseId): \MongoDB\Database
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseId` | **string** |  |

***

### getSession

```php
public getSession(string $sessionId): \MongoDB\Driver\Session
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessionId` | **string** |  |

***

### getLogicalSessionId

```php
public getLogicalSessionId(string $sessionId): \stdClass
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessionId` | **string** |  |

***

### getRootClientIdOf

```php
public getRootClientIdOf(string $id): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### isSupportedType

```php
private static isSupportedType(): \PHPUnit\Framework\Constraint\Constraint
```

* This method is **static**.

***


***

