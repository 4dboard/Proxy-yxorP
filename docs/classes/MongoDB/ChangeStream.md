***

# ChangeStream

Iterator for a change stream.



* Full name: `\MongoDB\ChangeStream`
* This class implements:
[`\Iterator`](../Iterator.md)

**See Also:**

* \MongoDB\Collection::watch() - 
* http://docs.mongodb.org/manual/reference/command/changeStream/ - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CURSOR_NOT_FOUND`|public| |43|

## Properties


### cursorNotFound



```php
private static int $cursorNotFound
```



* This property is **static**.


***

### resumableErrorCodes



```php
private static int[] $resumableErrorCodes
```



* This property is **static**.


***

### wireVersionForResumableChangeStreamError



```php
private static int $wireVersionForResumableChangeStreamError
```



* This property is **static**.


***

### resumeCallable



```php
private callable $resumeCallable
```






***

### iterator



```php
private \MongoDB\Model\ChangeStreamIterator $iterator
```






***

### key



```php
private int $key
```






***

### hasAdvanced

Whether the change stream has advanced to its first result. This is used
to determine whether $key should be incremented after an iteration event.

```php
private bool $hasAdvanced
```






***

## Methods


### current



```php
public current(): mixed
```










**See Also:**

* http://php.net/iterator.current - 

***

### getCursorId



```php
public getCursorId(): \MongoDB\Driver\CursorId
```











***

### getResumeToken

Returns the resume token for the iterator's current position.

```php
public getResumeToken(): array|object|null
```

Null may be returned if no change documents have been iterated and the
server did not include a postBatchResumeToken in its aggregate or getMore
command response.









***

### key



```php
public key(): mixed
```










**See Also:**

* http://php.net/iterator.key - 

***

### next



```php
public next(): void
```










**See Also:**

* http://php.net/iterator.next - 

***

### rewind



```php
public rewind(): void
```










**See Also:**

* http://php.net/iterator.rewind - 

***

### valid



```php
public valid(): bool
```










**See Also:**

* http://php.net/iterator.valid - 

***

### isResumableError

Determines if an exception is a resumable error.

```php
private isResumableError(\MongoDB\Driver\Exception\RuntimeException $exception): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\MongoDB\Driver\Exception\RuntimeException** |  |



**See Also:**

* https://github.com/mongodb/specifications/blob/master/source/change-streams/change-streams.rst#resumable-error - 

***

### onIteration

Perform housekeeping after an iteration event.

```php
private onIteration(bool $incrementKey): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$incrementKey` | **bool** | Increment $key if there is a current result |




***

### resume

Recreates the ChangeStreamIterator after a resumable server error.

```php
private resume(): void
```











***

### resumeOrThrow

Either resumes after a resumable error or re-throws the exception.

```php
private resumeOrThrow(\MongoDB\Driver\Exception\RuntimeException $exception): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\MongoDB\Driver\Exception\RuntimeException** |  |




***


***
> yxorP Documentation
