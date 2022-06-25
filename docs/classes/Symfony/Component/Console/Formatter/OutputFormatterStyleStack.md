***

# OutputFormatterStyleStack





* Full name: `\Symfony\Component\Console\Formatter\OutputFormatterStyleStack`



## Properties


### styles



```php
private \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface[] $styles
```






***

### emptyStyle



```php
private $emptyStyle
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface $emptyStyle = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$emptyStyle` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface** |  |




***

### reset

Resets stack (ie. empty internal arrays).

```php
public reset(): mixed
```











***

### push

Pushes a style in the stack.

```php
public push(\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface $style): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$style` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface** |  |




***

### pop

Pops a style from the stack.

```php
public pop(\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface $style = null): \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$style` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface** |  |




***

### getCurrent

Computes current style with stacks top codes.

```php
public getCurrent(): \Symfony\Component\Console\Formatter\OutputFormatterStyle
```











***

### setEmptyStyle



```php
public setEmptyStyle(\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface $emptyStyle): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$emptyStyle` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface** |  |




***

### getEmptyStyle



```php
public getEmptyStyle(): \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
