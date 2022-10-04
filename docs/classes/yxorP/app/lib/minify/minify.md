***

# minify





* Full name: `\yxorP\lib\minify\minify`
* This class implements:
[`\yxorP\lib\minify\minfyInterface`](./minfyInterface.md)



## Properties


### processors



```php
private array $processors
```






***

## Methods


### __construct



```php
public __construct(\yxorP\lib\minify\minfyInterface $processors): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processors` | **\yxorP\lib\minify\minfyInterface** |  |




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
public addProcessor(\yxorP\lib\minify\minfyInterface $processor): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **\yxorP\lib\minify\minfyInterface** |  |




***


***

