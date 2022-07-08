***

# SessionTracker





* Full name: `\yxorP\snag\SessionTracker`



## Properties


### SESSION_PAYLOAD_VERSION



```php
private static string $SESSION_PAYLOAD_VERSION
```



* This property is **static**.


***

### DELIVERY_INTERVAL



```php
private static int $DELIVERY_INTERVAL
```



* This property is **static**.


***

### MAX_SESSION_COUNT



```php
private static int $MAX_SESSION_COUNT
```



* This property is **static**.


***

### SESSION_COUNTS_KEY



```php
private static string $SESSION_COUNTS_KEY
```



* This property is **static**.


***

### SESSIONS_LAST_SENT_KEY



```php
private static string $SESSIONS_LAST_SENT_KEY
```



* This property is **static**.


***

### config



```php
private \yxorP\snag\Configuration $config
```






***

### http



```php
private \yxorP\snag\HttpClient $http
```






***

### sessionCounts



```php
private array $sessionCounts
```






***

### lockFunction



```php
private $lockFunction
```






***

### unlockFunction



```php
private $unlockFunction
```






***

### retryFunction



```php
private $retryFunction
```






***

### storageFunction



```php
private $storageFunction
```






***

### sessionFunction



```php
private $sessionFunction
```






***

### lastSent



```php
private int $lastSent
```






***

### currentSession



```php
private array $currentSession
```






***

## Methods


### __construct



```php
public __construct(\yxorP\snag\Configuration $config, \yxorP\snag\HttpClient $http = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |
| `$http` | **\yxorP\snag\HttpClient** |  |




***

### setConfig



```php
public setConfig(\yxorP\snag\Configuration $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |




***

### startSession



```php
public startSession(): mixed
```











***

### incrementSessions



```php
protected incrementSessions(mixed $minute, mixed $count = 1, mixed $deliver = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$minute` | **mixed** |  |
| `$count` | **mixed** |  |
| `$deliver` | **mixed** |  |




***

### getSessionCounts



```php
protected getSessionCounts(): bool|array
```











***

### setSessionCounts



```php
protected setSessionCounts(array $sessionCounts): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessionCounts` | **array** |  |




***

### trimOldestSessions



```php
protected trimOldestSessions(): mixed
```











***

### getLastSent



```php
protected getLastSent(): int
```











***

### setLastSent



```php
protected setLastSent(): mixed
```











***

### deliverSessions



```php
protected deliverSessions(): mixed
```











***

### constructPayload



```php
protected constructPayload(array $sessions): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessions` | **array** |  |




***

### getCurrentSession



```php
public getCurrentSession(): bool|array
```











***

### setCurrentSession



```php
public setCurrentSession(array $session): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session` | **array** |  |




***

### sendSessions



```php
public sendSessions(): mixed
```











***

### setLockFunctions



```php
public setLockFunctions(mixed $lock, mixed $unlock): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lock` | **mixed** |  |
| `$unlock` | **mixed** |  |




***

### setRetryFunction



```php
public setRetryFunction(mixed $function): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **mixed** |  |




***

### setStorageFunction



```php
public setStorageFunction(mixed $function): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **mixed** |  |




***

### setSessionFunction



```php
public setSessionFunction(mixed $function): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
