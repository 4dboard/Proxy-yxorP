***

# suffix





* Full name: `\yxorP\parser\suffix`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\effectiveTopLevelDomainInterface`](./effectiveTopLevelDomainInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ICANN`|private| |&#039;ICANN&#039;|
|`PRIVATE`|private| |&#039;PRIVATE&#039;|
|`IANA`|private| |&#039;IANA&#039;|

## Properties


### domain



```php
private \yxorP\parser\domainNameInterface $domain
```






***

### section



```php
private string $section
```






***

## Methods


### __construct



```php
private __construct(\yxorP\parser\domainNameInterface $domain, string $section): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |
| `$section` | **string** |  |




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

### fromICANN



```php
public static fromICANN(mixed $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### setDomainName



```php
private static setDomainName(mixed $domain): \yxorP\parser\domainNameInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### domain



```php
public domain(): \yxorP\parser\domainNameInterface
```











***

### fromPrivate



```php
public static fromPrivate(mixed $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### fromIANA



```php
public static fromIANA(mixed $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### fromUnknown



```php
public static fromUnknown(mixed $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### isKnown



```php
public isKnown(): bool
```











***

### isIANA



```php
public isIANA(): bool
```











***

### isPublicSuffix



```php
public isPublicSuffix(): bool
```











***

### isICANN



```php
public isICANN(): bool
```











***

### isPrivate



```php
public isPrivate(): bool
```











***

### count



```php
public count(): int
```











***

### jsonSerialize



```php
public jsonSerialize(): ?string
```











***

### value



```php
public value(): ?string
```











***

### toString



```php
public toString(): string
```











***

### normalize



```php
public normalize(\yxorP\parser\domainNameInterface $domain): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |




***

### toUnicode



```php
public toUnicode(): self
```











***

### toAscii



```php
public toAscii(): self
```











***


***

