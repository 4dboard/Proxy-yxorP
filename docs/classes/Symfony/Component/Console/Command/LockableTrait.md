***

# LockableTrait

Basic lock feature for commands.

* Full name: `\Symfony\Component\Console\Command\LockableTrait`

## Properties

### lock

```php
private \Symfony\Component\Lock\LockInterface|null $lock
```

***

## Methods

### lock

Locks a command.

```php
private lock(string $name = null, bool $blocking = false): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$blocking` | **bool** |  |

***

### release

Releases the command lock if there is one.

```php
private release(): mixed
```

***

***


