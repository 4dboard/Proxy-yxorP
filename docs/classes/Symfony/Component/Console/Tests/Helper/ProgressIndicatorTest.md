***

# ProgressIndicatorTest





* Full name: `\Symfony\Component\Console\Tests\Helper\ProgressIndicatorTest`
* Parent class: [`TestCase`](../../../../../PHPUnit/Framework/TestCase.md)




## Methods


### testDefaultIndicator



```php
public testDefaultIndicator(): mixed
```











***

### testNonDecoratedOutput



```php
public testNonDecoratedOutput(): mixed
```











***

### testCustomIndicatorValues



```php
public testCustomIndicatorValues(): mixed
```











***

### testCannotSetInvalidIndicatorCharacters



```php
public testCannotSetInvalidIndicatorCharacters(): mixed
```











***

### testCannotStartAlreadyStartedIndicator



```php
public testCannotStartAlreadyStartedIndicator(): mixed
```











***

### testCannotAdvanceUnstartedIndicator



```php
public testCannotAdvanceUnstartedIndicator(): mixed
```











***

### testCannotFinishUnstartedIndicator



```php
public testCannotFinishUnstartedIndicator(): mixed
```











***

### testFormats



```php
public testFormats(mixed $format): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **mixed** |  |




***

### provideFormat

Provides each defined format.

```php
public provideFormat(): array
```











***

### getOutputStream



```php
protected getOutputStream(mixed $decorated = true, mixed $verbosity = StreamOutput::VERBOSITY_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **mixed** |  |
| `$verbosity` | **mixed** |  |




***

### generateOutput



```php
protected generateOutput(mixed $expected): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
