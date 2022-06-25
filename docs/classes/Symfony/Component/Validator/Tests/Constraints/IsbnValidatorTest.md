***

# IsbnValidatorTest





* Full name: `\Symfony\Component\Validator\Tests\Constraints\IsbnValidatorTest`
* Parent class: [`\Symfony\Component\Validator\Tests\Constraints\AbstractConstraintValidatorTest`](./AbstractConstraintValidatorTest.md)

**See Also:**

* https://en.wikipedia.org/wiki/Isbn - 




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

### getValidIsbn10



```php
public getValidIsbn10(): mixed
```











***

### getInvalidIsbn10



```php
public getInvalidIsbn10(): mixed
```











***

### getValidIsbn13



```php
public getValidIsbn13(): mixed
```











***

### getInvalidIsbn13



```php
public getInvalidIsbn13(): mixed
```











***

### getValidIsbn



```php
public getValidIsbn(): mixed
```











***

### getInvalidIsbn



```php
public getInvalidIsbn(): mixed
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

### testValidIsbn10



```php
public testValidIsbn10(mixed $isbn): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isbn` | **mixed** |  |




***

### testInvalidIsbn10



```php
public testInvalidIsbn10(mixed $isbn, mixed $code): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isbn` | **mixed** |  |
| `$code` | **mixed** |  |




***

### testValidIsbn13



```php
public testValidIsbn13(mixed $isbn): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isbn` | **mixed** |  |




***

### testInvalidIsbn13



```php
public testInvalidIsbn13(mixed $isbn, mixed $code): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isbn` | **mixed** |  |
| `$code` | **mixed** |  |




***

### testValidIsbnAny



```php
public testValidIsbnAny(mixed $isbn): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isbn` | **mixed** |  |




***

### testInvalidIsbnAnyIsbn10



```php
public testInvalidIsbnAnyIsbn10(mixed $isbn, mixed $code): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isbn` | **mixed** |  |
| `$code` | **mixed** |  |




***

### testInvalidIsbnAnyIsbn13



```php
public testInvalidIsbnAnyIsbn13(mixed $isbn, mixed $code): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isbn` | **mixed** |  |
| `$code` | **mixed** |  |




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
