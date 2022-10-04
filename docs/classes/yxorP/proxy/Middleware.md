***

# Middleware





* Full name: `\yxorP\proxy\Middleware`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**




## Methods


### cookies



```php
public static cookies(): \Closure
```



* This method is **static**.







***

### httpErrors



```php
public static httpErrors(): \Closure
```



* This method is **static**.







***

### history



```php
public static history(mixed& $container): \Closure
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **mixed** |  |




***

### tap



```php
public static tap(callable $before = null, callable $after = null): \Closure
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$before` | **callable** |  |
| `$after` | **callable** |  |




***

### redirect



```php
public static redirect(): \Closure
```



* This method is **static**.







***

### retry



```php
public static retry(callable $decider, callable $delay = null): \Closure
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decider` | **callable** |  |
| `$delay` | **callable** |  |




***

### log



```php
public static log(\yxorP\psr\Log\LoggerInterface $logger, \yxorP\proxy\MessageFormatter $formatter, mixed $logLevel = &#039;info&#039;): \Closure
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\yxorP\psr\Log\LoggerInterface** |  |
| `$formatter` | **\yxorP\proxy\MessageFormatter** |  |
| `$logLevel` | **mixed** |  |




***

### prepareBody



```php
public static prepareBody(): \Closure
```



* This method is **static**.







***

### mapRequest



```php
public static mapRequest(callable $fn): \Closure
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **callable** |  |




***

### mapResponse



```php
public static mapResponse(callable $fn): \Closure
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **callable** |  |




***


***

