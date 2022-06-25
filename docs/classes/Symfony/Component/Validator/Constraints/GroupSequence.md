***

# GroupSequence

A sequence of validation groups.

When validating a group sequence, each group will only be validated if all
of the previous groups in the sequence succeeded. For example:

    $validator->validate($address, null, new GroupSequence(array('Basic', 'Strict')));

In the first step, all constraints that belong to the group "Basic" will be
validated. If none of the constraints fail, the validator will then validate
the constraints in group "Strict". This is useful, for example, if "Strict"
contains expensive checks that require a lot of CPU or slow, external
services. You usually don't want to run expensive checks if any of the cheap
checks fail.

When adding metadata to a class, you can override the "Default" group of
that class with a group sequence:

    /**
     * @GroupSequence({"Address", "Strict"})
     *\/
    class Address
    {
        // ...
    }

Whenever you validate that object in the "Default" group, the group sequence
will be validated:

    $validator->validate($address);

If you want to execute the constraints of the "Default" group for a class
with an overridden default group, pass the class name as group name instead:

    $validator->validate($address, null, "Address")

* Full name: `\Symfony\Component\Validator\Constraints\GroupSequence`
* This class implements:
[`\ArrayAccess`](../../../../ArrayAccess.md), [`\IteratorAggregate`](../../../../IteratorAggregate.md), [`\Countable`](../../../../Countable.md)



## Properties


### groups

The groups in the sequence.

```php
public string[]|\Symfony\Component\Validator\Constraints\GroupSequence[] $groups
```






***

### cascadedGroup

The group in which cascaded objects are validated when validating
this sequence.

```php
public string|\Symfony\Component\Validator\Constraints\GroupSequence $cascadedGroup
```

By default, cascaded objects are validated in each of the groups of
the sequence.

If a class has a group sequence attached, that sequence replaces the
"Default" group. When validating that class in the "Default" group, the
group sequence is used instead, but still the "Default" group should be
cascaded to other objects.




***

## Methods


### __construct

Creates a new group sequence.

```php
public __construct(string[] $groups): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **string[]** | The groups in the sequence |




***

### getIterator

Returns an iterator for this group.

```php
public getIterator(): \Traversable
```

Implemented for backwards compatibility with Symfony < 2.5.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.




**Return Value:**

The iterator


**See Also:**

* \IteratorAggregate::getIterator() - 

***

### offsetExists

Returns whether the given offset exists in the sequence.

```php
public offsetExists(int $offset): bool
```

Implemented for backwards compatibility with Symfony < 2.5.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** | The offset |


**Return Value:**

Whether the offset exists



***

### offsetGet

Returns the group at the given offset.

```php
public offsetGet(int $offset): string
```

Implemented for backwards compatibility with Symfony < 2.5.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** | The offset |


**Return Value:**

The group a the given offset



***

### offsetSet

Sets the group at the given offset.

```php
public offsetSet(int $offset, string $value): mixed
```

Implemented for backwards compatibility with Symfony < 2.5.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** | The offset |
| `$value` | **string** | The group name |




***

### offsetUnset

Removes the group at the given offset.

```php
public offsetUnset(int $offset): mixed
```

Implemented for backwards compatibility with Symfony < 2.5.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** | The offset |




***

### count

Returns the number of groups in the sequence.

```php
public count(): int
```

Implemented for backwards compatibility with Symfony < 2.5.




* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.




**Return Value:**

The number of groups



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
