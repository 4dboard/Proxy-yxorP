***

# Twig_Test_IntegrationTestCase

Integration test helper.

* Full name: `\Twig_Test_IntegrationTestCase`
* Parent class: [`\Twig\Test\IntegrationTestCase`](./Twig/Test/IntegrationTestCase.md)

## Inherited methods

### getFixturesDir

```php
protected getFixturesDir(): string
```

* This method is **abstract**.

***

### getRuntimeLoaders

```php
protected getRuntimeLoaders(): \Twig\RuntimeLoader\RuntimeLoaderInterface[]
```

***

### getExtensions

```php
protected getExtensions(): \Twig\Extension\ExtensionInterface[]
```

***

### getTwigFilters

```php
protected getTwigFilters(): \Twig\TwigFilter[]
```

***

### getTwigFunctions

```php
protected getTwigFunctions(): \Twig\TwigFunction[]
```

***

### getTwigTests

```php
protected getTwigTests(): \Twig\TwigTest[]
```

***

### testIntegration

```php
public testIntegration(mixed $file, mixed $message, mixed $condition, mixed $templates, mixed $exception, mixed $outputs): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$message` | **mixed** |  |
| `$condition` | **mixed** |  |
| `$templates` | **mixed** |  |
| `$exception` | **mixed** |  |
| `$outputs` | **mixed** |  |

***

### testLegacyIntegration

```php
public testLegacyIntegration(mixed $file, mixed $message, mixed $condition, mixed $templates, mixed $exception, mixed $outputs): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$message` | **mixed** |  |
| `$condition` | **mixed** |  |
| `$templates` | **mixed** |  |
| `$exception` | **mixed** |  |
| `$outputs` | **mixed** |  |

***

### getTests

```php
public getTests(mixed $name, mixed $legacyTests = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$legacyTests` | **mixed** |  |

***

### getLegacyTests

```php
public getLegacyTests(): mixed
```

***

### doIntegrationTest

```php
protected doIntegrationTest(mixed $file, mixed $message, mixed $condition, mixed $templates, mixed $exception, mixed $outputs): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$message` | **mixed** |  |
| `$condition` | **mixed** |  |
| `$templates` | **mixed** |  |
| `$exception` | **mixed** |  |
| `$outputs` | **mixed** |  |

***

### parseTemplates

```php
protected static parseTemplates(mixed $test): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **mixed** |  |

yxorP::get('REQUEST')
