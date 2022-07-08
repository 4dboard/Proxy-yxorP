***

# StreamWrapper





* Full name: `\yxorP\proxy\Psr7\StreamWrapper`



## Properties


### context



```php
public $context
```






***

### stream



```php
private $stream
```






***

### mode



```php
private $mode
```






***

## Methods


### getResource



```php
public static getResource(\yxorP\psr\Http\Message\StreamInterface $stream): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\psr\Http\Message\StreamInterface** |  |




***

### register



```php
public static register(): mixed
```



* This method is **static**.







***

### createStreamContext



```php
public static createStreamContext(\yxorP\psr\Http\Message\StreamInterface $stream): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\psr\Http\Message\StreamInterface** |  |




***

### stream_open



```php
public stream_open(mixed $path, mixed $mode, mixed $options, mixed& $opened_path): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$mode` | **mixed** |  |
| `$options` | **mixed** |  |
| `$opened_path` | **mixed** |  |




***

### stream_read



```php
public stream_read(mixed $count): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **mixed** |  |




***

### stream_write



```php
public stream_write(mixed $data): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### stream_tell



```php
public stream_tell(): int
```











***

### stream_eof



```php
public stream_eof(): bool
```











***

### stream_seek



```php
public stream_seek(mixed $offset, mixed $whence): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |
| `$whence` | **mixed** |  |




***

### stream_cast



```php
public stream_cast(mixed $cast_as): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cast_as` | **mixed** |  |




***

### stream_stat



```php
public stream_stat(): array
```











***

### url_stat



```php
public url_stat(mixed $path, mixed $flags): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$flags` | **mixed** |  |




***


***

