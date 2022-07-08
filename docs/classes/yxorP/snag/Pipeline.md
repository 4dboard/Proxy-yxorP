***

# Pipeline





* Full name: `\yxorP\snag\Pipeline`



## Properties


### pipes



```php
private array $pipes
```






***

## Methods


### __construct



```php
public __construct(array $pipes = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pipes` | **array** |  |




***

### pipe



```php
public pipe(callable $pipe): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pipe` | **callable** |  |




***

### insertBefore



```php
public insertBefore(callable $pipe, mixed $beforeClass): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pipe` | **callable** |  |
| `$beforeClass` | **mixed** |  |




***

### execute



```php
public execute(mixed $passable, callable $destination): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$passable` | **mixed** |  |
| `$destination` | **callable** |  |




***

### getSlice



```php
protected getSlice(): \Closure
```











***


***

