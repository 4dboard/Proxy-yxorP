***

# Client





* Full name: `\yxorP\snag\Client`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ENDPOINT`|public| |\yxorP\snag\Configuration::NOTIFY_ENDPOINT|
|`DEFAULT_TIMEOUT_S`|public| |15.0|

## Properties


### config



```php
private \yxorP\snag\Configuration $config
```






***

### resolver



```php
private \yxorP\snag\Request\ResolverInterface|\yxorP\snag\Request\BasicResolver $resolver
```






***

### recorder



```php
private \yxorP\snag\Breadcrumbs\Recorder $recorder
```






***

### pipeline



```php
private \yxorP\snag\Pipeline $pipeline
```






***

### http



```php
private \yxorP\snag\HttpClient $http
```






***

### sessionTracker



```php
private \yxorP\snag\SessionTracker $sessionTracker
```






***

## Methods


### __construct



```php
public __construct(\yxorP\snag\Configuration $config, \yxorP\snag\Request\ResolverInterface $resolver = null, \yxorP\proxy\ClientInterface $proxy = null, \yxorP\snag\Shutdown\ShutdownStrategyInterface $shutdownStrategy = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |
| `$resolver` | **\yxorP\snag\Request\ResolverInterface** |  |
| `$proxy` | **\yxorP\proxy\ClientInterface** |  |
| `$shutdownStrategy` | **\yxorP\snag\Shutdown\ShutdownStrategyInterface** |  |




***

### makeProxy



```php
public static makeProxy(mixed $base = null, array $options = []): \yxorP\proxy\Client
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **mixed** |  |
| `$options` | **array** |  |




***

### resolveProxyOptions



```php
private static resolveProxyOptions(mixed $base, array $options): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **mixed** |  |
| `$options` | **array** |  |




***

### getCaBundlePath



```php
protected static getCaBundlePath(): bool|string
```



* This method is **static**.







***

### syncNotifyEndpointWithProxyBaseUri



```php
private syncNotifyEndpointWithProxyBaseUri(\yxorP\snag\Configuration $configuration, \yxorP\proxy\ClientInterface $proxy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configuration` | **\yxorP\snag\Configuration** |  |
| `$proxy` | **\yxorP\proxy\ClientInterface** |  |




***

### registerMiddleware



```php
public registerMiddleware(callable $middleware): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$middleware` | **callable** |  |




***

### make



```php
public static make(mixed $apiKey = null, mixed $notifyEndpoint = null, mixed $defaults = true): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$apiKey` | **mixed** |  |
| `$notifyEndpoint` | **mixed** |  |
| `$defaults` | **mixed** |  |




***

### registerDefaultCallbacks



```php
public registerDefaultCallbacks(): static
```











***

### registerCallback



```php
public registerCallback(callable $callback): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |




***

### getConfig



```php
public getConfig(): \yxorP\snag\Configuration
```











***

### getPipeline



```php
public getPipeline(): \yxorP\snag\Pipeline
```











***

### clearBreadcrumbs



```php
public clearBreadcrumbs(): mixed
```











***

### notifyException



```php
public notifyException(mixed $throwable, callable $callback = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwable` | **mixed** |  |
| `$callback` | **callable** |  |




***

### notify



```php
public notify(\yxorP\snag\Report $report, callable $callback = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$report` | **\yxorP\snag\Report** |  |
| `$callback` | **callable** |  |




***

### leaveBreadcrumb



```php
public leaveBreadcrumb(mixed $name, mixed $type = null, array $metaData = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$type` | **mixed** |  |
| `$metaData` | **array** |  |




***

### flush



```php
public flush(): mixed
```











***

### notifyError



```php
public notifyError(mixed $name, mixed $message, callable $callback = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$message` | **mixed** |  |
| `$callback` | **callable** |  |




***

### deploy



```php
public deploy(mixed $repository = null, mixed $branch = null, mixed $revision = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$repository` | **mixed** |  |
| `$branch` | **mixed** |  |
| `$revision` | **mixed** |  |




***

### build



```php
public build(mixed $repository = null, mixed $revision = null, mixed $provider = null, mixed $builderName = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$repository` | **mixed** |  |
| `$revision` | **mixed** |  |
| `$provider` | **mixed** |  |
| `$builderName` | **mixed** |  |




***

### startSession



```php
public startSession(): mixed
```











***

### getSessionTracker



```php
public getSessionTracker(): \yxorP\snag\SessionTracker
```











***

### getApiKey



```php
public getApiKey(): string
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

### isBatchSending



```php
public isBatchSending(): bool
```











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

### setFilters



```php
public setFilters(array $filters): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filters` | **array** |  |




***

### getFilters



```php
public getFilters(): array
```











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

### setStripPathRegex



```php
public setStripPathRegex(mixed $stripPathRegex): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stripPathRegex` | **mixed** |  |




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

### setNotifier



```php
public setNotifier(array $notifier): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notifier` | **array** |  |




***

### getNotifier



```php
public getNotifier(): array
```











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

### getAppData



```php
public getAppData(): array
```











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

### getMetaData



```php
public getMetaData(): array
```











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

### shouldIgnoreErrorCode



```php
public shouldIgnoreErrorCode(mixed $code): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




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

### getNotifyEndpoint



```php
public getNotifyEndpoint(): string
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

### getSessionEndpoint



```php
public getSessionEndpoint(): string
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

### getBuildEndpoint



```php
public getBuildEndpoint(): string
```











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

### setMemoryLimitIncrease



```php
public setMemoryLimitIncrease(mixed $value): \yxorP\snag\Configuration
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getMemoryLimitIncrease



```php
public getMemoryLimitIncrease(): ?int
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

### getDiscardClasses



```php
public getDiscardClasses(): array
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

### getRedactedKeys



```php
public getRedactedKeys(): array
```











***


***

