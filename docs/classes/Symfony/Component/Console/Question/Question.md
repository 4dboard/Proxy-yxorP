***

# Question

Represents a Question.

* Full name: `\Symfony\Component\Console\Question\Question`

## Properties

### question

```php
private $question
```

***

### attempts

```php
private $attempts
```

***

### hidden

```php
private $hidden
```

***

### hiddenFallback

```php
private $hiddenFallback
```

***

### autocompleterValues

```php
private $autocompleterValues
```

***

### validator

```php
private $validator
```

***

### default

```php
private $default
```

***

### normalizer

```php
private $normalizer
```

***

## Methods

### __construct

```php
public __construct(string $question, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **string** | The question to ask to the user |
| `$default` | **mixed** | The default answer to return if the user enters nothing |

***

### getQuestion

Returns the question.

```php
public getQuestion(): string
```

***

### getDefault

Returns the default answer.

```php
public getDefault(): mixed
```

***

### isHidden

Returns whether the user response must be hidden.

```php
public isHidden(): bool
```

***

### setHidden

Sets whether the user response must be hidden or not.

```php
public setHidden(bool $hidden): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hidden` | **bool** |  |

***

### isHiddenFallback

In case the response can not be hidden, whether to fallback on non-hidden question or not.

```php
public isHiddenFallback(): bool
```

***

### setHiddenFallback

Sets whether to fallback on non-hidden question if the response can not be hidden.

```php
public setHiddenFallback(bool $fallback): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fallback` | **bool** |  |

***

### getAutocompleterValues

Gets values for the autocompleter.

```php
public getAutocompleterValues(): iterable|null
```

***

### setAutocompleterValues

Sets values for the autocompleter.

```php
public setAutocompleterValues(iterable|null $values): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **iterable&#124;null** |  |

***

### setValidator

Sets a validator for the question.

```php
public setValidator(callable|null $validator): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$validator` | **callable&#124;null** |  |

***

### getValidator

Gets the validator for the question.

```php
public getValidator(): callable|null
```

***

### setMaxAttempts

Sets the maximum number of attempts.

```php
public setMaxAttempts(int|null $attempts): $this
```

Null means an unlimited number of attempts.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attempts` | **int&#124;null** |  |

***

### getMaxAttempts

Gets the maximum number of attempts.

```php
public getMaxAttempts(): int|null
```

Null means an unlimited number of attempts.









***

### setNormalizer

Sets a normalizer for the response.

```php
public setNormalizer(callable $normalizer): $this
```

The normalizer can be a callable (a string), a closure or a class implementing __invoke.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizer` | **callable** |  |

***

### getNormalizer

Gets the normalizer for the response.

```php
public getNormalizer(): callable
```

The normalizer can ba a callable (a string), a closure or a class implementing __invoke.









***

### isAssoc

```php
protected isAssoc(mixed $array): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |

yxorP::get('REQUEST')
