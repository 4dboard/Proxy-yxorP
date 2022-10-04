***

# CompletionSuggestions

Stores all completion suggestions for the current input.

* Full name: `\Symfony\Component\Console\Completion\CompletionSuggestions`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### valueSuggestions

```php
private $valueSuggestions
```

***

### optionSuggestions

```php
private $optionSuggestions
```

***

## Methods

### suggestValue

Add a suggested value for an input option or argument.

```php
public suggestValue(string|\Symfony\Component\Console\Completion\Suggestion $value): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;\Symfony\Component\Console\Completion\Suggestion** |  |

***

### suggestValues

Add multiple suggested values at once for an input option or argument.

```php
public suggestValues(list&lt;string|\Symfony\Component\Console\Completion\Suggestion&gt; $values): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **list<string&#124;\Symfony\Component\Console\Completion\Suggestion>** |  |

***

### suggestOption

Add a suggestion for an input option name.

```php
public suggestOption(\Symfony\Component\Console\Input\InputOption $option): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **\Symfony\Component\Console\Input\InputOption** |  |

***

### suggestOptions

Add multiple suggestions for input option names at once.

```php
public suggestOptions(\Symfony\Component\Console\Input\InputOption[] $options): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Symfony\Component\Console\Input\InputOption[]** |  |

***

### getOptionSuggestions

```php
public getOptionSuggestions(): \Symfony\Component\Console\Input\InputOption[]
```

***

### getValueSuggestions

```php
public getValueSuggestions(): \Symfony\Component\Console\Completion\Suggestion[]
```

***


***

