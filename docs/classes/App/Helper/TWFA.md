***

# TWFA





* Full name: `\App\Helper\TWFA`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)



## Properties


### tfa



```php
protected \RobThree\Auth\TwoFactorAuth $tfa
```






***

## Methods


### initialize



```php
protected initialize(): mixed
```











***

### createSecret



```php
public createSecret(int $length = 160): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |




***

### getQRCodeImageAsDataUri



```php
public getQRCodeImageAsDataUri(string $secret, int $size = 150): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secret` | **string** |  |
| `$size` | **int** |  |




***

### getQRCodeImage



```php
public getQRCodeImage(string $secret, int $size = 150): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secret` | **string** |  |
| `$size` | **int** |  |




***

### verifyCode



```php
public verifyCode(string $secret, string $code): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secret` | **string** |  |
| `$code` | **string** |  |




***


## Inherited methods


### __construct



```php
public __construct(\Lime\App $app, mixed $context = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Lime\App** |  |
| `$context` | **mixed** |  |




***

### initialize



```php
protected initialize(): mixed
```











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

### __invoke



```php
public __invoke(mixed $helper): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **mixed** |  |




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


***

