***

# revolt





* Full name: `\yxorP\events\revolt`
* This class implements:
[`\yxorP\events\eventInterface`](./eventInterface.md)



## Properties


### _driver



```php
private ?\Revolt\EventLoop\Driver $_driver
```






***

### _readEvents

All listeners for read event.

```php
private array $_readEvents
```






***

### _writeEvents

All listeners for write event.

```php
private array $_writeEvents
```






***

### _eventSignal

event listeners of signal.

```php
private array $_eventSignal
```






***

### _eventTimer

event listeners of timer.

```php
private array $_eventTimer
```






***

### _timerId

timer id.

```php
private int $_timerId
```






***

## Methods


### __construct

Construct.

```php
public __construct(): mixed
```











***

### driver

{}

```php
public driver(): ?\Revolt\EventLoop\Driver
```











***

### run

Run the event loop.

```php
public run(): void
```











***

### stop

Stop event loop.

```php
public stop(): void
```











***

### delay

Delay the execution of a callback.

```php
public delay(float $delay, mixed $func, mixed $args): int|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delay` | **float** |  |
| `$func` | **mixed** |  |
| `$args` | **mixed** |  |




***

### repeat

Repeatedly execute a callback.

```php
public repeat(float $interval, mixed $func, mixed $args): int|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interval` | **float** |  |
| `$func` | **mixed** |  |
| `$args` | **mixed** |  |




***

### onReadable

Execute a callback when a stream resource becomes readable or is closed for reading.

```php
public onReadable(mixed $stream, mixed $func): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |
| `$func` | **mixed** |  |




***

### offReadable

Cancel a callback of stream readable.

```php
public offReadable(mixed $stream): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |




***

### onWritable

Execute a callback when a stream resource becomes writable or is closed for writing.

```php
public onWritable(mixed $stream, mixed $func): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |
| `$func` | **mixed** |  |




***

### offWritable

Cancel a callback of stream writable.

```php
public offWritable(mixed $stream): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |




***

### onSignal

Execute a callback when a signal is received.

```php
public onSignal(mixed $signal, mixed $func): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signal` | **mixed** |  |
| `$func` | **mixed** |  |




***

### offSignal

Cancel a callback of signal.

```php
public offSignal(mixed $signal): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signal` | **mixed** |  |




***

### deleteTimer

Delete a timer.

```php
public deleteTimer(mixed $timer_id): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timer_id` | **mixed** |  |




***

### deleteAllTimer

Delete all timer.

```php
public deleteAllTimer(): void
```











***

### getTimerCount



```php
public getTimerCount(): int
```











***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
