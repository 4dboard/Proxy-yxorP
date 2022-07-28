***

# FactoryCommandLoader

A simple command loader using factories to instantiate commands lazily.



* Full name: `\Symfony\Component\Console\CommandLoader\FactoryCommandLoader`
* This class implements:
[`\Symfony\Component\Console\CommandLoader\CommandLoaderInterface`](./CommandLoaderInterface.md)



## Properties


### factories



```php
private $factories
```






***

## Methods


### __construct



```php
public __construct(callable[] $factories): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factories` | **callable[]** | Indexed by command names |




***

### has

Checks if a command exists.

```php
public has(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### get

Loads a command.

```php
public get(string $name): \Symfony\Component\Console\Command\Command
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getNames



```php
public getNames(): string[]
```











***


***

