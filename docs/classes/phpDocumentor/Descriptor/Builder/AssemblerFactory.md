***

# AssemblerFactory

Attempts to retrieve an Assembler for the provided criteria.



* Full name: `\phpDocumentor\Descriptor\Builder\AssemblerFactory`



## Properties


### assemblers



```php
protected array $assemblers
```






***

### fallbackAssemblers



```php
protected $fallbackAssemblers
```






***

## Methods


### register

Registers an assembler instance to this factory.

```php
public register(callable $matcher, \phpDocumentor\Descriptor\Builder\AssemblerInterface $assembler): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matcher` | **callable** | A callback function accepting the criteria as only parameter and which must<br />return a boolean. |
| `$assembler` | **\phpDocumentor\Descriptor\Builder\AssemblerInterface** | An instance of the Assembler that will be returned if the callback returns<br />true with the provided criteria. |




***

### registerFallback

Registers an assembler instance to this factory that is to be executed after all other assemblers have been
checked.

```php
public registerFallback(callable $matcher, \phpDocumentor\Descriptor\Builder\AssemblerInterface $assembler): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matcher` | **callable** | A callback function accepting the criteria as only parameter and which must<br />return a boolean. |
| `$assembler` | **\phpDocumentor\Descriptor\Builder\AssemblerInterface** | An instance of the Assembler that will be returned if the callback returns<br />true with the provided criteria. |




***

### get

Retrieves a matching Assembler based on the provided criteria or null if none was found.

```php
public get(mixed $criteria): \phpDocumentor\Descriptor\Builder\AssemblerInterface|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$criteria` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
