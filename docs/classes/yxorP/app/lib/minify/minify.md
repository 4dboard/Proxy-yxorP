***

# minify





* Full name: `\yxorP\app\lib\minify\minify`
* This class implements:
[`\yxorP\app\lib\minify\minfyInterface`](./minfyInterface.md)



## Properties


### processors



```php
private array $processors
```






***

## Methods


### __construct



```php
public __construct(\yxorP\app\lib\minify\minfyInterface $processors): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processors` | **\yxorP\app\lib\minify\minfyInterface** |  |




***

### createDefault



```php
public static createDefault(): self
```



* This method is **static**.







***

### process



```php
public process(string $buffer): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$buffer` | **string** |  |




***

### addProcessor



```php
public addProcessor(\yxorP\app\lib\minify\minfyInterface $processor): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **\yxorP\app\lib\minify\minfyInterface** |  |




***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
