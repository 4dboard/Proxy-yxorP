***

# ContainerArray





* Full name: `\ContainerArray`
* This class implements:
[`\ArrayAccess`](./ArrayAccess.md), [`\Countable`](./Countable.md), [`\IteratorAggregate`](./IteratorAggregate.md), [`\JsonSerializable`](./JsonSerializable.md)



## Properties


### props



```php
protected $props
```






***

### bindTo



```php
protected $bindTo
```






***

## Methods


### __construct



```php
public __construct(mixed $array = [], mixed $bindTo = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |
| `$bindTo` | **mixed** |  |




***

### count



```php
public count(): mixed
```











***

### toArray



```php
public toArray(): mixed
```











***

### getIterator



```php
public getIterator(): mixed
```











***

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __set



```php
public __set(mixed $name, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$value` | **mixed** |  |




***

### extend



```php
public extend(): mixed
```











***

### __isset



```php
public __isset(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __unset



```php
public __unset(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __call



```php
public __call(mixed $name, mixed $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$arguments` | **mixed** |  |




***

### offsetSet



```php
public offsetSet(mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### offsetGet



```php
public offsetGet(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### get



```php
public get(mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### offsetExists



```php
public offsetExists(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### offsetUnset



```php
public offsetUnset(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### extract



```php
public extract(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### jsonSerialize



```php
public jsonSerialize(): mixed
```











***

### fetch_from_array



```php
protected fetch_from_array(mixed $index = null, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |
| `$default` | **mixed** |  |




***

### _tokenize



```php
protected _tokenize(mixed $data, mixed $separator = &#039;,&#039;, mixed $leftBound = &#039;(&#039;, mixed $rightBound = &#039;)&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$separator` | **mixed** |  |
| `$leftBound` | **mixed** |  |
| `$rightBound` | **mixed** |  |




***

### _splitConditions



```php
protected _splitConditions(mixed $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **mixed** |  |




***

### _matchToken



```php
protected _matchToken(mixed $key, mixed $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$token` | **mixed** |  |




***

### _matches



```php
protected _matches(array $data, mixed $selector): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$selector` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
