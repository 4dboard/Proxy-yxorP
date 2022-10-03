***

# ConfirmationQuestion

Represents a yes/no question.



* Full name: `\Symfony\Component\Console\Question\ConfirmationQuestion`
* Parent class: [`\Symfony\Component\Console\Question\Question`](./Question.md)



## Properties


### trueAnswerRegex



```php
private $trueAnswerRegex
```






***

## Methods


### __construct



```php
public __construct(string $question, bool $default = true, string $trueAnswerRegex = &#039;/^y/i&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **string** | The question to ask to the user |
| `$default` | **bool** | The default answer to return, true or false |
| `$trueAnswerRegex` | **string** | A regex to match the &quot;yes&quot; answer |




***

### getDefaultNormalizer

Returns the default answer normalizer.

```php
private getDefaultNormalizer(): callable
```











***


## Inherited methods


### __construct



```php
public __construct(string $question, string|bool|int|float|null $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **string** | The question to ask to the user |
| `$default` | **string&#124;bool&#124;int&#124;float&#124;null** | The default answer to return if the user enters nothing |




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
public getDefault(): string|bool|int|float|null
```











***

### isMultiline

Returns whether the user response accepts newline characters.

```php
public isMultiline(): bool
```











***

### setMultiline

Sets whether the user response should accept newline characters.

```php
public setMultiline(bool $multiline): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$multiline` | **bool** |  |




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

In case the response cannot be hidden, whether to fallback on non-hidden question or not.

```php
public isHiddenFallback(): bool
```











***

### setHiddenFallback

Sets whether to fallback on non-hidden question if the response cannot be hidden.

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
public setAutocompleterValues(?iterable $values): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **?iterable** |  |




***

### getAutocompleterCallback

Gets the callback function used for the autocompleter.

```php
public getAutocompleterCallback(): ?callable
```











***

### setAutocompleterCallback

Sets the callback function used for the autocompleter.

```php
public setAutocompleterCallback(callable $callback = null): $this
```

The callback is passed the user input as argument and should return an iterable of corresponding suggestions.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |




***

### setValidator

Sets a validator for the question.

```php
public setValidator(callable $validator = null): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$validator` | **callable** |  |




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
public setMaxAttempts(?int $attempts): $this
```

Null means an unlimited number of attempts.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attempts` | **?int** |  |




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
public getNormalizer(): callable|null
```

The normalizer can ba a callable (a string), a closure or a class implementing __invoke.









***

### isAssoc



```php
protected isAssoc(array $array): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |




***

### isTrimmable



```php
public isTrimmable(): bool
```











***

### setTrimmable



```php
public setTrimmable(bool $trimmable): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trimmable` | **bool** |  |




***


***

