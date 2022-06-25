***

# TranslationDataCollector





* Full name: `\Symfony\Component\Translation\DataCollector\TranslationDataCollector`
* Parent class: [`DataCollector`](../../HttpKernel/DataCollector/DataCollector.md)
* This class implements:
[`\Symfony\Component\HttpKernel\DataCollector\LateDataCollectorInterface`](../../HttpKernel/DataCollector/LateDataCollectorInterface.md)



## Properties


### translator



```php
private \Symfony\Component\Translation\DataCollectorTranslator $translator
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Translation\DataCollectorTranslator $translator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\Symfony\Component\Translation\DataCollectorTranslator** |  |




***

### lateCollect

{@inheritdoc}

```php
public lateCollect(): mixed
```











***

### collect

{@inheritdoc}

```php
public collect(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response, \Exception $exception = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Symfony\Component\HttpFoundation\Request** |  |
| `$response` | **\Symfony\Component\HttpFoundation\Response** |  |
| `$exception` | **\Exception** |  |




***

### getMessages



```php
public getMessages(): array
```











***

### getCountMissings



```php
public getCountMissings(): int
```











***

### getCountFallbacks



```php
public getCountFallbacks(): int
```











***

### getCountDefines



```php
public getCountDefines(): int
```











***

### getName

{@inheritdoc}

```php
public getName(): mixed
```











***

### sanitizeCollectedMessages



```php
private sanitizeCollectedMessages(mixed $messages): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** |  |




***

### computeCount



```php
private computeCount(mixed $messages): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** |  |




***

### sanitizeString



```php
private sanitizeString(mixed $string, mixed $length = 80): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |
| `$length` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
