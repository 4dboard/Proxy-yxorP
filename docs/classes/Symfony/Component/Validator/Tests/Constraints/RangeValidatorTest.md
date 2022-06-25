***

# RangeValidatorTest





* Full name: `\Symfony\Component\Validator\Tests\Constraints\RangeValidatorTest`
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

### getTenToTwenty



```php
public getTenToTwenty(): mixed
```











***

### getLessThanTen



```php
public getLessThanTen(): mixed
```











***

### getMoreThanTwenty



```php
public getMoreThanTwenty(): mixed
```











***

### testValidValuesMin



```php
public testValidValuesMin(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### testValidValuesMax



```php
public testValidValuesMax(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### testValidValuesMinMax



```php
public testValidValuesMinMax(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### testInvalidValuesMin



```php
public testInvalidValuesMin(mixed $value, mixed $formattedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$formattedValue` | **mixed** |  |




***

### testInvalidValuesMax



```php
public testInvalidValuesMax(mixed $value, mixed $formattedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$formattedValue` | **mixed** |  |




***

### testInvalidValuesCombinedMax



```php
public testInvalidValuesCombinedMax(mixed $value, mixed $formattedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$formattedValue` | **mixed** |  |




***

### testInvalidValuesCombinedMin



```php
public testInvalidValuesCombinedMin(mixed $value, mixed $formattedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$formattedValue` | **mixed** |  |




***

### getTenthToTwentiethMarch2014



```php
public getTenthToTwentiethMarch2014(): mixed
```











***

### getSoonerThanTenthMarch2014



```php
public getSoonerThanTenthMarch2014(): mixed
```











***

### getLaterThanTwentiethMarch2014



```php
public getLaterThanTwentiethMarch2014(): mixed
```











***

### testValidDatesMin



```php
public testValidDatesMin(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### testValidDatesMax



```php
public testValidDatesMax(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### testValidDatesMinMax



```php
public testValidDatesMinMax(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### testInvalidDatesMin



```php
public testInvalidDatesMin(mixed $value, mixed $dateTimeAsString): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$dateTimeAsString` | **mixed** |  |




***

### testInvalidDatesMax



```php
public testInvalidDatesMax(mixed $value, mixed $dateTimeAsString): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$dateTimeAsString` | **mixed** |  |




***

### testInvalidDatesCombinedMax



```php
public testInvalidDatesCombinedMax(mixed $value, mixed $dateTimeAsString): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$dateTimeAsString` | **mixed** |  |




***

### testInvalidDatesCombinedMin



```php
public testInvalidDatesCombinedMin(mixed $value, mixed $dateTimeAsString): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$dateTimeAsString` | **mixed** |  |




***

### getInvalidValues



```php
public getInvalidValues(): mixed
```











***

### testNonNumeric



```php
public testNonNumeric(): mixed
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
