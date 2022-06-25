***

# FlattenException

FlattenException wraps a PHP Exception to be able to serialize it.

Basically, this class removes all objects from the trace.

* Full name: `\Symfony\Component\Debug\Exception\FlattenException`

## Properties

### message

```php
private $message
```

***

### code

```php
private $code
```

***

### previous

```php
private $previous
```

***

### trace

```php
private $trace
```

***

### class

```php
private $class
```

***

### statusCode

```php
private $statusCode
```

***

### headers

```php
private $headers
```

***

### file

```php
private $file
```

***

### line

```php
private $line
```

***

## Methods

### create

```php
public static create(\Exception $exception, mixed $statusCode = null, array $headers = array()): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |
| `$statusCode` | **mixed** |  |
| `$headers` | **array** |  |

***

### toArray

```php
public toArray(): mixed
```

***

### getStatusCode

```php
public getStatusCode(): mixed
```

***

### setStatusCode

```php
public setStatusCode(mixed $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |

***

### getHeaders

```php
public getHeaders(): mixed
```

***

### setHeaders

```php
public setHeaders(array $headers): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |

***

### getClass

```php
public getClass(): mixed
```

***

### setClass

```php
public setClass(mixed $class): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |

***

### getFile

```php
public getFile(): mixed
```

***

### setFile

```php
public setFile(mixed $file): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |

***

### getLine

```php
public getLine(): mixed
```

***

### setLine

```php
public setLine(mixed $line): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |

***

### getMessage

```php
public getMessage(): mixed
```

***

### setMessage

```php
public setMessage(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### getCode

```php
public getCode(): mixed
```

***

### setCode

```php
public setCode(mixed $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |

***

### getPrevious

```php
public getPrevious(): mixed
```

***

### setPrevious

```php
public setPrevious(\Symfony\Component\Debug\Exception\FlattenException $previous): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$previous` | **\Symfony\Component\Debug\Exception\FlattenException** |  |

***

### getAllPrevious

```php
public getAllPrevious(): mixed
```

***

### getTrace

```php
public getTrace(): mixed
```

***

### setTraceFromException

```php
public setTraceFromException(\Exception $exception): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |

***

### setTrace

```php
public setTrace(mixed $trace, mixed $file, mixed $line): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trace` | **mixed** |  |
| `$file` | **mixed** |  |
| `$line` | **mixed** |  |

***

### flattenArgs

```php
private flattenArgs(mixed $args, mixed $level, mixed& $count): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **mixed** |  |
| `$level` | **mixed** |  |
| `$count` | **mixed** |  |

***

### getClassNameFromIncomplete

```php
private getClassNameFromIncomplete(\__PHP_Incomplete_Class $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\__PHP_Incomplete_Class** |  |

yxorP::get('REQUEST')
