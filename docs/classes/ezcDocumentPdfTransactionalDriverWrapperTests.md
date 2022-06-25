***

# ezcDocumentPdfTransactionalDriverWrapperTests

Test suite for class.



* Full name: `\ezcDocumentPdfTransactionalDriverWrapperTests`
* Parent class: [`\ezcDocumentPdfTestCase`](./ezcDocumentPdfTestCase.md)



## Properties


### driver



```php
protected $driver
```






***

### mock



```php
protected $mock
```






***

## Methods


### suite



```php
public static suite(): mixed
```



* This method is **static**.







***

### setUp



```php
protected setUp(): void
```











***

### tearDown



```php
protected tearDown(): void
```











***

### testNoIssuedWriteCallsToBackend



```php
public testNoIssuedWriteCallsToBackend(): mixed
```











***

### testPassReadCallsToBackend



```php
public testPassReadCallsToBackend(): mixed
```











***

### testPassCombinedReadWriteCallToBackend



```php
public testPassCombinedReadWriteCallToBackend(): mixed
```











***

### testCommitSingleTransaction



```php
public testCommitSingleTransaction(): mixed
```











***

### testImplicitCommitMultipleTransactions



```php
public testImplicitCommitMultipleTransactions(): mixed
```











***

### testCommitAll



```php
public testCommitAll(): mixed
```











***

### testCommitUnknownTransaction



```php
public testCommitUnknownTransaction(): mixed
```











***

### testRevertTransactions



```php
public testRevertTransactions(): mixed
```











***

### testPartialRevertTransactions



```php
public testPartialRevertTransactions(): mixed
```











***

### testRevertMultipleTransactions



```php
public testRevertMultipleTransactions(): mixed
```











***

### testAutoCommitOnSave



```php
public testAutoCommitOnSave(): mixed
```











***

### testCreatePageCall



```php
public testCreatePageCall(): mixed
```











***

### testSetTextFormattingCall



```php
public testSetTextFormattingCall(): mixed
```











***

### testCalculateWordWidthCall



```php
public testCalculateWordWidthCall(): mixed
```











***

### testGetLineHeightCall



```php
public testGetLineHeightCall(): mixed
```











***

### testPageLevelTransactions1



```php
public testPageLevelTransactions1(): mixed
```











***

### testPageLevelTransactions2



```php
public testPageLevelTransactions2(): mixed
```











***

### testPageLevelTransactions3



```php
public testPageLevelTransactions3(): mixed
```











***

### testPageLevelTransactions4



```php
public testPageLevelTransactions4(): mixed
```











***

### testPageLevelTransactionsGoBack1



```php
public testPageLevelTransactionsGoBack1(): mixed
```











***

### testPageLevelTransactionsGoBack2



```php
public testPageLevelTransactionsGoBack2(): mixed
```











***


## Inherited methods


### setUp



```php
protected setUp(): void
```











***

### tearDown



```php
protected tearDown(): void
```











***

### assertPdfDocumentsSimilar

Assert that the given PDF document content is simlar to the
PDF document referenced by its test case name.

```php
protected assertPdfDocumentsSimilar(string $content, string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |
| `$name` | **string** |  |




***

### renderFullDocument

Test rendering of a full document

```php
protected renderFullDocument(string $file, string $fileName, array $styles = array()): void
```

Test the rendering of a given full document with an
additional set of user configured styles.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |
| `$fileName` | **string** |  |
| `$styles` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
