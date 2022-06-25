***

# IpValidatorTest





* Full name: `\Symfony\Component\Validator\Tests\Constraints\IpValidatorTest`
* Parent class: [`\Symfony\Component\Validator\Tests\Constraints\AbstractConstraintValidatorTest`](./AbstractConstraintValidatorTest.md)




## Methods


### getApiVersion



```php
protected getApiVersion(): mixed
```











***

### createValidator



```php
protected createValidator(): mixed
```











***

### testNullIsValid



```php
public testNullIsValid(): mixed
```











***

### testEmptyStringIsValid



```php
public testEmptyStringIsValid(): mixed
```











***

### testExpectsStringCompatibleType



```php
public testExpectsStringCompatibleType(): mixed
```











***

### testInvalidValidatorVersion



```php
public testInvalidValidatorVersion(): mixed
```











***

### testValidIpsV4



```php
public testValidIpsV4(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getValidIpsV4



```php
public getValidIpsV4(): mixed
```











***

### testValidIpsV6



```php
public testValidIpsV6(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getValidIpsV6



```php
public getValidIpsV6(): mixed
```











***

### testValidIpsAll



```php
public testValidIpsAll(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getValidIpsAll



```php
public getValidIpsAll(): mixed
```











***

### testInvalidIpsV4



```php
public testInvalidIpsV4(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidIpsV4



```php
public getInvalidIpsV4(): mixed
```











***

### testInvalidPrivateIpsV4



```php
public testInvalidPrivateIpsV4(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidPrivateIpsV4



```php
public getInvalidPrivateIpsV4(): mixed
```











***

### testInvalidReservedIpsV4



```php
public testInvalidReservedIpsV4(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidReservedIpsV4



```php
public getInvalidReservedIpsV4(): mixed
```











***

### testInvalidPublicIpsV4



```php
public testInvalidPublicIpsV4(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidPublicIpsV4



```php
public getInvalidPublicIpsV4(): mixed
```











***

### testInvalidIpsV6



```php
public testInvalidIpsV6(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidIpsV6



```php
public getInvalidIpsV6(): mixed
```











***

### testInvalidPrivateIpsV6



```php
public testInvalidPrivateIpsV6(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidPrivateIpsV6



```php
public getInvalidPrivateIpsV6(): mixed
```











***

### testInvalidReservedIpsV6



```php
public testInvalidReservedIpsV6(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidReservedIpsV6



```php
public getInvalidReservedIpsV6(): mixed
```











***

### testInvalidPublicIpsV6



```php
public testInvalidPublicIpsV6(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidPublicIpsV6



```php
public getInvalidPublicIpsV6(): mixed
```











***

### testInvalidIpsAll



```php
public testInvalidIpsAll(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidIpsAll



```php
public getInvalidIpsAll(): mixed
```











***

### testInvalidPrivateIpsAll



```php
public testInvalidPrivateIpsAll(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidPrivateIpsAll



```php
public getInvalidPrivateIpsAll(): mixed
```











***

### testInvalidReservedIpsAll



```php
public testInvalidReservedIpsAll(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidReservedIpsAll



```php
public getInvalidReservedIpsAll(): mixed
```











***

### testInvalidPublicIpsAll



```php
public testInvalidPublicIpsAll(mixed $ip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |




***

### getInvalidPublicIpsAll



```php
public getInvalidPublicIpsAll(): mixed
```











***


## Inherited methods


### setUp



```php
protected setUp(): mixed
```











***

### tearDown



```php
protected tearDown(): mixed
```











***

### setDefaultTimezone



```php
protected setDefaultTimezone(mixed $defaultTimezone): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultTimezone` | **mixed** |  |




***

### restoreDefaultTimezone



```php
protected restoreDefaultTimezone(): mixed
```











***

### createContext



```php
protected createContext(): mixed
```











***

### createViolation



```php
protected createViolation(mixed $message, array $parameters = array(), string $propertyPath = &#039;property.path&#039;, string $invalidValue = &#039;InvalidValue&#039;, null $plural = null, null $code = null): \Symfony\Component\Validator\ConstraintViolation
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$parameters` | **array** |  |
| `$propertyPath` | **string** |  |
| `$invalidValue` | **string** |  |
| `$plural` | **null** |  |
| `$code` | **null** |  |




***

### setGroup



```php
protected setGroup(mixed $group): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **mixed** |  |




***

### setObject



```php
protected setObject(mixed $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |




***

### setProperty



```php
protected setProperty(mixed $object, mixed $property): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$property` | **mixed** |  |




***

### setValue



```php
protected setValue(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### setRoot



```php
protected setRoot(mixed $root): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **mixed** |  |




***

### setPropertyPath



```php
protected setPropertyPath(mixed $propertyPath): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyPath` | **mixed** |  |




***

### expectNoValidate



```php
protected expectNoValidate(): mixed
```











***

### expectValidateAt



```php
protected expectValidateAt(mixed $i, mixed $propertyPath, mixed $value, mixed $group): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **mixed** |  |
| `$propertyPath` | **mixed** |  |
| `$value` | **mixed** |  |
| `$group` | **mixed** |  |




***

### expectValidateValueAt



```php
protected expectValidateValueAt(mixed $i, mixed $propertyPath, mixed $value, mixed $constraints, mixed $group = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$i` | **mixed** |  |
| `$propertyPath` | **mixed** |  |
| `$value` | **mixed** |  |
| `$constraints` | **mixed** |  |
| `$group` | **mixed** |  |




***

### assertNoViolation



```php
protected assertNoViolation(): mixed
```











***

### assertViolation



```php
protected assertViolation(mixed $message, array $parameters = array(), string $propertyPath = &#039;property.path&#039;, string $invalidValue = &#039;InvalidValue&#039;, null $plural = null, null $code = null): mixed
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$parameters` | **array** |  |
| `$propertyPath` | **string** |  |
| `$invalidValue` | **string** |  |
| `$plural` | **null** |  |
| `$code` | **null** |  |




***

### assertViolations



```php
protected assertViolations(array $expected): mixed
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **array** |  |




***

### buildViolation



```php
protected buildViolation( $message): \Symfony\Component\Validator\Tests\Constraints\ConstraintViolationAssertion
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **** |  |




***

### getApiVersion



```php
protected getApiVersion(): mixed
```











***

### createValidator



```php
protected createValidator(): mixed
```




* This method is **abstract**.






***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
