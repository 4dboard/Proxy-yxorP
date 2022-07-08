***

# syntaxError





* Full name: `\yxorP\parser\syntaxError`
* Parent class: [`InvalidArgumentException`](../../InvalidArgumentException.md)
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\parser\cannotProcessHostInterface`](./cannotProcessHostInterface.md)
* This class is a **Final class**



## Properties


### idnaInfo



```php
private ?\yxorP\parser\idnaInfo $idnaInfo
```






***

## Methods


### __construct



```php
private __construct(string $message, \yxorP\parser\idnaInfo $idnaInfo = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$idnaInfo` | **\yxorP\parser\idnaInfo** |  |




***

### dueToInvalidCharacters



```php
public static dueToInvalidCharacters(string $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |




***

### dueToMalformedValue



```php
public static dueToMalformedValue(string $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |




***

### dueToIDNAError



```php
public static dueToIDNAError(string $domain, \yxorP\parser\idnaInfo $idnaInfo): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |
| `$idnaInfo` | **\yxorP\parser\idnaInfo** |  |




***

### dueToInvalidSuffix



```php
public static dueToInvalidSuffix(\yxorP\parser\aHostInterface $publicSuffix, string $type = &#039;&#039;): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$publicSuffix` | **\yxorP\parser\aHostInterface** |  |
| `$type` | **string** |  |




***

### dueToUnsupportedType



```php
public static dueToUnsupportedType(string $domain): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |




***

### dueToInvalidLabelKey



```php
public static dueToInvalidLabelKey(\yxorP\parser\aHostInterface $domain, int $key): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\parser\aHostInterface** |  |
| `$key` | **int** |  |




***

### idnaInfo



```php
public idnaInfo(): ?\yxorP\parser\idnaInfo
```











***


***

