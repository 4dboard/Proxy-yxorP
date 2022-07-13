***

# BulkWriteTest

Base class for Operation unit tests.



* Full name: `\MongoDB\Tests\Operation\BulkWriteTest`
* Parent class: [`\MongoDB\Tests\Operation\TestCase`](./TestCase.md)




## Methods


### testOperationsMustNotBeEmpty



```php
public testOperationsMustNotBeEmpty(): void
```











***

### testOperationsMustBeAList



```php
public testOperationsMustBeAList(): void
```











***

### testMultipleOperationsInOneElement



```php
public testMultipleOperationsInOneElement(): void
```











***

### testUnknownOperation



```php
public testUnknownOperation(): void
```











***

### testInsertOneDocumentArgumentMissing



```php
public testInsertOneDocumentArgumentMissing(): void
```











***

### testInsertOneDocumentArgumentTypeCheck



```php
public testInsertOneDocumentArgumentTypeCheck(mixed $document): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **mixed** |  |




***

### testDeleteManyFilterArgumentMissing



```php
public testDeleteManyFilterArgumentMissing(): void
```











***

### testDeleteManyFilterArgumentTypeCheck



```php
public testDeleteManyFilterArgumentTypeCheck(mixed $document): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **mixed** |  |




***

### testDeleteManyCollationOptionTypeCheck



```php
public testDeleteManyCollationOptionTypeCheck(mixed $collation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collation` | **mixed** |  |




***

### provideInvalidDocumentValues



```php
public provideInvalidDocumentValues(): mixed
```











***

### testDeleteOneFilterArgumentMissing



```php
public testDeleteOneFilterArgumentMissing(): void
```











***

### testDeleteOneFilterArgumentTypeCheck



```php
public testDeleteOneFilterArgumentTypeCheck(mixed $document): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **mixed** |  |




***

### testDeleteOneCollationOptionTypeCheck



```php
public testDeleteOneCollationOptionTypeCheck(mixed $collation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collation` | **mixed** |  |




***

### testReplaceOneFilterArgumentMissing



```php
public testReplaceOneFilterArgumentMissing(): void
```











***

### testReplaceOneFilterArgumentTypeCheck



```php
public testReplaceOneFilterArgumentTypeCheck(mixed $filter): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **mixed** |  |




***

### testReplaceOneReplacementArgumentMissing



```php
public testReplaceOneReplacementArgumentMissing(): void
```











***

### testReplaceOneReplacementArgumentTypeCheck



```php
public testReplaceOneReplacementArgumentTypeCheck(mixed $replacement): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$replacement` | **mixed** |  |




***

### testReplaceOneReplacementArgumentRequiresNoOperators



```php
public testReplaceOneReplacementArgumentRequiresNoOperators(): void
```











***

### testReplaceOneCollationOptionTypeCheck



```php
public testReplaceOneCollationOptionTypeCheck(mixed $collation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collation` | **mixed** |  |




***

### testReplaceOneUpsertOptionTypeCheck



```php
public testReplaceOneUpsertOptionTypeCheck(mixed $upsert): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$upsert` | **mixed** |  |




***

### provideInvalidBooleanValues



```php
public provideInvalidBooleanValues(): mixed
```











***

### testUpdateManyFilterArgumentMissing



```php
public testUpdateManyFilterArgumentMissing(): void
```











***

### testUpdateManyFilterArgumentTypeCheck



```php
public testUpdateManyFilterArgumentTypeCheck(mixed $filter): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **mixed** |  |




***

### testUpdateManyUpdateArgumentMissing



```php
public testUpdateManyUpdateArgumentMissing(): void
```











***

### testUpdateManyUpdateArgumentTypeCheck



```php
public testUpdateManyUpdateArgumentTypeCheck(mixed $update): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$update` | **mixed** |  |




***

### testUpdateManyUpdateArgumentRequiresOperatorsOrPipeline



```php
public testUpdateManyUpdateArgumentRequiresOperatorsOrPipeline(): void
```











***

### testUpdateManyArrayFiltersOptionTypeCheck



```php
public testUpdateManyArrayFiltersOptionTypeCheck(mixed $arrayFilters): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arrayFilters` | **mixed** |  |




***

### testUpdateManyCollationOptionTypeCheck



```php
public testUpdateManyCollationOptionTypeCheck(mixed $collation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collation` | **mixed** |  |




***

### testUpdateManyUpsertOptionTypeCheck



```php
public testUpdateManyUpsertOptionTypeCheck(mixed $upsert): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$upsert` | **mixed** |  |




***

### testUpdateOneFilterArgumentMissing



```php
public testUpdateOneFilterArgumentMissing(): void
```











***

### testUpdateOneFilterArgumentTypeCheck



```php
public testUpdateOneFilterArgumentTypeCheck(mixed $filter): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **mixed** |  |




***

### testUpdateOneUpdateArgumentMissing



```php
public testUpdateOneUpdateArgumentMissing(): void
```











***

### testUpdateOneUpdateArgumentTypeCheck



```php
public testUpdateOneUpdateArgumentTypeCheck(mixed $update): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$update` | **mixed** |  |




***

### testUpdateOneUpdateArgumentRequiresOperatorsOrPipeline



```php
public testUpdateOneUpdateArgumentRequiresOperatorsOrPipeline(): void
```











***

### testUpdateOneArrayFiltersOptionTypeCheck



```php
public testUpdateOneArrayFiltersOptionTypeCheck(mixed $arrayFilters): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arrayFilters` | **mixed** |  |




***

### testUpdateOneCollationOptionTypeCheck



```php
public testUpdateOneCollationOptionTypeCheck(mixed $collation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collation` | **mixed** |  |




***

### testUpdateOneUpsertOptionTypeCheck



```php
public testUpdateOneUpsertOptionTypeCheck(mixed $upsert): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$upsert` | **mixed** |  |




***

### testConstructorOptionTypeChecks



```php
public testConstructorOptionTypeChecks(array $options): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### provideInvalidConstructorOptions



```php
public provideInvalidConstructorOptions(): mixed
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
