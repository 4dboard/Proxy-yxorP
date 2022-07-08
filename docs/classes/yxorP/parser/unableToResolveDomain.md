***

# unableToResolveDomain





* Full name: `\yxorP\parser\unableToResolveDomain`
* Parent class: [`InvalidArgumentException`](../../InvalidArgumentException.md)
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\cannotProcessHostInterface`](./cannotProcessHostInterface.md)
* This class is a **Final class**



## Properties


### domain



```php
private ?\yxorP\parser\domainNameInterface $domain
```






***

## Methods


### __construct



```php
private __construct(string $message, ?\yxorP\parser\domainNameInterface $domain = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$domain` | **?\yxorP\parser\domainNameInterface** |  |




***

### dueToInvalidSecondLevelDomain



```php
public static dueToInvalidSecondLevelDomain(\yxorP\parser\domainNameInterface $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |




***

### dueToIdenticalValue



```php
public static dueToIdenticalValue(\yxorP\parser\domainNameInterface $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |




***

### dueToMissingSuffix



```php
public static dueToMissingSuffix(\yxorP\parser\domainNameInterface $domain, string $type): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |
| `$type` | **string** |  |




***

### dueToUnresolvableDomain



```php
public static dueToUnresolvableDomain(\yxorP\parser\domainNameInterface $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |




***

### dueToMissingRegistrableDomain



```php
public static dueToMissingRegistrableDomain(\yxorP\parser\domainNameInterface $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\domainNameInterface** |  |




***

### domain



```php
public domain(): ?\yxorP\parser\domainNameInterface
```











***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
