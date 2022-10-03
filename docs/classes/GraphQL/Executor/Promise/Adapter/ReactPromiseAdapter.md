***

# ReactPromiseAdapter





* Full name: `\GraphQL\Executor\Promise\Adapter\ReactPromiseAdapter`
* This class implements:
[`\GraphQL\Executor\Promise\PromiseAdapter`](../PromiseAdapter.md)




## Methods


### isThenable

Return true if the value is a promise or a deferred of the underlying platform

```php
public isThenable(mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### convertThenable

Converts thenable of the underlying platform into GraphQL\Executor\Promise\Promise instance

```php
public convertThenable(mixed $thenable): \GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$thenable` | **mixed** |  |




***

### then

Accepts our Promise wrapper, extracts adopted promise out of it and executes actual `then` logic described
in Promises/A+ specs. Then returns new wrapped instance of GraphQL\Executor\Promise\Promise.

```php
public then(\GraphQL\Executor\Promise\Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null): \GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promise` | **\GraphQL\Executor\Promise\Promise** |  |
| `$onFulfilled` | **?callable** |  |
| `$onRejected` | **?callable** |  |




***

### create

Creates a Promise

```php
public create(callable $resolver): \GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resolver` | **callable** |  |




***

### createFulfilled

Creates a fulfilled Promise for a value if the value is not a promise.

```php
public createFulfilled(mixed $value = null): \GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### createRejected

Creates a rejected promise for a reason if the reason is not a promise. If
the provided reason is a promise, then it is returned as-is.

```php
public createRejected(mixed $reason): \GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** |  |




***

### all

Given an array of promises (or values), returns a promise that is fulfilled when all the
items in the array are fulfilled.

```php
public all(array $promisesOrValues): \GraphQL\Executor\Promise\Promise
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promisesOrValues` | **array** | Promises or values. |




***


***

