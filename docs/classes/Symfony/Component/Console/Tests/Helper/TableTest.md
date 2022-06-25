***

# TableTest





* Full name: `\Symfony\Component\Console\Tests\Helper\TableTest`
* Parent class: [`TestCase`](../../../../../PHPUnit/Framework/TestCase.md)



## Properties


### stream



```php
protected $stream
```






***

## Methods


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

### testRender



```php
public testRender(mixed $headers, mixed $rows, mixed $style, mixed $expected, mixed $decorated = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **mixed** |  |
| `$rows` | **mixed** |  |
| `$style` | **mixed** |  |
| `$expected` | **mixed** |  |
| `$decorated` | **mixed** |  |




***

### testRenderAddRows



```php
public testRenderAddRows(mixed $headers, mixed $rows, mixed $style, mixed $expected, mixed $decorated = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **mixed** |  |
| `$rows` | **mixed** |  |
| `$style` | **mixed** |  |
| `$expected` | **mixed** |  |
| `$decorated` | **mixed** |  |




***

### testRenderAddRowsOneByOne



```php
public testRenderAddRowsOneByOne(mixed $headers, mixed $rows, mixed $style, mixed $expected, mixed $decorated = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **mixed** |  |
| `$rows` | **mixed** |  |
| `$style` | **mixed** |  |
| `$expected` | **mixed** |  |
| `$decorated` | **mixed** |  |




***

### renderProvider



```php
public renderProvider(): mixed
```











***

### testRenderMultiByte



```php
public testRenderMultiByte(): mixed
```











***

### testTableCellWithNumericIntValue



```php
public testTableCellWithNumericIntValue(): mixed
```











***

### testTableCellWithNumericFloatValue



```php
public testTableCellWithNumericFloatValue(): mixed
```











***

### testStyle



```php
public testStyle(): mixed
```











***

### testRowSeparator



```php
public testRowSeparator(): mixed
```











***

### testRenderMultiCalls



```php
public testRenderMultiCalls(): mixed
```











***

### testColumnStyle



```php
public testColumnStyle(): mixed
```











***

### testIsNotDefinedStyleException



```php
public testIsNotDefinedStyleException(): mixed
```











***

### testGetStyleDefinition



```php
public testGetStyleDefinition(): mixed
```











***

### testBoxedStyleWithColspan



```php
public testBoxedStyleWithColspan(): mixed
```











***

### getOutputStream



```php
protected getOutputStream(mixed $decorated = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **mixed** |  |




***

### getOutputContent



```php
protected getOutputContent(\Symfony\Component\Console\Output\StreamOutput $output): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\StreamOutput** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
