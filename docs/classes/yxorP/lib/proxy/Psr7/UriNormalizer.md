***

# UriNormalizer





* Full name: `\yxorP\lib\proxy\Psr7\UriNormalizer`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PRESERVING_NORMALIZATIONS`|public| |63|
|`CAPITALIZE_PERCENT_ENCODING`|public| |1|
|`DECODE_UNRESERVED_CHARACTERS`|public| |2|
|`CONVERT_EMPTY_PATH`|public| |4|
|`REMOVE_DEFAULT_HOST`|public| |8|
|`REMOVE_DEFAULT_PORT`|public| |16|
|`REMOVE_DOT_SEGMENTS`|public| |32|
|`REMOVE_DUPLICATE_SLASHES`|public| |64|
|`SORT_QUERY_PARAMETERS`|public| |128|


## Methods


### __construct



```php
private __construct(): mixed
```











***

### isEquivalent



```php
public static isEquivalent(\yxorP\inc\Psr\Http\Message\UriInterface $uri1, \yxorP\inc\Psr\Http\Message\UriInterface $uri2, mixed $normalizations = self::PRESERVING_NORMALIZATIONS): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri1` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |
| `$uri2` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |
| `$normalizations` | **mixed** |  |




***

### normalize



```php
public static normalize(\yxorP\inc\Psr\Http\Message\UriInterface $uri, mixed $flags = self::PRESERVING_NORMALIZATIONS): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |
| `$flags` | **mixed** |  |




***

### capitalizePercentEncoding



```php
private static capitalizePercentEncoding(\yxorP\inc\Psr\Http\Message\UriInterface $uri): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |




***

### decodeUnreservedCharacters



```php
private static decodeUnreservedCharacters(\yxorP\inc\Psr\Http\Message\UriInterface $uri): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |




***


***

