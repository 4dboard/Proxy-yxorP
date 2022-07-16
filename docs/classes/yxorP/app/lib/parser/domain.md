***

# domain





* Full name: `\yxorP\app\lib\parser\domain`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\nameInterface`](./nameInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`IDNA_2003`|private| |&#039;IDNA_2003&#039;|
|`IDNA_2008`|private| |&#039;IDNA_2008&#039;|
|`REGEXP_IDN_PATTERN`|private| |&#039;/[^\\x20-\\x7f]/&#039;|
|`REGEXP_REGISTERED_NAME`|private| |&#039;/(?(DEFINE)
        (?&lt;unreserved&gt;[a-z0-9_~\\-])
        (?&lt;sub_delims&gt;[!$&amp;\&#039;()*+,;=])
        (?&lt;encoded&gt;%[A-F0-9]{2})
        (?&lt;reg_name&gt;(?:(?&amp;unreserved)|(?&amp;sub_delims)|(?&amp;encoded)){1,63})
    )
    ^(?:(?&amp;reg_name)\\.){0,126}(?&amp;reg_name)\\.?$/ix&#039;|
|`REGEXP_URI_DELIMITERS`|private| |&#039;/[:\\/?#\\[\\]@ ]/&#039;|

## Properties


### labels



```php
private array $labels
```






***

### domain



```php
private ?string $domain
```






***

### type



```php
private string $type
```






***

## Methods


### __construct



```php
private __construct(string $type, mixed $domain): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$domain` | **mixed** |  |




***

### parseDomain



```php
private parseDomain(mixed $domain): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### parseValue



```php
private parseValue(mixed $domain): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### domainToUnicode



```php
private domainToUnicode(string $domain): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |




***

### domainToAscii



```php
private domainToAscii(string $domain): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |




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

### fromIDNA2003



```php
public static fromIDNA2003(mixed $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### fromIDNA2008



```php
public static fromIDNA2008(mixed $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### value



```php
public value(): ?string
```











***

### toUnicode



```php
public toUnicode(): self
```











***

### getIterator



```php
public getIterator(): \Iterator
```











***

### jsonSerialize



```php
public jsonSerialize(): ?string
```











***

### count



```php
public count(): int
```











***

### toString



```php
public toString(): string
```











***

### label



```php
public label(int $key): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **int** |  |




***

### keys



```php
public keys(string $label = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$label` | **string** |  |




***

### labels



```php
public labels(): array
```











***

### toAscii



```php
public toAscii(): self
```











***

### prepend



```php
public prepend(mixed $label): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$label` | **mixed** |  |




***

### withLabel



```php
public withLabel(int $key, mixed $label): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **int** |  |
| `$label` | **mixed** |  |




***

### normalize



```php
private normalize(mixed $domain): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### isAscii



```php
public isAscii(): bool
```











***

### append



```php
public append(mixed $label): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$label` | **mixed** |  |




***

### withoutLabel



```php
public withoutLabel(int $key, int $keys): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **int** |  |
| `$keys` | **int** |  |




***

### clear



```php
public clear(): \yxorP\app\lib\parser\domain
```











***

### slice



```php
public slice(int $offset, int $length = null): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |
| `$length` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
