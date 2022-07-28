***

# UriTemplate

Expands URI templates. Userland implementation of PECL uri_template.



* Full name: `\yxorP\lib\proxy\UriTemplate`

**See Also:**

* http://tools.ietf.org/html/rfc6570 - 



## Properties


### operatorHash



```php
private static array $operatorHash
```



* This property is **static**.


***

### delims



```php
private static array $delims
```



* This property is **static**.


***

### delimsPct



```php
private static array $delimsPct
```



* This property is **static**.


***

### template



```php
private string $template
```






***

### variables



```php
private array $variables
```






***

## Methods


### expand



```php
public expand(mixed $template, array $variables): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **mixed** |  |
| `$variables` | **array** |  |




***

### expandMatch

Process an expansion

```php
private expandMatch(array $matches): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **array** | Matches met in the preg_replace_callback |


**Return Value:**

Returns the replacement string



***

### parseExpression

Parse an expression into parts

```php
private parseExpression(string $expression): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expression` | **string** | Expression to parse |


**Return Value:**

Returns an associative array of parts



***

### isAssoc

Determines if an array is associative.

```php
private isAssoc(array $array): bool
```

This makes the assumption that input arrays are sequences or hashes.
This assumption is a tradeoff for accuracy in favor of speed, but it
should work in almost every case where input is supplied for a URI
template.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** | Array to check |




***

### decodeReserved

Removes percent encoding on reserved characters (used with + and #
modifiers).

```php
private decodeReserved(string $string): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | String to fix |




***


***

