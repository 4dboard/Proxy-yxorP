***

# resolvedDomain





* Full name: `\yxorP\parser\resolvedDomain`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\resolvedInterfaceDomainNameInterface`](./resolvedInterfaceDomainNameInterface.md)
* This class is a **Final class**



## Properties


### domain



```php
private \yxorP\parser\domainNameInterface $domain
```






***

### suffix



```php
private \yxorP\parser\effectiveTopLevelDomainInterface $suffix
```






***

### secondLevelDomain



```php
private \yxorP\parser\domainNameInterface $secondLevelDomain
```






***

### registrableDomain



```php
private \yxorP\parser\domainNameInterface $registrableDomain
```






***

### subDomain



```php
private \yxorP\parser\domainNameInterface $subDomain
```






***

## Methods


### __construct



```php
private __construct(\yxorP\parser\domainNameInterface $domain, \yxorP\parser\effectiveTopLevelDomainInterface $suffix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |
| `$suffix` | **\yxorP\parser\effectiveTopLevelDomainInterface** |  |




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
public registrableDomain(): \yxorP\parser\domainNameInterface
```











***

### secondLevelDomain



```php
public secondLevelDomain(): \yxorP\parser\domainNameInterface
```











***

### subDomain



```php
public subDomain(): \yxorP\parser\domainNameInterface
```











***

### suffix



```php
public suffix(): \yxorP\parser\effectiveTopLevelDomainInterface
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

