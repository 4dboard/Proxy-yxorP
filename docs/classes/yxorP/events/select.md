***

# select

select eventloop



* Full name: `\yxorP\events\select`
* This class implements:
[`\yxorP\events\eventInterface`](./eventInterface.md)



## Properties


### _readEvents

All listeners for read/write event.

```php
protected array $_readEvents
```






***

### _writeEvents

All listeners for read/write event.

```php
protected array $_writeEvents
```






***

### _exceptEvents



```php
protected array $_exceptEvents
```






***

### _signalEvents

event listeners of signal.

```php
protected array $_signalEvents
```






***

### _readFds

Fds waiting for read event.

```php
protected array $_readFds
```






***

### _writeFds

Fds waiting for write event.

```php
protected array $_writeFds
```






***

### _exceptFds

Fds waiting for except event.

```php
protected array $_exceptFds
```






***

### _scheduler

timer scheduler.

```php
protected \SplPriorityQueue $_scheduler
```

{['data':timer_id, 'priority':run_timestamp], ..}




***

### _eventTimer

All timer event listeners.

```php
protected array $_eventTimer
```

[[func, args, flag, timer_interval], ..]




***

### _timerId

timer id.

```php
protected int $_timerId
```






***

### _selectTimeout

select timeout.

```php
protected int $_selectTimeout
```






***

## Methods


### __construct

Construct.

```php
public __construct(): mixed
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
public repeat(float $delay, mixed $func, mixed $args): int|bool
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

### onExcept

{@inheritdoc}

```php
public onExcept(mixed $stream, mixed $func): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |
| `$func` | **mixed** |  |




***

### offExcept

{@inheritdoc}

```php
public offExcept(mixed $stream): mixed
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

### signalHandler

Signal handler.

```php
public signalHandler(int $signal): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signal` | **int** |  |




***

### run

Run the event loop.

```php
public run(): void
```











***

### tick

Tick for timer.

```php
protected tick(): void
```











***

### stop

Stop event loop.

```php
public stop(): void
```











***

### deleteAllTimer

Delete all timer.

```php
public deleteAllTimer(): void
```











***

### offsignal

{@inheritdoc}

```php
public offsignal(mixed $signal): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signal` | **mixed** |  |




***

### getTimerCount



```php
public getTimerCount(): int
```











***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
