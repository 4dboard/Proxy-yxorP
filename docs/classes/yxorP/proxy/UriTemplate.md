***

# UriTemplate





* Full name: `\yxorP\proxy\UriTemplate`



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
private expandMatch(array $matches): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **array** |  |




***

### parseExpression



```php
private parseExpression(mixed $expression): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expression` | **mixed** |  |




***

### isAssoc



```php
private isAssoc(array $array): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |




***

### decodeReserved



```php
private decodeReserved(mixed $string): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |




***


***

