***

# UriResolver





* Full name: `\yxorP\app\lib\proxy\Psr7\UriResolver`
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
public static resolve(\yxorP\app\lib\Psr\Http\Message\UriInterface $base, \yxorP\app\lib\Psr\Http\Message\UriInterface $rel): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\app\lib\Psr\Http\Message\UriInterface** |  |
| `$rel` | **\yxorP\app\lib\Psr\Http\Message\UriInterface** |  |




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
public static relativize(\yxorP\app\lib\Psr\Http\Message\UriInterface $base, \yxorP\app\lib\Psr\Http\Message\UriInterface $target): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\app\lib\Psr\Http\Message\UriInterface** |  |
| `$target` | **\yxorP\app\lib\Psr\Http\Message\UriInterface** |  |




***

### getRelativePath



```php
private static getRelativePath(\yxorP\app\lib\Psr\Http\Message\UriInterface $base, \yxorP\app\lib\Psr\Http\Message\UriInterface $target): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\app\lib\Psr\Http\Message\UriInterface** |  |
| `$target` | **\yxorP\app\lib\Psr\Http\Message\UriInterface** |  |




***


***

