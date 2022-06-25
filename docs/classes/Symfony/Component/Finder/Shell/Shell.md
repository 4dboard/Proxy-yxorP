***

# Shell

* Full name: `\Symfony\Component\Finder\Shell\Shell`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TYPE_UNIX`|public| |1|
|`TYPE_DARWIN`|public| |2|
|`TYPE_CYGWIN`|public| |3|
|`TYPE_WINDOWS`|public| |4|
|`TYPE_BSD`|public| |5|

## Properties

### type

```php
private string|null $type
```

***

## Methods

### getType

Returns guessed OS type.

```php
public getType(): int
```

***

### testCommand

Tests if a command is available.

```php
public testCommand(string $command): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **string** |  |

***

### guessType

Guesses OS type.

```php
private guessType(): int
```

yxorP::get('REQUEST')
