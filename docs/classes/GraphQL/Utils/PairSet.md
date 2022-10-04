***

# PairSet

A way to keep track of pairs of things when the ordering of the pair does
not matter. We do this by maintaining a sort of double adjacency sets.

* Full name: `\GraphQL\Utils\PairSet`

## Properties

### data

```php
private bool[][] $data
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### has

```php
public has(string $a, string $b, bool $areMutuallyExclusive): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **string** |  |
| `$b` | **string** |  |
| `$areMutuallyExclusive` | **bool** |  |

***

### add

```php
public add(string $a, string $b, bool $areMutuallyExclusive): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **string** |  |
| `$b` | **string** |  |
| `$areMutuallyExclusive` | **bool** |  |

***

### pairSetAdd

```php
private pairSetAdd(string $a, string $b, bool $areMutuallyExclusive): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **string** |  |
| `$b` | **string** |  |
| `$areMutuallyExclusive` | **bool** |  |

***


***

