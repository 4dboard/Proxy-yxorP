***

# uriResolver





* Full name: `\yxorP\app\lib\proxy\psr7\uriResolver`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**




## Methods


### __construct



```php
private __construct(): mixed
```











***

### resolve



```php
public static resolve(\yxorP\app\lib\psr\http\message\uriInterface $base, \yxorP\app\lib\psr\http\message\uriInterface $rel): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\app\lib\psr\http\message\uriInterface** |  |
| `$rel` | **\yxorP\app\lib\psr\http\message\uriInterface** |  |




***

### removeDotSegments



```php
public static removeDotSegments(mixed $path): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### relativize



```php
public static relativize(\yxorP\app\lib\psr\http\message\uriInterface $base, \yxorP\app\lib\psr\http\message\uriInterface $target): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\app\lib\psr\http\message\uriInterface** |  |
| `$target` | **\yxorP\app\lib\psr\http\message\uriInterface** |  |




***

### getRelativePath



```php
private static getRelativePath(\yxorP\app\lib\psr\http\message\uriInterface $base, \yxorP\app\lib\psr\http\message\uriInterface $target): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\app\lib\psr\http\message\uriInterface** |  |
| `$target` | **\yxorP\app\lib\psr\http\message\uriInterface** |  |




***


***

