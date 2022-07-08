***

# Configuration





* Full name: `\yxorP\snag\Configuration`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NOTIFY_ENDPOINT`|public| |&#039;https://notify.bugsnag.com&#039;|
|`SESSION_ENDPOINT`|public| |&#039;https://sessions.bugsnag.com&#039;|
|`BUILD_ENDPOINT`|public| |&#039;https://build.bugsnag.com&#039;|

## Properties


### apiKey



```php
private string $apiKey
```






***

### batchSending



```php
private bool $batchSending
```






***

### notifyReleaseStages



```php
private $notifyReleaseStages
```






***

### filters



```php
private array $filters
```






***

### projectRootRegex



```php
private $projectRootRegex
```






***

### stripPathRegex



```php
private $stripPathRegex
```






***

### sendCode



```php
private bool $sendCode
```






***

### notifier



```php
private array $notifier
```






***

### fallbackType



```php
private string|false $fallbackType
```






***

### appData



```php
private array $appData
```






***

### deviceData



```php
private array $deviceData
```






***

### metaData



```php
private array $metaData
```






***

### errorReportingLevel



```php
private $errorReportingLevel
```






***

### autoCaptureSessions



```php
private bool $autoCaptureSessions
```






***

### sessionClient



```php
private \yxorP\proxy\ClientInterface|\yxorP\proxy\Client $sessionClient
```






***

### notifyEndpoint



```php
private string $notifyEndpoint
```






***

### sessionEndpoint



```php
private string $sessionEndpoint
```






***

### buildEndpoint



```php
private string $buildEndpoint
```






***

### memoryLimitIncrease



```php
private int $memoryLimitIncrease
```






***

### discardClasses



```php
private array $discardClasses
```






***

### redactedKeys



```php
private array $redactedKeys
```






***

## Methods


### __construct



```php
public __construct(mixed $apiKey): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$apiKey` | **mixed** |  |




***

### mergeDeviceData



```php
public mergeDeviceData(mixed $data): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### getApiKey



```php
public getApiKey(): string
```











***

### isBatchSending



```php
public isBatchSending(): bool
```











***

### setBatchSending



```php
public setBatchSending(mixed $batchSending): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$batchSending` | **mixed** |  |




***

### setNotifyReleaseStages



```php
public setNotifyReleaseStages(array $notifyReleaseStages = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notifyReleaseStages` | **array** |  |




***

### shouldNotify



```php
public shouldNotify(): bool
```











***

### getAppData



```php
public getAppData(): array
```











***

### getFilters



```php
public getFilters(): array
```











***

### setFilters



```php
public setFilters(array $filters): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filters` | **array** |  |




***

### setProjectRoot



```php
public setProjectRoot(mixed $projectRoot): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$projectRoot` | **mixed** |  |




***

### setProjectRootRegex



```php
public setProjectRootRegex(mixed $projectRootRegex): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$projectRootRegex` | **mixed** |  |




***

### setStripPathRegex



```php
public setStripPathRegex(mixed $stripPathRegex): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stripPathRegex` | **mixed** |  |




***

### isInProject



```php
public isInProject(mixed $file): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |




***

### setStripPath



```php
public setStripPath(mixed $stripPath): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stripPath` | **mixed** |  |




***

### getStrippedFilePath



```php
public getStrippedFilePath(mixed $file): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |




***

### setSendCode



```php
public setSendCode(mixed $sendCode): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sendCode` | **mixed** |  |




***

### shouldSendCode



```php
public shouldSendCode(): bool
```











***

### getNotifier



```php
public getNotifier(): array
```











***

### setNotifier



```php
public setNotifier(array $notifier): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notifier` | **array** |  |




***

### setAppVersion



```php
public setAppVersion(mixed $appVersion): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$appVersion` | **mixed** |  |




***

### setReleaseStage



```php
public setReleaseStage(mixed $releaseStage): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$releaseStage` | **mixed** |  |




***

### setAppType



```php
public setAppType(mixed $type): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




***

### setFallbackType



```php
public setFallbackType(mixed $type): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




***

### setHostname



```php
public setHostname(mixed $hostname): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hostname` | **mixed** |  |




***

### getDeviceData



```php
public getDeviceData(): array
```











***

### getHostname



```php
protected getHostname(): array
```











***

### getMetaData



```php
public getMetaData(): array
```











***

### setMetaData



```php
public setMetaData(array $metaData, mixed $merge = true): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metaData` | **array** |  |
| `$merge` | **mixed** |  |




***

### setErrorReportingLevel



```php
public setErrorReportingLevel(mixed $errorReportingLevel): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorReportingLevel` | **mixed** |  |




***

### isSubsetOfErrorReporting



```php
private isSubsetOfErrorReporting(mixed $level): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |




***

### getMissingErrorLevelNames



```php
private getMissingErrorLevelNames(mixed $level): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |




***

### shouldIgnoreErrorCode



```php
public shouldIgnoreErrorCode(mixed $code): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***

### getNotifyEndpoint



```php
public getNotifyEndpoint(): string
```











***

### setNotifyEndpoint



```php
public setNotifyEndpoint(mixed $endpoint): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **mixed** |  |




***

### getSessionEndpoint



```php
public getSessionEndpoint(): string
```











***

### setSessionEndpoint



```php
public setSessionEndpoint(mixed $endpoint): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **mixed** |  |




***

### getBuildEndpoint



```php
public getBuildEndpoint(): string
```











***

### setBuildEndpoint



```php
public setBuildEndpoint(mixed $endpoint): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endpoint` | **mixed** |  |




***

### setAutoCaptureSessions



```php
public setAutoCaptureSessions(mixed $track): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$track` | **mixed** |  |




***

### shouldCaptureSessions



```php
public shouldCaptureSessions(): bool
```











***

### getSessionClient



```php
public getSessionClient(): \yxorP\proxy\Client|\yxorP\proxy\ClientInterface
```











***

### getMemoryLimitIncrease



```php
public getMemoryLimitIncrease(): int
```











***

### setMemoryLimitIncrease



```php
public setMemoryLimitIncrease(mixed $value): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getDiscardClasses



```php
public getDiscardClasses(): array
```











***

### setDiscardClasses



```php
public setDiscardClasses(array $discardClasses): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$discardClasses` | **array** |  |




***

### getRedactedKeys



```php
public getRedactedKeys(): array
```











***

### setRedactedKeys



```php
public setRedactedKeys(array $redactedKeys): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$redactedKeys` | **array** |  |




***


***

