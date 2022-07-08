***

# rules





* Full name: `\yxorP\parser\rules`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\publicSuffixListInterface`](./publicSuffixListInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ICANN_DOMAINS`|private| |&#039;ICANN_DOMAINS&#039;|
|`PRIVATE_DOMAINS`|private| |&#039;PRIVATE_DOMAINS&#039;|
|`REGEX_PSL_SECTION`|private| |&#039;,^// ===(?&lt;point&gt;BEGIN|END) (?&lt;type&gt;ICANN|PRIVATE) DOMAINS===,&#039;|
|`PSL_SECTION`|private| |[&#039;ICANN&#039; =&gt; [&#039;BEGIN&#039; =&gt; self::ICANN_DOMAINS, &#039;END&#039; =&gt; &#039;&#039;], &#039;PRIVATE&#039; =&gt; [&#039;BEGIN&#039; =&gt; self::PRIVATE_DOMAINS, &#039;END&#039; =&gt; &#039;&#039;]]|

## Properties


### rules



```php
private array $rules
```






***

## Methods


### __construct



```php
private __construct(array $rules): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rules` | **array** |  |




***

### fromPath



```php
public static fromPath(string $path, mixed $context = null): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$context` | **mixed** |  |




***

### fromString



```php
public static fromString(mixed $content): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




***

### parse



```php
private static parse(string $content): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |




***

### getSection



```php
private static getSection(string $section, string $line): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$section` | **string** |  |
| `$line` | **string** |  |




***

### addRule



```php
private static addRule(array $list, array $ruleParts): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$list` | **array** |  |
| `$ruleParts` | **array** |  |




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

### resolve



```php
public resolve(mixed $host): \yxorP\parser\resolvedInterfaceDomainNameInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **mixed** |  |




***

### getCookieDomain



```php
public getCookieDomain(mixed $host): \yxorP\parser\resolvedInterfaceDomainNameInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **mixed** |  |




***

### validateDomain



```php
private validateDomain(mixed $domain): \yxorP\parser\domainNameInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### resolveSuffix



```php
private resolveSuffix(\yxorP\parser\domainNameInterface $domain, string $section): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |
| `$section` | **string** |  |




***

### getPublicSuffixLengthFromSection



```php
private getPublicSuffixLengthFromSection(\yxorP\parser\domainNameInterface $domain, string $section): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |
| `$section` | **string** |  |




***

### getICANNDomain



```php
public getICANNDomain(mixed $host): \yxorP\parser\resolvedInterfaceDomainNameInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **mixed** |  |




***

### getPrivateDomain



```php
public getPrivateDomain(mixed $host): \yxorP\parser\resolvedInterfaceDomainNameInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **mixed** |  |




***


***

