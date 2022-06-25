***

# DeprecationCollector

* Full name: `\Twig\Util\DeprecationCollector`

## Properties

### twig

```php
private $twig
```

***

### deprecations

```php
private $deprecations
```

***

## Methods

### __construct

```php
public __construct(\Twig\Environment $twig): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$twig` | **\Twig\Environment** |  |

***

### collectDir

Returns deprecations for templates contained in a directory.

```php
public collectDir(string $dir, string $ext = &#039;.twig&#039;): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** | A directory where templates are stored |
| `$ext` | **string** | Limit the loaded templates by extension |

**Return Value:**

An array of deprecations



***

### collect

Returns deprecations for passed templates.

```php
public collect(\Traversable $iterator): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **
\Traversable** | An iterator of templates (where keys are template names and values the contents of the template) |

**Return Value:**

An array of deprecations yxorP::get('REQUEST')
