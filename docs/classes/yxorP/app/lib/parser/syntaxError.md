***

# syntaxError





* Full name: `\yxorP\lib\parser\syntaxError`
* Parent class: [`InvalidArgumentException`](../../../../InvalidArgumentException.md)
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\yxorP\lib\parser\cannotProcessHostInterface`](./cannotProcessHostInterface.md)
* This class is a **Final class**



## Properties


### idnaInfo



```php
private ?\yxorP\lib\parser\idnaInfo $idnaInfo
```






***

## Methods


### __construct



```php
private __construct(string $message, \yxorP\lib\parser\idnaInfo $idnaInfo = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$idnaInfo` | **\yxorP\lib\parser\idnaInfo** |  |




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
public static dueToIDNAError(string $domain, \yxorP\lib\parser\idnaInfo $idnaInfo): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |
| `$idnaInfo` | **\yxorP\lib\parser\idnaInfo** |  |




***

### dueToInvalidSuffix



```php
public static dueToInvalidSuffix(\yxorP\lib\parser\hostInterface $publicSuffix, string $type = &#039;&#039;): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$publicSuffix` | **\yxorP\lib\parser\hostInterface** |  |
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
public static dueToInvalidLabelKey(\yxorP\lib\parser\hostInterface $domain, int $key): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **\yxorP\lib\parser\hostInterface** |  |
| `$key` | **int** |  |




***

### idnaInfo



```php
public idnaInfo(): ?\yxorP\lib\parser\idnaInfo
```











***


***

