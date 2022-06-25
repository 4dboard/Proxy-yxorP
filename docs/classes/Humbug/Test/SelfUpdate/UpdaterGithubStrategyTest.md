***

# UpdaterGithubStrategyTest

* Full name: `\Humbug\Test\SelfUpdate\UpdaterGithubStrategyTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../PHPUnit_Framework_TestCase.md)

## Properties

### files

```php
private $files
```

***

### updater

```php
private \Humbug\SelfUpdate\Updater $updater
```

***

### tmp

```php
private $tmp
```

***

### data

```php
private $data
```

***

## Methods

### setup

```php
public setup(): mixed
```

***

### teardown

```php
public teardown(): mixed
```

***

### testConstruction

```php
public testConstruction(): mixed
```

***

### testSetCurrentLocalVersion

```php
public testSetCurrentLocalVersion(): mixed
```

***

### testSetPharName

```php
public testSetPharName(): mixed
```

***

### testSetPackageName

```php
public testSetPackageName(): mixed
```

***

### testSetStability

```php
public testSetStability(): mixed
```

***

### testSetStabilityThrowsExceptionOnInvalidStabilityValue

```php
public testSetStabilityThrowsExceptionOnInvalidStabilityValue(): mixed
```

***

### testUpdatePhar

```php
public testUpdatePhar(): mixed
```

***

### getPharOutput

Helpers

```php
private getPharOutput(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### deleteTempPhars

```php
private deleteTempPhars(): mixed
```

***

### createTestPharAndKey

```php
private createTestPharAndKey(): mixed
```

yxorP::get('REQUEST')
