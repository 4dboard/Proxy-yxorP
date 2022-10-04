***

# Report





* Full name: `\yxorP\snag\Report`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PAYLOAD_VERSION`|public| |\yxorP\snag\HttpClient::NOTIFY_PAYLOAD_VERSION|

## Properties


### config



```php
private \yxorP\snag\Configuration $config
```






***

### originalError



```php
private array|null|\Throwable $originalError
```






***

### stacktrace



```php
private \yxorP\snag\Stacktrace $stacktrace
```






***

### previous



```php
private $previous
```






***

### name



```php
private string $name
```






***

### message



```php
private ?string $message
```






***

### severity



```php
private string $severity
```






***

### context



```php
private ?string $context
```






***

### groupingHash



```php
private ?string $groupingHash
```






***

### metaData



```php
private array $metaData
```






***

### user



```php
private array $user
```






***

### breadcrumbs



```php
private array $breadcrumbs
```






***

### time



```php
private string $time
```






***

### unhandled



```php
private bool $unhandled
```






***

### severityReason



```php
private array $severityReason
```






***

### session



```php
private $session
```






***

## Methods


### __construct



```php
protected __construct(\yxorP\snag\Configuration $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |




***

### fromPHPError



```php
public static fromPHPError(\yxorP\snag\Configuration $config, mixed $code, mixed $message, mixed $file, mixed $line, mixed $fatal = false): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |
| `$code` | **mixed** |  |
| `$message` | **mixed** |  |
| `$file` | **mixed** |  |
| `$line` | **mixed** |  |
| `$fatal` | **mixed** |  |




***

### setPHPError



```php
public setPHPError(mixed $code, mixed $message, mixed $file, mixed $line, mixed $fatal = false): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$message` | **mixed** |  |
| `$file` | **mixed** |  |
| `$line` | **mixed** |  |
| `$fatal` | **mixed** |  |




***

### fromPHPThrowable



```php
public static fromPHPThrowable(\yxorP\snag\Configuration $config, mixed $throwable): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |
| `$throwable` | **mixed** |  |




***

### setPHPThrowable



```php
public setPHPThrowable(mixed $throwable): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwable` | **mixed** |  |




***

### setPrevious



```php
protected setPrevious(mixed $throwable): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwable` | **mixed** |  |




***

### fromNamedError



```php
public static fromNamedError(\yxorP\snag\Configuration $config, mixed $name, mixed $message = null): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |
| `$name` | **mixed** |  |
| `$message` | **mixed** |  |




***

### getOriginalError



```php
public getOriginalError(): \Throwable|array|null
```











***

### getStacktrace



```php
public getStacktrace(): \yxorP\snag\Stacktrace
```











***

### setStacktrace



```php
protected setStacktrace(\yxorP\snag\Stacktrace $stacktrace): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stacktrace` | **\yxorP\snag\Stacktrace** |  |




***

### addMetaData



```php
public addMetaData(array $metadata): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **array** |  |




***

### removeNullElements



```php
protected removeNullElements(mixed $array): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |




***

### addBreadcrumb



```php
public addBreadcrumb(\yxorP\snag\Breadcrumbs\Breadcrumb $breadcrumb): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$breadcrumb` | **\yxorP\snag\Breadcrumbs\Breadcrumb** |  |




***

### cleanupObj



```php
protected cleanupObj(mixed $obj, mixed $isMetaData): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$isMetaData` | **mixed** |  |




***

### shouldFilter



```php
protected shouldFilter(mixed $key, mixed $isMetaData): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$isMetaData` | **mixed** |  |




***

### enumToString



```php
private enumToString(\UnitEnum $enum): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enum` | **\UnitEnum** |  |




***

### getSummary



```php
public getSummary(): array
```











***

### getName



```php
public getName(): string
```











***

### setName



```php
public setName(mixed $name): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### getMessage



```php
public getMessage(): ?string
```











***

### setMessage



```php
public setMessage(mixed $message): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***

### getSeverity



```php
public getSeverity(): string
```











***

### setSeverity



```php
public setSeverity(mixed $severity): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$severity` | **mixed** |  |




***

### setSessionData



```php
public setSessionData(array $session): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session` | **array** |  |




***

### getErrors



```php
public getErrors(): array
```











***

### toError



```php
private toError(): array
```











***

### toArray



```php
public toArray(): array
```











***

### getUser



```php
public getUser(): array
```











***

### setUser



```php
public setUser(array $user): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$user` | **array** |  |




***

### getContext



```php
public getContext(): ?string
```











***

### setContext



```php
public setContext(mixed $context): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **mixed** |  |




***

### exceptionArray



```php
protected exceptionArray(): mixed
```











***

### exceptionObject



```php
protected exceptionObject(): array
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

### getUnhandled



```php
public getUnhandled(): bool
```











***

### setUnhandled



```php
public setUnhandled(mixed $unhandled): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$unhandled` | **mixed** |  |




***

### getSeverityReason



```php
public getSeverityReason(): array
```











***

### setSeverityReason



```php
public setSeverityReason(array $severityReason): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$severityReason` | **array** |  |




***

### getGroupingHash



```php
public getGroupingHash(): ?string
```











***

### setGroupingHash



```php
public setGroupingHash(mixed $groupingHash): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groupingHash` | **mixed** |  |




***


***

