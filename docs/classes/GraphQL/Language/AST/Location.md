***

# Location

Contains a range of UTF-8 character offsets and token references that
identify the region of the source from which the AST derived.

* Full name: `\GraphQL\Language\AST\Location`

## Properties

### start

The character offset at which this Node begins.

```php
public int $start
```

***

### end

The character offset at which this Node ends.

```php
public int $end
```

***

### startToken

The Token at which this Node begins.

```php
public \GraphQL\Language\Token|null $startToken
```

***

### endToken

The Token at which this Node ends.

```php
public \GraphQL\Language\Token|null $endToken
```

***

### source

The Source document the AST represents.

```php
public \GraphQL\Language\Source|null $source
```

***

## Methods

### create

```php
public static create(int $start, int $end): static
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **int** |  |
| `$end` | **int** |  |

***

### __construct

```php
public __construct(?\GraphQL\Language\Token $startToken = null, ?\GraphQL\Language\Token $endToken = null, ?\GraphQL\Language\Source $source = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$startToken` | **?\GraphQL\Language\Token** |  |
| `$endToken` | **?\GraphQL\Language\Token** |  |
| `$source` | **?\GraphQL\Language\Source** |  |

***


***

