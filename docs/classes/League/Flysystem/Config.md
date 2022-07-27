***

# Config





* Full name: `\League\Flysystem\Config`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`OPTION_VISIBILITY`|public| |&#039;visibility&#039;|
|`OPTION_DIRECTORY_VISIBILITY`|public| |&#039;directory_visibility&#039;|

## Properties


### options



```php
private array $options
```






***

## Methods


### __construct



```php
public __construct(array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### get



```php
public get(string $property, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** |  |
| `$default` | **mixed** |  |




***

### extend



```php
public extend(array $options): \League\Flysystem\Config
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### withDefaults



```php
public withDefaults(array $defaults): \League\Flysystem\Config
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaults` | **array** |  |




***


***

