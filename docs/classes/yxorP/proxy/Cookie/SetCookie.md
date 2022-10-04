***

# SetCookie





* Full name: `\yxorP\proxy\Cookie\SetCookie`



## Properties


### defaults



```php
private static array $defaults
```



* This property is **static**.


***

### data



```php
private array $data
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
public static fromString(mixed $cookie): \yxorP\proxy\Cookie\SetCookie
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **mixed** |  |




***

### __toString



```php
public __toString(): mixed
```











***

### toArray



```php
public toArray(): array
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
public matchesPath(mixed $requestPath): bool
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
public matchesDomain(mixed $domain): bool
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
public isExpired(): bool
```











***

### validate



```php
public validate(): bool|string
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

