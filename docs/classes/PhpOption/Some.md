***

# Some





* Full name: `\PhpOption\Some`
* Parent class: [`Option`](./Option.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### value



```php
private \PhpOption\T $value
```






***

## Methods


### __construct



```php
public __construct(\PhpOption\T $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\PhpOption\T** |  |




***

### create



```php
public static create(\PhpOption\U $value): \PhpOption\Some&lt;\PhpOption\U&gt;
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\PhpOption\U** |  |




***

### isDefined



```php
public isDefined(): bool
```











***

### isEmpty



```php
public isEmpty(): bool
```











***

### get



```php
public get(): mixed
```











***

### getOrElse



```php
public getOrElse(mixed $default): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **mixed** |  |




***

### getOrCall



```php
public getOrCall(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### getOrThrow



```php
public getOrThrow(\Exception $ex): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ex` | **\Exception** |  |




***

### orElse



```php
public orElse(\PhpOption\Option $else): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$else` | **\PhpOption\Option** |  |




***

### ifDefined



```php
public ifDefined(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### forAll



```php
public forAll(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### map



```php
public map(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### flatMap



```php
public flatMap(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### filter



```php
public filter(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### filterNot



```php
public filterNot(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### select



```php
public select(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### reject



```php
public reject(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getIterator



```php
public getIterator(): \ArrayIterator&lt;int,\PhpOption\T&gt;
```











***

### foldLeft



```php
public foldLeft(mixed $initialValue, mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initialValue` | **mixed** |  |
| `$callable` | **mixed** |  |




***

### foldRight



```php
public foldRight(mixed $initialValue, mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initialValue` | **mixed** |  |
| `$callable` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
