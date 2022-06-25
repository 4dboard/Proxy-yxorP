***

# ConstraintViolationList

Default implementation of {@ConstraintViolationListInterface}.



* Full name: `\Symfony\Component\Validator\ConstraintViolationList`
* This class implements:
[`\IteratorAggregate`](../../../IteratorAggregate.md), [`\Symfony\Component\Validator\ConstraintViolationListInterface`](./ConstraintViolationListInterface.md)



## Properties


### violations



```php
private \Symfony\Component\Validator\ConstraintViolationInterface[] $violations
```






***

## Methods


### __construct

Creates a new constraint violation list.

```php
public __construct(\Symfony\Component\Validator\ConstraintViolationInterface[] $violations = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$violations` | **\Symfony\Component\Validator\ConstraintViolationInterface[]** | The constraint violations to add to the list |




***

### __toString

Converts the violation into a string for debugging purposes.

```php
public __toString(): string
```









**Return Value:**

The violation as string



***

### add

Adds a constraint violation to this list.

```php
public add(\Symfony\Component\Validator\ConstraintViolationInterface $violation): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$violation` | **\Symfony\Component\Validator\ConstraintViolationInterface** |  |




***

### addAll

Merges an existing violation list into this list.

```php
public addAll(\Symfony\Component\Validator\ConstraintViolationListInterface $otherList): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$otherList` | **\Symfony\Component\Validator\ConstraintViolationListInterface** |  |




***

### get

Returns the violation at a given offset.

```php
public get(mixed $offset): \Symfony\Component\Validator\ConstraintViolationInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | The offset of the violation |


**Return Value:**

The violation



***

### has

Returns whether the given offset exists.

```php
public has(mixed $offset): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | The violation offset |


**Return Value:**

Whether the offset exists



***

### set

Sets a violation at a given offset.

```php
public set(mixed $offset, \Symfony\Component\Validator\ConstraintViolationInterface $violation): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | The violation offset |
| `$violation` | **\Symfony\Component\Validator\ConstraintViolationInterface** | The violation |




***

### remove

Removes a violation at a given offset.

```php
public remove(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | The offset to remove |




***

### getIterator

{@inheritdoc}

```php
public getIterator(): \ArrayIterator|\Symfony\Component\Validator\ConstraintViolationInterface[]
```











***

### count

{@inheritdoc}

```php
public count(): mixed
```











***

### offsetExists

{@inheritdoc}

```php
public offsetExists(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |




***

### offsetGet

{@inheritdoc}

```php
public offsetGet(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |




***

### offsetSet

{@inheritdoc}

```php
public offsetSet(mixed $offset, mixed $violation): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |
| `$violation` | **mixed** |  |




***

### offsetUnset

{@inheritdoc}

```php
public offsetUnset(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
