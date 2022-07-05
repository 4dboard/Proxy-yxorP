***

# worker





* Full name: `\yxorP\http\worker`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public| |&#039;5.0.0&#039;|
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
public static $daemonize
```



* This property is **static**.


***

### stdoutFile



```php
public static $stdoutFile
```



* This property is **static**.


***

### pidFile



```php
public static $pidFile
```



* This property is **static**.


***

### statusFile



```php
public static $statusFile
```



* This property is **static**.


***

### logFile



```php
public static $logFile
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
public static $eventLoopClass
```



* This property is **static**.


***

### processTitle



```php
public static $processTitle
```



* This property is **static**.


***

### stopTimeout



```php
public static $stopTimeout
```



* This property is **static**.


***

### command



```php
public static $command
```



* This property is **static**.


***

### _masterPid



```php
protected static $_masterPid
```



* This property is **static**.


***

### _workers



```php
protected static $_workers
```



* This property is **static**.


***

### _pidMap



```php
protected static $_pidMap
```



* This property is **static**.


***

### _pidsToRestart



```php
protected static $_pidsToRestart
```



* This property is **static**.


***

### _idMap



```php
protected static $_idMap
```



* This property is **static**.


***

### _status



```php
protected static $_status
```



* This property is **static**.


***

### _maxWorkerNameLength



```php
protected static $_maxWorkerNameLength
```



* This property is **static**.


***

### _maxSocketNameLength



```php
protected static $_maxSocketNameLength
```



* This property is **static**.


***

### _maxUserNameLength



```php
protected static $_maxUserNameLength
```



* This property is **static**.


***

### _maxProtoNameLength



```php
protected static $_maxProtoNameLength
```



* This property is **static**.


***

### _maxProcessesNameLength



```php
protected static $_maxProcessesNameLength
```



* This property is **static**.


***

### _maxStatusNameLength



```php
protected static $_maxStatusNameLength
```



* This property is **static**.


***

### _statisticsFile



```php
protected static $_statisticsFile
```



* This property is **static**.


***

### _startFile



```php
protected static $_startFile
```



* This property is **static**.


***

### _processForWindows



```php
protected static $_processForWindows
```



* This property is **static**.


***

### _globalStatistics



```php
protected static $_globalStatistics
```



* This property is **static**.


***

### _availableEventLoops



```php
protected static $_availableEventLoops
```



* This property is **static**.


***

### _builtinTransports



```php
protected static $_builtinTransports
```



* This property is **static**.


***

### _errorType



```php
protected static $_errorType
```



* This property is **static**.


***

### _gracefulStop



```php
protected static $_gracefulStop
```



* This property is **static**.


***

### _outputStream



```php
protected static $_outputStream
```



* This property is **static**.


***

### _outputDecorated



```php
protected static $_outputDecorated
```



* This property is **static**.


***

### id



```php
public $id
```






***

### name



```php
public $name
```






***

### count



```php
public $count
```






***

### user



```php
public $user
```






***

### group



```php
public $group
```






***

### reloadable



```php
public $reloadable
```






***

### reusePort



```php
public $reusePort
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
public $transport
```






***

### connections



```php
public $connections
```






***

### protocol



```php
public $protocol
```






***

### stopping



```php
public $stopping
```






***

### _pauseAccept



```php
protected $_pauseAccept
```






***

### _mainSocket



```php
protected $_mainSocket
```






***

### _socketName



```php
protected $_socketName
```






***

### _localSocket



```php
protected $_localSocket
```






***

### _context



```php
protected $_context
```






***

### workerId



```php
protected $workerId
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
private static outputStream(mixed $stream = null): mixed
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
public static getArgv(): mixed
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
protected static checkMasterIsAlive(mixed $master_pid): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$master_pid` | **mixed** |  |




***

### formatStatusData



```php
protected static formatStatusData(mixed $statistics_file): mixed
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
public static getUiColumns(): mixed
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
public static getSingleLineTotalLength(): mixed
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
protected static getId(mixed $worker_id, mixed $pid): mixed
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
public getSocketName(): mixed
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
protected static getAllWorkerPids(): mixed
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
public static getStartFilesForWindows(): mixed
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
public static getAllWorkers(): mixed
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
public static getStatus(): mixed
```



* This method is **static**.







***

### getGracefulStop



```php
public static getGracefulStop(): mixed
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
protected static getErrorType(mixed $type): mixed
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
public acceptUdpConnection(mixed $socket): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$socket` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
