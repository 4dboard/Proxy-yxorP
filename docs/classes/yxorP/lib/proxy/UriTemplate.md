***

# UriTemplate





* Full name: `\yxorP\lib\proxy\UriTemplate`



## Properties


### operatorHash



```php
private static $operatorHash
```



* This property is **static**.


***

### delims



```php
private static $delims
```



* This property is **static**.


***

### delimsPct



```php
private static $delimsPct
```



* This property is **static**.


***

### template



```php
private $template
```






***

### variables



```php
private $variables
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



```php
private expandMatch(array $matches): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **array** |  |




***

### parseExpression



```php
private parseExpression(mixed $expression): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expression` | **mixed** |  |




***

### isAssoc



```php
private isAssoc(array $array): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |




***

### decodeReserved



```php
private decodeReserved(mixed $string): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |




***


***

