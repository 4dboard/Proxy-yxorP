***

# idnaInfo





* Full name: `\yxorP\app\lib\parser\idnaInfo`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ERRORS`|private| |[\yxorP\app\lib\parser\idna::ERROR_EMPTY_LABEL =&gt; &#039;a non-final domain name label (or the whole domain name) is empty&#039;, \yxorP\app\lib\parser\idna::ERROR_LABEL_TOO_LONG =&gt; &#039;a domain name label is longer than 63 bytes&#039;, \yxorP\app\lib\parser\idna::ERROR_DOMAIN_NAME_TOO_LONG =&gt; &#039;a domain name is longer than 255 bytes in its storage form&#039;, \yxorP\app\lib\parser\idna::ERROR_LEADING_HYPHEN =&gt; &#039;a label starts with a hyphen-minus (&quot;-&quot;)&#039;, \yxorP\app\lib\parser\idna::ERROR_TRAILING_HYPHEN =&gt; &#039;a label ends with a hyphen-minus (&quot;-&quot;)&#039;, \yxorP\app\lib\parser\idna::ERROR_HYPHEN_3_4 =&gt; &#039;a label contains hyphen-minus (&quot;-&quot;) in the third and fourth positions&#039;, \yxorP\app\lib\parser\idna::ERROR_LEADING_COMBINING_MARK =&gt; &#039;a label starts with a combining mark&#039;, \yxorP\app\lib\parser\idna::ERROR_DISALLOWED =&gt; &#039;a label or domain name contains disallowed characters&#039;, \yxorP\app\lib\parser\idna::ERROR_PUNYCODE =&gt; &#039;a label starts with &quot;xn--&quot; but does not contain valid Punycode&#039;, \yxorP\app\lib\parser\idna::ERROR_LABEL_HAS_DOT =&gt; &#039;a label contains a dot=full stop&#039;, \yxorP\app\lib\parser\idna::ERROR_INVALID_ACE_LABEL =&gt; &#039;An ACE label does not contain a valid label string&#039;, \yxorP\app\lib\parser\idna::ERROR_BIDI =&gt; &#039;a label does not meet the IDNA BiDi requirements (for right-to-left characters)&#039;, \yxorP\app\lib\parser\idna::ERROR_CONTEXTJ =&gt; &#039;a label does not meet the IDNA CONTEXTJ requirements&#039;, \yxorP\app\lib\parser\idna::ERROR_CONTEXTO_DIGITS =&gt; &#039;a label does not meet the IDNA CONTEXTO requirements for digits&#039;, \yxorP\app\lib\parser\idna::ERROR_CONTEXTO_PUNCTUATION =&gt; &#039;a label does not meet the IDNA CONTEXTO requirements for punctuation characters. Some punctuation characters &quot;Would otherwise have been DISALLOWED&quot; but are allowed in certain contexts&#039;]|

## Properties


### result



```php
private string $result
```






***

### isTransitionalDifferent



```php
private bool $isTransitionalDifferent
```






***

### errors



```php
private int $errors
```






***

### errorList



```php
private array $errorList
```






***

## Methods


### __construct



```php
private __construct(string $result, bool $isTransitionalDifferent, int $errors): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **string** |  |
| `$isTransitionalDifferent` | **bool** |  |
| `$errors` | **int** |  |




***

### __set_state



```php
public static __set_state(array $properties): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **array** |  |




***

### fromIntl



```php
public static fromIntl(array $infos): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$infos` | **array** |  |




***

### result



```php
public result(): string
```











***

### isTransitionalDifferent



```php
public isTransitionalDifferent(): bool
```











***

### errors



```php
public errors(): int
```











***

### error



```php
public error(int $error): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **int** |  |




***

### errorList



```php
public errorList(): array
```











***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
