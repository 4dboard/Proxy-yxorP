***

# topLevelDomains





* Full name: `\yxorP\app\lib\parser\topLevelDomains`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\topLevelDomainListInterface`](./topLevelDomainListInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`IANA_DATE_FORMAT`|private| |&#039;D M d H:i:s Y e&#039;|
|`REGEXP_HEADER_LINE`|private| |&#039;/^\\# Version (?&lt;version&gt;\\d+), Last Updated (?&lt;date&gt;.*?)$/&#039;|

## Properties


### records



```php
private array $records
```






***

### version



```php
private string $version
```






***

### lastUpdated



```php
private \DateTimeImmutable $lastUpdated
```






***

## Methods


### __construct



```php
private __construct(array $records, string $version, \DateTimeImmutable $lastUpdated): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |
| `$version` | **string** |  |
| `$lastUpdated` | **\DateTimeImmutable** |  |




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
public static parse(string $content): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |




***

### extractHeader



```php
private static extractHeader(string $content): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |




***

### extractRootZone



```php
private static extractRootZone(string $content): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |




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

### version



```php
public version(): string
```











***

### lastUpdated



```php
public lastUpdated(): \DateTimeImmutable
```











***

### count



```php
public count(): int
```











***

### isEmpty



```php
public isEmpty(): bool
```











***

### getIterator



```php
public getIterator(): \Iterator
```











***

### resolve



```php
public resolve(mixed $host): \yxorP\app\lib\parser\resolvedDomainNameInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **mixed** |  |




***

### validateDomain



```php
private validateDomain(mixed $domain): \yxorP\app\lib\parser\nameInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### containsTopLevelDomain



```php
private containsTopLevelDomain(\yxorP\app\lib\parser\nameInterface $domain): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\app\lib\parser\nameInterface** |  |




***

### getIANADomain



```php
public getIANADomain(mixed $host): \yxorP\app\lib\parser\resolvedDomainNameInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **mixed** |  |




***


***

