***

# ConfigurationHelper

Helper is the base class for all helper classes.

* Full name: `\phpDocumentor\Command\Helper\ConfigurationHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](../../../Symfony/Component/Console/Helper/Helper.md)

## Properties

### configuration

```php
private \phpDocumentor\Configuration $configuration
```

***

## Methods

### __construct

Initializes this helper and registers the application configuration on it.

```php
public __construct(\phpDocumentor\Configuration $configuration): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configuration` | **\phpDocumentor\Configuration** |  |

***

### getName

Returns the canonical name of this helper.

```php
public getName(): string
```

**Return Value:**

The canonical name



***

### getOption

Returns the value of an option from the command-line parameters, configuration or given default.

```php
public getOption(\Symfony\Component\Console\Input\InputInterface $input, string $name, string|null $configPath = null, mixed|null $default = null, bool $commaSeparated = false): string|array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** | Input interface to query for information |
| `$name` | **string** | Name of the option to retrieve from argv |
| `$configPath` | **
string&#124;null** | Path to the config element(s) containing the value to be used when<br />no option is provided. |
| `$default` | **mixed&#124;null** | Default value used if there is no configuration option or path set |
| `$commaSeparated` | **bool** | Could the value be a comma separated string requiring splitting |

***

### splitCommaSeparatedValues

Split comma separated values.

```php
protected splitCommaSeparatedValues(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### valueIsEmpty

Is value empty?

```php
protected valueIsEmpty(mixed $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### getConfigValueFromPath

Returns a value by traversing the configuration tree as if it was a file path.

```php
public getConfigValueFromPath(string $path): string|int|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path to the config value separated by &#039;/&#039;. |

***

## Inherited methods

### setHelperSet

Sets the helper set associated with this helper.

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |

***

### getHelperSet

Gets the helper set associated with this helper.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```

**Return Value:**

A HelperSet instance



***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(string $string): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to check its length |

**Return Value:**

The length of the string



***

### formatTime

```php
public static formatTime(mixed $secs): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secs` | **mixed** |  |

***

### formatMemory

```php
public static formatMemory(mixed $memory): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **mixed** |  |

***

### strlenWithoutDecoration

```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

***

### removeDecoration

```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

yxorP::get('REQUEST')
