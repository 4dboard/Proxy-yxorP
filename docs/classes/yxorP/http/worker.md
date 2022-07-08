***

# worker





* Full name: `\yxorP\http\worker`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public| |&#039;1.0.0&#039;|
|`STATUS_STARTING`|public| |1|
|`STATUS_RUNNING`|public| |2|
|`STATUS_SHUTDOWN`|public| |4|
|`STATUS_RELOADING`|public| |8|
|`DEFAULT_BACKLOG`|public| |102400|
|`MAX_UDP_PACKAGE_SIZE`|public| |65535|
|`UI_SAFE_LENGTH`|public| |4|

## Properties


### daemonize



```php
public static bool $daemonize
```



* This property is **static**.


***

### stdoutFile



```php
public static string $stdoutFile
```



* This property is **static**.


***

### pidFile



```php
public static string $pidFile
```



* This property is **static**.


***

### statusFile



```php
public static string $statusFile
```



* This property is **static**.


***

### logFile



```php
public static string $logFile
```



* This property is **static**.


***

### globalEvent



```php
public static $globalEvent
```



* This property is **static**.


***

### onMasterReload



```php
public static $onMasterReload
```



* This property is **static**.


***

### onMasterStop



```php
public static $onMasterStop
```



* This property is **static**.


***

### eventLoopClass



```php
public static string $eventLoopClass
```



* This property is **static**.


***

### processTitle



```php
public static string $processTitle
```



* This property is **static**.


***

### stopTimeout



```php
public static int $stopTimeout
```



* This property is **static**.


***

### command



```php
public static string $command
```



* This property is **static**.


***

### _masterPid



```php
private static int $_masterPid
```



* This property is **static**.


***

### _workers



```php
private static array $_workers
```



* This property is **static**.


***

### _pidMap



```php
private static array $_pidMap
```



* This property is **static**.


***

### _pidsToRestart



```php
private static array $_pidsToRestart
```



* This property is **static**.


***

### _idMap



```php
private static array $_idMap
```



* This property is **static**.


***

### _status



```php
private static int $_status
```



* This property is **static**.


***

### _maxWorkerNameLength



```php
private static int $_maxWorkerNameLength
```



* This property is **static**.


***

### _maxSocketNameLength



```php
private static int $_maxSocketNameLength
```



* This property is **static**.


***

### _maxUserNameLength



```php
private static int $_maxUserNameLength
```



* This property is **static**.


***

### _maxProtoNameLength



```php
private static int $_maxProtoNameLength
```



* This property is **static**.


***

### _maxProcessesNameLength



```php
private static int $_maxProcessesNameLength
```



* This property is **static**.


***

### _maxStatusNameLength



```php
private static int $_maxStatusNameLength
```



* This property is **static**.


***

### _statisticsFile



```php
private static string $_statisticsFile
```



* This property is **static**.


***

### _startFile



```php
private static string $_startFile
```



* This property is **static**.


***

### _processForWindows



```php
private static array $_processForWindows
```



* This property is **static**.


***

### _globalStatistics



```php
private static array $_globalStatistics
```



* This property is **static**.


***

### _availableEventLoops



```php
private static array $_availableEventLoops
```



* This property is **static**.


***

### _builtinTransports



```php
private static array $_builtinTransports
```



* This property is **static**.


***

### _errorType



```php
private static array $_errorType
```



* This property is **static**.


***

### _gracefulStop



```php
private static bool $_gracefulStop
```



* This property is **static**.


***

### _outputStream



```php
private static $_outputStream
```



* This property is **static**.


***

### _outputDecorated



```php
private static $_outputDecorated
```



* This property is **static**.


***

### id



```php
public int $id
```






***

### name



```php
public string $name
```






***

### count



```php
public int $count
```






***

### user



```php
public string $user
```






***

### group



```php
public string $group
```






***

### reloadable



```php
public bool $reloadable
```






***

### reusePort



```php
public bool $reusePort
```






***

### onWorkerStart



```php
public $onWorkerStart
```






***

### onConnect



```php
public $onConnect
```






***

### onMessage



```php
public $onMessage
```






***

### onClose



```php
public $onClose
```






***

### onError



```php
public $onError
```






***

### onBufferFull



```php
public $onBufferFull
```






***

### onBufferDrain



```php
public $onBufferDrain
```






***

### onWorkerStop



```php
public $onWorkerStop
```






***

### onWorkerReload



```php
public $onWorkerReload
```






***

### transport



```php
public string $transport
```






***

### connections



```php
public array $connections
```






***

### protocol



```php
public $protocol
```






***

### stopping



```php
public bool $stopping
```






***

### _pauseAccept



```php
private bool $_pauseAccept
```






***

### _mainSocket



```php
private $_mainSocket
```






***

### _socketName



```php
private string $_socketName
```






***

### _localSocket



```php
private $_localSocket
```






***

### _context



```php
private $_context
```






***

### workerId



```php
private ?string $workerId
```






***

## Methods


### __construct



```php
public __construct(string $socket_name = null, array $context_option = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$socket_name` | **string** |  |
| `$context_option` | **array** |  |




***

### runAll



```php
public static runAll(): mixed
```



* This method is **static**.







***

### checkSapiEnv



```php
protected static checkSapiEnv(): mixed
```



* This method is **static**.







***

### init



```php
protected static init(): mixed
```



* This method is **static**.







***

### safeEcho



```php
public static safeEcho(string $msg, bool $decorated = false): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$msg` | **string** |  |
| `$decorated` | **bool** |  |




***

### outputStream



```php
private static outputStream(mixed $stream = null): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |




***

### setProcessTitle



```php
protected static setProcessTitle(string $title): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **string** |  |




