***

# UriResolver





* Full name: `\yxorP\proxy\Psr7\UriResolver`
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
public static resolve(\yxorP\psr\Http\Message\UriInterface $base, \yxorP\psr\Http\Message\UriInterface $rel): \yxorP\psr\Http\Message\UriInterface|\yxorP\proxy\Psr7\Uri
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\psr\Http\Message\UriInterface** |  |
| `$rel` | **\yxorP\psr\Http\Message\UriInterface** |  |




***

### removeDotSegments



```php
public static removeDotSegments(mixed $path): ?string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### relativize



```php
public static relativize(\yxorP\psr\Http\Message\UriInterface $base, \yxorP\psr\Http\Message\UriInterface $target): \yxorP\psr\Http\Message\UriInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\psr\Http\Message\UriInterface** |  |
| `$target` | **\yxorP\psr\Http\Message\UriInterface** |  |




***

### getRelativePath



```php
private static getRelativePath(\yxorP\psr\Http\Message\UriInterface $base, \yxorP\psr\Http\Message\UriInterface $target): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\psr\Http\Message\UriInterface** |  |
| `$target` | **\yxorP\psr\Http\Message\UriInterface** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
