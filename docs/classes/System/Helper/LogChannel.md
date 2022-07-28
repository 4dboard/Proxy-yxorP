***

# LogChannel





* Full name: `\System\Helper\LogChannel`



## Properties


### app



```php
protected $app
```






***

### name



```php
protected $name
```






***

## Methods


### __construct



```php
public __construct(string $name, mixed $app): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$app` | **mixed** |  |




***

### info



```php
public info(string $message, ?array $context = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **?array** |  |




***

### addRecord



```php
protected addRecord(string $message, mixed $type = &#039;info&#039;, ?array $context = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$type` | **mixed** |  |
| `$context` | **?array** |  |




***

### debug



```php
public debug(string $message, ?array $context = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **?array** |  |




***

### notice



```php
public notice(string $message, ?array $context = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **?array** |  |




***

### warning



```php
public warning(string $message, ?array $context = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **?array** |  |




***

### alert



```php
public alert(string $message, ?array $context = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **?array** |  |




***

### error



```php
public error(string $message, ?array $context = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **?array** |  |




***


***

