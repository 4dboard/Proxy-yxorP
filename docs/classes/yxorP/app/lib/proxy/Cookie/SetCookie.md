***

# setCookie





* Full name: `\yxorP\lib\proxy\cookie\setCookie`



## Properties


### defaults



```php
private static $defaults
```



* This property is **static**.


***

### data



```php
private $data
```






***

## Methods


### __construct



```php
public __construct(array $data = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### getExpires



```php
public getExpires(): mixed
```











***

### getMaxAge



```php
public getMaxAge(): mixed
```











***

### setExpires



```php
public setExpires(mixed $timestamp): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timestamp` | **mixed** |  |




***

### fromString



```php
public static fromString(mixed $cookie): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **mixed** |  |




***

### __toString



```php
public __toString(): string
```











***

### toArray



```php
public toArray(): mixed
```











***

### setName



```php
public setName(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### setValue



```php
public setValue(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### setDomain



```php
public setDomain(mixed $domain): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### setPath



```php
public setPath(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### setMaxAge



```php
public setMaxAge(mixed $maxAge): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxAge` | **mixed** |  |




***

### getSecure



```php
public getSecure(): mixed
```











***

### setSecure



```php
public setSecure(mixed $secure): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secure` | **mixed** |  |




***

### getDiscard



```php
public getDiscard(): mixed
```











***

### setDiscard



```php
public setDiscard(mixed $discard): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discard` | **mixed** |  |




***

### getHttpOnly



```php
public getHttpOnly(): mixed
```











***

### setHttpOnly



```php
public setHttpOnly(mixed $httpOnly): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$httpOnly` | **mixed** |  |




***

### matchesPath



```php
public matchesPath(mixed $requestPath): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$requestPath` | **mixed** |  |




***

### getPath



```php
public getPath(): mixed
```











***

### matchesDomain



```php
public matchesDomain(mixed $domain): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### getDomain



```php
public getDomain(): mixed
```











***

### isExpired



```php
public isExpired(): mixed
```











***

### validate



```php
public validate(): mixed
```











***

### getName



```php
public getName(): mixed
```











***

### getValue



```php
public getValue(): mixed
```











***


***

