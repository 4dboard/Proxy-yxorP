***

# LazyOption





* Full name: `\PhpOption\LazyOption`
* Parent class: [`Option`](./Option.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### callback



```php
private $callback
```






***

### arguments



```php
private array&lt;int,mixed&gt; $arguments
```






***

### option



```php
private \PhpOption\Option&lt;\PhpOption\T&gt;|null $option
```






***

## Methods


### create



```php
public static create(mixed $callback, array&lt;int,mixed&gt; $arguments = []): \PhpOption\LazyOption&lt;\PhpOption\S&gt;
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **mixed** |  |
| `$arguments` | **array<int,mixed>** |  |




***

### __construct



```php
public __construct(mixed $callback, array&lt;int,mixed&gt; $arguments = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **mixed** |  |
| `$arguments` | **array<int,mixed>** |  |




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
public getIterator(): \Traversable&lt;\PhpOption\T&gt;
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

### option



```php
private option(): \PhpOption\Option&lt;\PhpOption\T&gt;
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
