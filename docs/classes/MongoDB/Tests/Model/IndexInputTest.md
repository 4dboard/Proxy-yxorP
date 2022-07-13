***

# IndexInputTest





* Full name: `\MongoDB\Tests\Model\IndexInputTest`
* Parent class: [`\MongoDB\Tests\TestCase`](../TestCase.md)




## Methods


### testConstructorShouldRequireKey



```php
public testConstructorShouldRequireKey(): void
```











***

### testConstructorShouldRequireKeyToBeArrayOrObject



```php
public testConstructorShouldRequireKeyToBeArrayOrObject(): void
```











***

### testConstructorShouldRequireKeyFieldOrderToBeNumericOrString



```php
public testConstructorShouldRequireKeyFieldOrderToBeNumericOrString(mixed $order): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **mixed** |  |




***

### provideInvalidFieldOrderValues



```php
public provideInvalidFieldOrderValues(): mixed
```











***

### testConstructorShouldRequireNameToBeString



```php
public testConstructorShouldRequireNameToBeString(): void
```











***

### testNameGeneration



```php
public testNameGeneration(mixed $expectedName, array $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedName` | **mixed** |  |
| `$key` | **array** |  |




***

### provideExpectedNameAndKey



```php
public provideExpectedNameAndKey(): mixed
```











***

### testBsonSerialization



```php
public testBsonSerialization(): void
```











***


## Inherited methods


### getUri

Return the connection URI.

```php
public static getUri(): string
```



* This method is **static**.







***

### assertMatchesDocument

Asserts that a document has expected values for some fields.

```php
public assertMatchesDocument(array|object $expectedDocument, array|object $actualDocument): void
```

Only fields in the expected document will be checked. The actual document
may contain additional fields.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDocument` | **array&#124;object** |  |
| `$actualDocument` | **array&#124;object** |  |




***

### assertSameDocument

Asserts that a document has expected values for all fields.

```php
public assertSameDocument(array|object $expectedDocument, array|object $actualDocument): void
```

The actual document will be compared directly with the expected document
and may not contain extra fields.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDocument` | **array&#124;object** |  |
| `$actualDocument` | **array&#124;object** |  |




***

### assertSameDocuments



```php
public assertSameDocuments(array $expectedDocuments, mixed $actualDocuments): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedDocuments` | **array** |  |
| `$actualDocuments` | **mixed** |  |




***

### dataDescription

Compatibility method as PHPUnit 9 no longer includes this method.

```php
public dataDescription(): string
```











***

### provideInvalidArrayValues



```php
public provideInvalidArrayValues(): mixed
```











***

### provideInvalidDocumentValues



```php
public provideInvalidDocumentValues(): mixed
```











***

### assertDeprecated



```php
protected assertDeprecated(callable $execution): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$execution` | **callable** |  |




***

### getCollectionName

Return the test collection name.

```php
protected getCollectionName(): string
```











***

### getDatabaseName

Return the test database name.

```php
protected getDatabaseName(): string
```











***

### getInvalidArrayValues

Return a list of invalid array values.

```php
protected getInvalidArrayValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidBooleanValues

Return a list of invalid boolean values.

```php
protected getInvalidBooleanValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidDocumentValues

Return a list of invalid document values.

```php
protected getInvalidDocumentValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidIntegerValues

Return a list of invalid integer values.

```php
protected getInvalidIntegerValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidReadConcernValues

Return a list of invalid ReadPreference values.

```php
protected getInvalidReadConcernValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidReadPreferenceValues

Return a list of invalid ReadPreference values.

```php
protected getInvalidReadPreferenceValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidSessionValues

Return a list of invalid Session values.

```php
protected getInvalidSessionValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidStringValues

Return a list of invalid string values.

```php
protected getInvalidStringValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getInvalidWriteConcernValues

Return a list of invalid WriteConcern values.

```php
protected getInvalidWriteConcernValues(bool $includeNull = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeNull` | **bool** |  |




***

### getNamespace

Return the test namespace.

```php
protected getNamespace(): string
```











***

### wrapValuesForDataProvider

Wrap a list of values for use as a single-argument data provider.

```php
protected wrapValuesForDataProvider(array $values): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** | List of values |




***

### normalizeBSON

Normalizes a BSON document or array for use with assertEquals().

```php
private normalizeBSON(array|object $bson): \MongoDB\Model\BSONDocument|\MongoDB\Model\BSONArray
```

The argument will be converted to a BSONArray or BSONDocument based on
its type and keys. Document fields will be sorted alphabetically. Each
value within the array or document will then be normalized recursively.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bson` | **array&#124;object** |  |




***


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
