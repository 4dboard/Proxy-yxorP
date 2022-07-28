***

# Logger

Logger reports the parser and validation messages.



* Full name: `\OpenApi\Logger`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.



## Properties


### instance

Singleton.

```php
public static \OpenApi\Logger $instance
```



* This property is **static**.


***

### log



```php
public callable $log
```






***

## Methods


### __construct



```php
protected __construct(): mixed
```











***

### getInstance



```php
public static getInstance(): \OpenApi\Logger
```



* This method is **static**.







***

### warning

Log a OpenApi warning.

```php
public static warning(\Exception|string $entry): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entry` | **\Exception&#124;string** |  |




***

### notice

Log a OpenApi notice.

```php
public static notice(\Exception|string $entry): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entry` | **\Exception&#124;string** |  |




***

### shorten

Shorten class name(s).

```php
public static shorten(array|object|string $classes): string|string[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classes` | **array&#124;object&#124;string** | Class(es) to shorten |


**Return Value:**

One or more shortened class names



***


***

