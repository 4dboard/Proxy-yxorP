***

# ev

ev eventloop



* Full name: `\yxorP\events\ev`
* This class implements:
[`\yxorP\events\eventInterface`](./eventInterface.md)



## Properties


### _timerId

timer id.

```php
protected static int $_timerId
```



* This property is **static**.


***

### _readEvents

All listeners for read event.

```php
protected array $_readEvents
```






***

### _writeEvents

All listeners for write event.

```php
protected array $_writeEvents
```






***

### _eventSignal

event listeners of signal.

```php
protected array $_eventSignal
```






***

### _eventTimer

All timer event listeners.

```php
protected array $_eventTimer
```






***

## Methods


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

### deleteAllTimer

Delete all timer.

```php
public deleteAllTimer(): void
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

### getTimerCount



```php
public getTimerCount(): int
```











***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
