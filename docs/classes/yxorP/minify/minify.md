***

# minify





* Full name: `\yxorP\minify\minify`
* This class implements:
[`\yxorP\minify\minfyInterface`](./minfyInterface.md)



## Properties


### processors



```php
private array $processors
```






***

## Methods


### __construct



```php
public __construct(\yxorP\minify\minfyInterface $processors): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processors` | **\yxorP\minify\minfyInterface** |  |




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
public addProcessor(\yxorP\minify\minfyInterface $processor): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **\yxorP\minify\minfyInterface** |  |




***


***
> yxorP Documentation
