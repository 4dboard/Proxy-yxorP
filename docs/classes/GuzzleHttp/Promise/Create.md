***

# Create

* Full name: `\GuzzleHttp\Promise\Create`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Methods

### promiseFor

Creates a promise for a value if the value is not a promise.

```php
public static promiseFor(mixed $value): \GuzzleHttp\Promise\PromiseInterface
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | Promise or value. |

***

### rejectionFor

Creates a rejected promise for a reason if the reason is not a promise.

```php
public static rejectionFor(mixed $reason): \GuzzleHttp\Promise\PromiseInterface
```

If the provided reason is a promise, then it is returned as-is.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** | Promise or reason. |

***

### exceptionFor

Create an exception for a rejected promise value.

```php
public static exceptionFor(mixed $reason): \Exception|\Throwable
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |

***

### iterFor

Returns an iterator for the given value.

```php
public static iterFor(mixed $value): \Iterator
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***


***

