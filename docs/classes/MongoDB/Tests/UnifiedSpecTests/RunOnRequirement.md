***

# RunOnRequirement

* Full name: `\MongoDB\Tests\UnifiedSpecTests\RunOnRequirement`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TOPOLOGY_SINGLE`|public| |&#039;single&#039;|
|`TOPOLOGY_REPLICASET`|public| |&#039;replicaset&#039;|
|`TOPOLOGY_SHARDED`|public| |&#039;sharded&#039;|
|`TOPOLOGY_SHARDED_REPLICASET`|public| |&#039;sharded-replicaset&#039;|
|`TOPOLOGY_LOAD_BALANCED`|public| |&#039;load-balanced&#039;|
|`SERVERLESS_REQUIRE`|public| |&#039;require&#039;|
|`SERVERLESS_FORBID`|public| |&#039;forbid&#039;|
|`SERVERLESS_ALLOW`|public| |&#039;allow&#039;|
|`VERSION_PATTERN`|public| |&#039;/^[0-9]+(\\.[0-9]+){1,2}$/&#039;|

## Properties

### minServerVersion

```php
private string $minServerVersion
```

***

### maxServerVersion

```php
private string $maxServerVersion
```

***

### topologies

```php
private array $topologies
```

***

### serverParameters

```php
private \stdClass $serverParameters
```

***

### auth

```php
private bool $auth
```

***

### serverless

```php
private string $serverless
```

***

### supportedTopologies

```php
private static array $supportedTopologies
```

* This property is **static**.

***

### supportedServerless

```php
private static array $supportedServerless
```

* This property is **static**.

***

## Methods

### __construct

```php
public __construct(\stdClass $o): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$o` | **\stdClass** |  |

***

### isSatisfied

```php
public isSatisfied(string $serverVersion, string $topology, \stdClass $serverParameters, bool $isAuthenticated, bool $isServerless): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serverVersion` | **string** |  |
| `$topology` | **string** |  |
| `$serverParameters` | **\stdClass** |  |
| `$isAuthenticated` | **bool** |  |
| `$isServerless` | **bool** |  |

***

### isTopologySatisfied

```php
private isTopologySatisfied(string $topology): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$topology` | **string** |  |

***


***

