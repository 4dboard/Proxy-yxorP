***

# AbstractOperation

Base catalogues binary operation class.

A catalogue binary operation performs operation on
source (the left argument) and target (the right argument) catalogues.

* Full name: `\Symfony\Component\Translation\Catalogue\AbstractOperation`
* This class implements:
[`\Symfony\Component\Translation\Catalogue\OperationInterface`](./OperationInterface.md)
* This class is an **Abstract class**



## Properties


### source



```php
protected \Symfony\Component\Translation\MessageCatalogueInterface $source
```






***

### target



```php
protected \Symfony\Component\Translation\MessageCatalogueInterface $target
```






***

### result



```php
protected \Symfony\Component\Translation\MessageCatalogue $result
```






***

### domains



```php
private null|array $domains
```






***

### messages

This array stores 'all', 'new' and 'obsolete' messages for all valid domains.

```php
protected array $messages
```

The data structure of this array is as follows:
```php
array(
    'domain 1' => array(
        'all' => array(...),
        'new' => array(...),
        'obsolete' => array(...)
    ),
    'domain 2' => array(
        'all' => array(...),
        'new' => array(...),
        'obsolete' => array(...)
    ),
    ...
)
```




***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Translation\MessageCatalogueInterface $source, \Symfony\Component\Translation\MessageCatalogueInterface $target): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\Symfony\Component\Translation\MessageCatalogueInterface** | The source catalogue |
| `$target` | **\Symfony\Component\Translation\MessageCatalogueInterface** | The target catalogue |




***

### getDomains

Returns domains affected by operation.

```php
public getDomains(): array
```











***

### getMessages

Returns all valid messages ('all') after operation.

```php
public getMessages(mixed $domain): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### getNewMessages

Returns new messages ('new') after operation.

```php
public getNewMessages(mixed $domain): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### getObsoleteMessages

Returns obsolete messages ('obsolete') after operation.

```php
public getObsoleteMessages(mixed $domain): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |




***

### getResult

Returns resulting catalogue ('result').

```php
public getResult(): \Symfony\Component\Translation\MessageCatalogueInterface
```











***

### processDomain

Performs operation on source and target catalogues for the given domain and
stores the results.

```php
protected processDomain(string $domain): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** | The domain which the operation will be performed for |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
