***

# NodeTestCase

* Full name: `\Twig\Test\NodeTestCase`
* Parent class: [`TestCase`](../../PHPUnit/Framework/TestCase.md)
* This class is an **Abstract class**

## Methods

### getTests

```php
public getTests(): mixed
```

* This method is **abstract**.

***

### testCompile

```php
public testCompile(mixed $node, mixed $source, mixed $environment = null, mixed $isPattern = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **mixed** |  |
| `$source` | **mixed** |  |
| `$environment` | **mixed** |  |
| `$isPattern` | **mixed** |  |

***

### assertNodeCompilation

```php
public assertNodeCompilation(mixed $source, \Twig\Node\Node $node, \Twig\Environment $environment = null, mixed $isPattern = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **mixed** |  |
| `$node` | **\Twig\Node\Node** |  |
| `$environment` | **\Twig\Environment** |  |
| `$isPattern` | **mixed** |  |

***

### getCompiler

```php
protected getCompiler(\Twig\Environment $environment = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$environment` | **\Twig\Environment** |  |

***

### getEnvironment

```php
protected getEnvironment(): mixed
```

***

### getVariableGetter

```php
protected getVariableGetter(mixed $name, mixed $line = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$line` | **mixed** |  |

***

### getAttributeGetter

```php
protected getAttributeGetter(): mixed
```

yxorP::get('REQUEST')
