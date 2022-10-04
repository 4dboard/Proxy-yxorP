***

# resolvedDomain





* Full name: `\yxorP\app\lib\parser\resolvedDomain`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\app\lib\parser\resolvedDomainNameInterface`](./resolvedDomainNameInterface.md)
* This class is a **Final class**



## Properties


### domain



```php
private \yxorP\app\lib\parser\nameInterface $domain
```






***

### suffix



```php
private \yxorP\app\lib\parser\topLevelDomainInterface $suffix
```






***

### secondLevelDomain



```php
private \yxorP\app\lib\parser\nameInterface $secondLevelDomain
```






***

### registrableDomain



```php
private \yxorP\app\lib\parser\nameInterface $registrableDomain
```






***

### subDomain



```php
private \yxorP\app\lib\parser\nameInterface $subDomain
```






***

## Methods


### __construct



```php
private __construct(\yxorP\app\lib\parser\nameInterface $domain, \yxorP\app\lib\parser\topLevelDomainInterface $suffix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\app\lib\parser\nameInterface** |  |
| `$suffix` | **\yxorP\app\lib\parser\topLevelDomainInterface** |  |




***

### validateState



```php
private validateState(): void
```











***

### value



```php
public value(): ?string
```











***

### fromICANN



```php
public static fromICANN(mixed $domain, int $suffixLength): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |
| `$suffixLength` | **int** |  |




***

### setDomainName



```php
private static setDomainName(mixed $domain): \yxorP\app\lib\parser\nameInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### domain



```php
public domain(): \yxorP\app\lib\parser\nameInterface
```











***

### fromPrivate



```php
public static fromPrivate(mixed $domain, int $suffixLength): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |
| `$suffixLength` | **int** |  |




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
public static fromUnknown(mixed $domain, int $suffixLength): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |
| `$suffixLength` | **int** |  |




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

### toString



```php
public toString(): string
```











***

### registrableDomain



```php
public registrableDomain(): \yxorP\app\lib\parser\nameInterface
```











***

### secondLevelDomain



```php
public secondLevelDomain(): \yxorP\app\lib\parser\nameInterface
```











***

### subDomain



```php
public subDomain(): \yxorP\app\lib\parser\nameInterface
```











***

### suffix



```php
public suffix(): \yxorP\app\lib\parser\topLevelDomainInterface
```











***

### toAscii



```php
public toAscii(): self
```











***

### toUnicode



```php
public toUnicode(): self
```











***

### withSuffix



```php
public withSuffix(mixed $suffix): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **mixed** |  |




***

### withSubDomain



```php
public withSubDomain(mixed $subDomain): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subDomain` | **mixed** |  |




***

### withSecondLevelDomain



```php
public withSecondLevelDomain(mixed $label): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$label` | **mixed** |  |




***


***

