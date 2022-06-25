***

# MacroData





* Full name: `\PhpDocumentorMarkdown\Test\Twig\Macro\MacroData`
* This class implements:
[`\JsonSerializable`](../../../../JsonSerializable.md)



## Properties


### key



```php
protected string $key
```






***

### input



```php
protected mixed $input
```






***

### output



```php
protected mixed|null $output
```






***

## Methods


### __construct



```php
public __construct(string $key, mixed $input, mixed $output = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$input` | **mixed** |  |
| `$output` | **mixed** |  |




***

### setOutput



```php
public setOutput(mixed $output): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **mixed** |  |




***

### getKey



```php
public getKey(): string
```











***

### getInput



```php
public getInput(): mixed
```











***

### getOutput



```php
public getOutput(): mixed|null
```











***

### fromJson

Creates a new instance of this class from parsed json.

```php
public static fromJson(\stdClass|array $data): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\stdClass&#124;array** |  |




***

### jsonSerialize



```php
public jsonSerialize(): array
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
