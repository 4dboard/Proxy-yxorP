***

# None





* Full name: `\PhpOption\None`
* Parent class: [`Option`](./Option.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### instance



```php
private static \PhpOption\None|null $instance
```



* This property is **static**.


***

## Methods


### create



```php
public static create(): \PhpOption\None
```



* This method is **static**.







***

### get



```php
public get(): mixed
```











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

### getOrElse



```php
public getOrElse(mixed $default): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **mixed** |  |




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

### isEmpty



```php
public isEmpty(): bool
```











***

### isDefined



```php
public isDefined(): bool
```











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
public getIterator(): \EmptyIterator
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

### __construct



```php
private __construct(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
