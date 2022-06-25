***

# BaseDumper

* Full name: `\Twig\Profiler\Dumper\BaseDumper`
* This class is an **Abstract class**

## Properties

### root

```php
private $root
```

***

## Methods

### dump

```php
public dump(\Twig\Profiler\Profile $profile): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |

***

### formatTemplate

```php
protected formatTemplate(\Twig\Profiler\Profile $profile, mixed $prefix): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |
| `$prefix` | **mixed** |  |

***

### formatNonTemplate

```php
protected formatNonTemplate(\Twig\Profiler\Profile $profile, mixed $prefix): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |
| `$prefix` | **mixed** |  |

***

### formatTime

```php
protected formatTime(\Twig\Profiler\Profile $profile, mixed $percent): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |
| `$percent` | **mixed** |  |

***

### dumpProfile

```php
private dumpProfile(\Twig\Profiler\Profile $profile, mixed $prefix = &#039;&#039;, mixed $sibling = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **\Twig\Profiler\Profile** |  |
| `$prefix` | **mixed** |  |
| `$sibling` | **mixed** |  |

yxorP::get('REQUEST')