***

### initId



```php
protected static initId(): mixed
```



* This method is **static**.







***

### parseCommand



```php
protected static parseCommand(): mixed
```



* This method is **static**.







***

### getArgv



```php
public static getArgv(): array
```



* This method is **static**.







***

### log



```php
public static log(mixed $msg): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$msg` | **mixed** |  |




***

### checkMasterIsAlive



```php
protected static checkMasterIsAlive(mixed $master_pid): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$master_pid` | **mixed** |  |




***

### formatStatusData



```php
protected static formatStatusData(mixed $statistics_file): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$statistics_file` | **mixed** |  |




***

### daemonize



```php
protected static daemonize(): mixed
```



* This method is **static**.







***

### initWorkers



```php
protected static initWorkers(): mixed
```



* This method is **static**.







***

### getCurrentUser



```php
protected static getCurrentUser(): mixed
```



* This method is **static**.







***

### getUiColumns



```php
public static getUiColumns(): array
```



* This method is **static**.







***

### installSignal



```php
protected static installSignal(): mixed
```



* This method is **static**.







***

### saveMasterPid



```php
protected static saveMasterPid(): mixed
```



* This method is **static**.







***

### displayUI



```php
protected static displayUI(): mixed
```



* This method is **static**.







***

### getEventLoopName



```php
protected static getEventLoopName(): string
```



* This method is **static**.







***

### getSingleLineTotalLength



```php
public static getSingleLineTotalLength(): int
```



* This method is **static**.







***

### forkWorkers



```php
protected static forkWorkers(): mixed
```



* This method is **static**.







***

### forkWorkersForLinux



```php
protected static forkWorkersForLinux(): mixed
```



* This method is **static**.







***

### forkOneWorkerForLinux



```php
protected static forkOneWorkerForLinux(self $worker): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$worker` | **self** |  |




***

### getId



```php
protected static getId(mixed $worker_id, mixed $pid): bool|int|string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$worker_id` | **mixed** |  |
| `$pid` | **mixed** |  |




***

### listen



```php
public listen(): mixed
```











***

### parseSocketAddress



```php
protected parseSocketAddress(): mixed
```











***

### resumeAccept



```php
public resumeAccept(): mixed
```











***

### resetStd



```php
public static resetStd(bool $throw_exception = true): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throw_exception` | **bool** |  |




***

### getSocketName



```php
public getSocketName(): string
```











***

### setUserAndGroup



```php
public setUserAndGroup(): mixed
```











***

### run



```php
public run(): mixed
```











***

### reinstallSignal



```php
protected static reinstallSignal(): mixed
```



* This method is **static**.







***

### stopAll



```php
public static stopAll(mixed $code, mixed $log = &#039;&#039;): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$log` | **mixed** |  |




***

### getAllWorkerPids



```php
protected static getAllWorkerPids(): array
```



* This method is **static**.







***

### forkWorkersForWindows



```php
protected static forkWorkersForWindows(): mixed
```



* This method is **static**.







***

### getStartFilesForWindows



```php
public static getStartFilesForWindows(): array
```



* This method is **static**.







***

### forkOneWorkerForWindows



```php
public static forkOneWorkerForWindows(mixed $start_file): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start_file` | **mixed** |  |




***

### monitorWorkers



```php
protected static monitorWorkers(): mixed
```



* This method is **static**.







***

### monitorWorkersForLinux



```php
protected static monitorWorkersForLinux(): mixed
```



* This method is **static**.







***

### reload



```php
protected static reload(): mixed
```



* This method is **static**.







***

### exitAndClearAll



```php
protected static exitAndClearAll(): mixed
```



* This method is **static**.







***

### monitorWorkersForWindows



```php
protected static monitorWorkersForWindows(): mixed
```



* This method is **static**.







***

### reloadAllWorkers



```php
public static reloadAllWorkers(): mixed
```



* This method is **static**.







***

### getAllWorkers



```php
public static getAllWorkers(): array
```



* This method is **static**.







***

### getEventLoop



```php
public static getEventLoop(): mixed
```



* This method is **static**.







***

### signalHandler



```php
public static signalHandler(mixed $signal): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signal` | **mixed** |  |




***

### writeStatisticsToStatusFile



```php
protected static writeStatisticsToStatusFile(): mixed
```



* This method is **static**.







***

### writeConnectionsStatisticsToStatusFile



```php
protected static writeConnectionsStatisticsToStatusFile(): mixed
```



* This method is **static**.







***

### checkWorkerStatusForWindows



```php
public static checkWorkerStatusForWindows(): mixed
```



* This method is **static**.







***

### checkIfChildRunning



```php
public static checkIfChildRunning(): mixed
```



* This method is **static**.







***

### getStatus



```php
public static getStatus(): int
```



* This method is **static**.







***

### getGracefulStop



```php
public static getGracefulStop(): bool
```



* This method is **static**.







***

### checkErrors



```php
public static checkErrors(): mixed
```



* This method is **static**.







***

### getErrorType



```php
protected static getErrorType(mixed $type): string|array|object|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




***

### lock



```php
protected static lock(): mixed
```



* This method is **static**.







***

### unlock



```php
protected static unlock(): mixed
```



* This method is **static**.







***

### stop



```php
public stop(): mixed
```











***

### unlisten



```php
public unlisten(): mixed
```











***

### pauseAccept



```php
public pauseAccept(): mixed
```











***

### getMainSocket



```php
public getMainSocket(): mixed
```











***

### acceptTcpConnection



```php
public acceptTcpConnection(mixed $socket): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$socket` | **mixed** |  |




***

### acceptUdpConnection



```php
public acceptUdpConnection(mixed $socket): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$socket` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
