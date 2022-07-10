***

# Context

Execution context for spec tests.

This object tracks state that would be difficult to store on the test itself
due to the design of PHPUnit's data providers and setUp/tearDown methods.

* Full name: `\MongoDB\Tests\UnifiedSpecTests\Context`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### activeClient



```php
private string $activeClient
```






***

### entityMap



```php
private \MongoDB\Tests\UnifiedSpecTests\EntityMap $entityMap
```






***

### eventCollectors



```php
private \MongoDB\Tests\UnifiedSpecTests\EventCollector[] $eventCollectors
```






***

### eventObserversByClient



```php
private \MongoDB\Tests\UnifiedSpecTests\EventObserver[] $eventObserversByClient
```






***

### internalClient



```php
private \MongoDB\Client $internalClient
```






***

### inLoop



```php
private bool $inLoop
```






***

### uri



```php
private string $uri
```






***

## Methods


### __construct



```php
public __construct(\MongoDB\Client $internalClient, string $uri): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$internalClient` | **\MongoDB\Client** |  |
| `$uri` | **string** |  |




***

### createEntities

Create entities for "createEntities".

```php
public createEntities(array $entities): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entities` | **array** |  |




***

### getEntityMap



```php
public getEntityMap(): \MongoDB\Tests\UnifiedSpecTests\EntityMap
```











***

### getInternalClient



```php
public getInternalClient(): \MongoDB\Client
```











***

### isActiveClient



```php
public isActiveClient(string $clientId): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **string** |  |




***

### setActiveClient



```php
public setActiveClient(?string $clientId = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **?string** |  |




***

### isInLoop



```php
public isInLoop(): bool
```











***

### setInLoop



```php
public setInLoop(bool $inLoop): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inLoop` | **bool** |  |




***

### assertExpectedEventsForClients



```php
public assertExpectedEventsForClients(array $expectedEventsForClients): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedEventsForClients` | **array** |  |




***

### startEventObservers



```php
public startEventObservers(): void
```











***

### stopEventObservers



```php
public stopEventObservers(): void
```











***

### getEventObserverForClient



```php
public getEventObserverForClient(string $id): \MongoDB\Tests\UnifiedSpecTests\EventObserver
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### startEventCollectors



```php
public startEventCollectors(): void
```











***

### stopEventCollectors



```php
public stopEventCollectors(): void
```











***

### convertReadPreferenceTags



```php
private convertReadPreferenceTags(string|array $readPreferenceTags): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readPreferenceTags` | **string&#124;array** |  |




***

### createClient



```php
private createClient(string $id, \stdClass $o): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$o` | **\stdClass** |  |




***

### createEntityCollector



```php
private createEntityCollector(string $clientId, \stdClass $o): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **string** |  |
| `$o` | **\stdClass** |  |




***

### createCollection



```php
private createCollection(string $id, \stdClass $o): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$o` | **\stdClass** |  |




***

### createDatabase



```php
private createDatabase(string $id, \stdClass $o): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$o` | **\stdClass** |  |




***

### createSession



```php
private createSession(string $id, \stdClass $o): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$o` | **\stdClass** |  |




***

### createBucket



```php
private createBucket(string $id, \stdClass $o): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$o` | **\stdClass** |  |




***

### prepareCollectionOrDatabaseOptions



```php
private static prepareCollectionOrDatabaseOptions(array $options): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### prepareBucketOptions



```php
private static prepareBucketOptions(array $options): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### prepareSessionOptions



```php
private static prepareSessionOptions(array $options): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### prepareDefaultTransactionOptions



```php
private static prepareDefaultTransactionOptions(array $options): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### removeMultipleMongoses

Removes mongos hosts beyond the first if the URI refers to a sharded
cluster. Otherwise, the URI is returned as-is.

```php
private static removeMultipleMongoses(string $uri): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***

### requireMultipleMongoses

Requires multiple mongos hosts if the URI refers to a sharded cluster.

```php
private static requireMultipleMongoses(string $uri): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **string** |  |




***


***

