***

# unableToResolveDomain





* Full name: `\yxorP\lib\parser\unableToResolveDomain`
* Parent class: [`InvalidArgumentException`](../../../../InvalidArgumentException.md)
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\lib\parser\cannotProcessHostInterface`](./cannotProcessHostInterface.md)
* This class is a **Final class**



## Properties


### domain



```php
private ?\yxorP\lib\parser\nameInterface $domain
```






***

## Methods


### __construct



```php
private __construct(string $message, ?\yxorP\lib\parser\nameInterface $domain = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$domain` | **?\yxorP\lib\parser\nameInterface** |  |




***

### dueToInvalidSecondLevelDomain



```php
public static dueToInvalidSecondLevelDomain(\yxorP\lib\parser\nameInterface $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\lib\parser\nameInterface** |  |




***

### dueToIdenticalValue



```php
public static dueToIdenticalValue(\yxorP\lib\parser\nameInterface $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\lib\parser\nameInterface** |  |




***

### dueToMissingSuffix



```php
public static dueToMissingSuffix(\yxorP\lib\parser\nameInterface $domain, string $type): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\lib\parser\nameInterface** |  |
| `$type` | **string** |  |




***

### dueToUnresolvableDomain



```php
public static dueToUnresolvableDomain(\yxorP\lib\parser\nameInterface $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\lib\parser\nameInterface** |  |




***

### dueToMissingRegistrableDomain



```php
public static dueToMissingRegistrableDomain(\yxorP\lib\parser\nameInterface $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\lib\parser\nameInterface** |  |




***

### domain



```php
public domain(): ?\yxorP\lib\parser\nameInterface
```











***


***

