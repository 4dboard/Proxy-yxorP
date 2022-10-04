***

# HttpClient





* Full name: `\yxorP\snag\HttpClient`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`MAX_SIZE`|public| |1048576|
|`NOTIFY_PAYLOAD_VERSION`|public| |&#039;4.0&#039;|
|`SESSION_PAYLOAD_VERSION`|public| |&#039;1.0&#039;|
|`PAYLOAD_VERSION`|public| |self::NOTIFY_PAYLOAD_VERSION|

## Properties


### config



```php
private \yxorP\snag\Configuration $config
```






***

### proxy



```php
private \yxorP\proxy\ClientInterface $proxy
```






***

### queue



```php
private array $queue
```






***

## Methods


### __construct



```php
public __construct(\yxorP\snag\Configuration $config, \yxorP\proxy\ClientInterface $proxy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |
| `$proxy` | **\yxorP\proxy\ClientInterface** |  |




***

### queue



```php
public queue(\yxorP\snag\Report $report): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$report` | **\yxorP\snag\Report** |  |




***

### deploy



```php
public deploy(array $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### post



```php
protected post(mixed $uri, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **mixed** |  |
| `$options` | **array** |  |




***

### sendBuildReport



```php
public sendBuildReport(array $buildInfo): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$buildInfo` | **array** |  |




***

### send



```php
public send(): mixed
```











***

### sendEvents



```php
public sendEvents(): mixed
```











***

### deliverEvents



```php
protected deliverEvents(mixed $uri, array $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **mixed** |  |
| `$data` | **array** |  |




***

### normalize



```php
protected normalize(array $data): bool|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### length



```php
protected length(mixed $str): bool|int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***

### getHeaders



```php
protected getHeaders(mixed $version = self::NOTIFY_PAYLOAD_VERSION): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |




***

### getEventPayload



```php
protected getEventPayload(): array
```











***

### sendSessions



```php
public sendSessions(array $payload): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **array** |  |




***

### build



```php
protected build(): array
```











***

### postJson



```php
protected postJson(mixed $uri, array $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **mixed** |  |
| `$data` | **array** |  |




***


***

