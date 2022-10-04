***

# Handler





* Full name: `\yxorP\snag\Handler`



## Properties


### enableShutdownHandler



```php
private static bool $enableShutdownHandler
```



* This property is **static**.


***

### client



```php
private \yxorP\snag\Client $client
```






***

### previousErrorHandler



```php
private $previousErrorHandler
```






***

### previousExceptionHandler



```php
private $previousExceptionHandler
```






***

### reservedMemory



```php
private $reservedMemory
```






***

### oomRegex



```php
private string $oomRegex
```






***

## Methods


### __construct



```php
public __construct(\yxorP\snag\Client $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\yxorP\snag\Client** |  |




***

### registerWithPrevious



```php
public static registerWithPrevious(mixed $client = null): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **mixed** |  |




***

### register



```php
public static register(mixed $client = null): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **mixed** |  |




***

### registerErrorHandler



```php
public registerErrorHandler(mixed $callPrevious): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callPrevious` | **mixed** |  |




***

### registerExceptionHandler



```php
public registerExceptionHandler(mixed $callPrevious): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callPrevious` | **mixed** |  |




***

### registerShutdownHandler



```php
public registerShutdownHandler(): mixed
```











***

### exceptionHandler



```php
public exceptionHandler(mixed $throwable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwable` | **mixed** |  |




***

### errorHandler



```php
public errorHandler(mixed $errno, mixed $errstr, mixed $errfile = &#039;&#039;, mixed $errline): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errno` | **mixed** |  |
| `$errstr` | **mixed** |  |
| `$errfile` | **mixed** |  |
| `$errline` | **mixed** |  |




***

### shutdownHandler



```php
public shutdownHandler(): mixed
```











***

### registerSnagHandlers



```php
protected registerSnagHandlers(mixed $callPrevious): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callPrevious` | **mixed** |  |




***

### notifyThrowable



```php
private notifyThrowable(mixed $throwable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwable` | **mixed** |  |




***


***

