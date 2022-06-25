***

# YamlSerializationTest





* Full name: `\JMS\Serializer\Tests\Serializer\YamlSerializationTest`
* Parent class: [`\JMS\Serializer\Tests\Serializer\BaseSerializationTest`](./BaseSerializationTest.md)




## Methods


### testEmptyChild



```php
public testEmptyChild(): mixed
```











***

### testSkipEmptyChild



```php
public testSkipEmptyChild(): mixed
```











***

### testConstraintViolation



```php
public testConstraintViolation(): mixed
```











***

### testConstraintViolationList



```php
public testConstraintViolationList(): mixed
```











***

### testFormErrors



```php
public testFormErrors(): mixed
```











***

### testNestedFormErrors



```php
public testNestedFormErrors(): mixed
```











***

### testFormErrorsWithNonFormComponents



```php
public testFormErrorsWithNonFormComponents(): mixed
```











***

### getContent



```php
protected getContent(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### getTypeHintedArrays



```php
public getTypeHintedArrays(): mixed
```











***

### testTypeHintedArraySerialization



```php
public testTypeHintedArraySerialization(array $array, string $expected, \JMS\Serializer\SerializationContext|null $context = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |
| `$expected` | **string** |  |
| `$context` | **\JMS\Serializer\SerializationContext&#124;null** |  |




***

### getFormat



```php
protected getFormat(): mixed
```











***

### hasDeserializer



```php
protected hasDeserializer(): mixed
```











***


## Inherited methods


### testSerializeNullArray



```php
public testSerializeNullArray(): mixed
```











***

### testSerializeNullArrayExcludingNulls



```php
public testSerializeNullArrayExcludingNulls(): mixed
```











***

### testSerializeNullObject



```php
public testSerializeNullObject(): mixed
```











***

### testNull



```php
public testNull(mixed $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




***

### getTypes



```php
public getTypes(): mixed
```











***

### testString



```php
public testString(): mixed
```











***

### testExpressionExclusionNotConfigured



```php
public testExpressionExclusionNotConfigured(): mixed
```











***

### testExpressionExclusionConfiguredWithDisjunctStrategy



```php
public testExpressionExclusionConfiguredWithDisjunctStrategy(): mixed
```











***

### expressionFunctionProvider



```php
public expressionFunctionProvider(): mixed
```











***

### testExpressionExclusion



```php
public testExpressionExclusion(\JMS\Serializer\Tests\Fixtures\PersonSecret|\JMS\Serializer\Tests\Fixtures\PersonSecretMore $person, \Symfony\Component\ExpressionLanguage\ExpressionFunction $function,  $json): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$person` | **\JMS\Serializer\Tests\Fixtures\PersonSecret&#124;\JMS\Serializer\Tests\Fixtures\PersonSecretMore** |  |
| `$function` | **\Symfony\Component\ExpressionLanguage\ExpressionFunction** |  |
| `$json` | **** |  |




***

### testBooleans



```php
public testBooleans(mixed $strBoolean, mixed $boolean): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strBoolean` | **mixed** |  |
| `$boolean` | **mixed** |  |




***

### getBooleans



```php
public getBooleans(): mixed
```











***

### testNumerics



```php
public testNumerics(mixed $key, mixed $value, mixed $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |
| `$type` | **mixed** |  |




***

### getNumerics



```php
public getNumerics(): mixed
```











***

### testSimpleObject



```php
public testSimpleObject(): mixed
```











***

### testArrayStrings



```php
public testArrayStrings(): mixed
```











***

### testArrayBooleans



```php
public testArrayBooleans(): mixed
```











***

### testArrayIntegers



```php
public testArrayIntegers(): mixed
```











***

### testArrayEmpty



```php
public testArrayEmpty(): mixed
```











***

### testArrayFloats



```php
public testArrayFloats(): mixed
```











***

### testArrayObjects



```php
public testArrayObjects(): mixed
```











***

### testArrayListAndMapDifference



```php
public testArrayListAndMapDifference(): mixed
```











***

### testDateTimeArrays



```php
public testDateTimeArrays(): mixed
```











***

### testNamedDateTimeArrays



```php
public testNamedDateTimeArrays(): mixed
```











***

### testNamedDateTimeImmutableArrays



```php
public testNamedDateTimeImmutableArrays(): mixed
```











***

### testArrayMixed



```php
public testArrayMixed(): mixed
```











***

### testDateTime



```php
public testDateTime(mixed $key, mixed $value, mixed $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |
| `$type` | **mixed** |  |




***

### getDateTime



```php
public getDateTime(): mixed
```











***

### testDateTimeImmutable



```php
public testDateTimeImmutable(mixed $key, mixed $value, mixed $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |
| `$type` | **mixed** |  |




***

### getDateTimeImmutable



```php
public getDateTimeImmutable(): mixed
```











***

### testTimestamp



```php
public testTimestamp(): mixed
```











***

### testDateInterval



```php
public testDateInterval(): mixed
```











***

### testBlogPost



```php
public testBlogPost(): mixed
```











***

### testDeserializingNull



```php
public testDeserializingNull(): mixed
```











***

### testExpressionAuthor



```php
public testExpressionAuthor(): mixed
```











***

### testExpressionAccessorStrategNotEnabled



```php
public testExpressionAccessorStrategNotEnabled(): mixed
```











***

### testReadOnly



```php
public testReadOnly(): mixed
```











***

### testReadOnlyClass



```php
public testReadOnlyClass(): mixed
```











***

### testPrice



```php
public testPrice(): mixed
```











***

### testOrder



```php
public testOrder(): mixed
```











***

### testCurrencyAwarePrice



```php
public testCurrencyAwarePrice(): mixed
```











***

### testOrderWithCurrencyAwarePrice



```php
public testOrderWithCurrencyAwarePrice(): mixed
```











***

### testArticle



```php
public testArticle(): mixed
```











***

### testInline



```php
public testInline(): mixed
```











***

### testInlineEmptyChild



```php
public testInlineEmptyChild(): mixed
```











***

### testEmptyChild



```php
public testEmptyChild(): mixed
```











***

### testSkipEmptyChild



```php
public testSkipEmptyChild(): mixed
```











***

### testLog



```php
public testLog(): mixed
```











***

### testCircularReference



```php
public testCircularReference(): mixed
```











***

### testLifecycleCallbacks



```php
public testLifecycleCallbacks(): mixed
```











***

### testFormErrors



```php
public testFormErrors(): mixed
```











***

### testNestedFormErrors



```php
public testNestedFormErrors(): mixed
```











***

### testFormErrorsWithNonFormComponents



```php
public testFormErrorsWithNonFormComponents(): mixed
```











***

### testConstraintViolation



```php
public testConstraintViolation(): mixed
```











***

### testConstraintViolationList



```php
public testConstraintViolationList(): mixed
```











***

### testDoctrineProxy



```php
public testDoctrineProxy(): mixed
```











***

### testInitializedDoctrineProxy



```php
public testInitializedDoctrineProxy(): mixed
```











***

### testCustomAccessor



```php
public testCustomAccessor(): mixed
```











***

### testMixedAccessTypes



```php
public testMixedAccessTypes(): mixed
```











***

### testAccessorOrder



```php
public testAccessorOrder(): mixed
```











***

### testGroups



```php
public testGroups(): mixed
```











***

### testAdvancedGroups



```php
public testAdvancedGroups(): mixed
```











***

### testInvalidGroupName



```php
public testInvalidGroupName(): mixed
```











***

### testVirtualProperty



```php
public testVirtualProperty(): mixed
```











***

### testVirtualVersions



```php
public testVirtualVersions(): mixed
```











***

### testCustomHandler



```php
public testCustomHandler(): mixed
```











***

### testInput



```php
public testInput(): mixed
```











***

### testObjectWithEmptyHash



```php
public testObjectWithEmptyHash(): mixed
```











***

### testSerializeObjectWhenNull



```php
public testSerializeObjectWhenNull(): mixed
```











***

### testPolymorphicObjectsWithGroup



```php
public testPolymorphicObjectsWithGroup(): mixed
```











***

### testPolymorphicObjects



```php
public testPolymorphicObjects(): mixed
```











***

### testNestedPolymorphicObjects



```php
public testNestedPolymorphicObjects(): mixed
```











***

### testNestedPolymorphicInterfaces



```php
public testNestedPolymorphicInterfaces(): mixed
```











***

### testPolymorphicObjectsInvalidDeserialization



```php
public testPolymorphicObjectsInvalidDeserialization(): mixed
```











***

### testDepthExclusionStrategy



```php
public testDepthExclusionStrategy(): mixed
```











***

### testMaxDepthWithSkippableObject



```php
public testMaxDepthWithSkippableObject(): mixed
```











***

### testDeserializingIntoExistingObject



```php
public testDeserializingIntoExistingObject(): mixed
```











***

### testObjectWithNullableArrays



```php
public testObjectWithNullableArrays(): mixed
```











***

### getContent



```php
protected getContent(mixed $key): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### getFormat



```php
protected getFormat(): mixed
```




* This method is **abstract**.






***

### hasDeserializer



```php
protected hasDeserializer(): mixed
```











***

### serialize



```php
protected serialize(mixed $data, \JMS\Serializer\Context $context = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### deserialize



```php
protected deserialize(mixed $content, mixed $type, \JMS\Serializer\Context $context = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$type` | **mixed** |  |
| `$context` | **\JMS\Serializer\Context** |  |




***

### setUp



```php
protected setUp(): mixed
```











***

### getField



```php
protected getField(mixed $obj, mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$name` | **mixed** |  |




***

### setField



```php
private setField(mixed $obj, mixed $name, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$name` | **mixed** |  |
| `$value` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
