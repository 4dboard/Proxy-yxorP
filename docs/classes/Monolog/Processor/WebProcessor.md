***

# WebProcessor

Injects url/method and remote IP of the current web request in all records



* Full name: `\Monolog\Processor\WebProcessor`
* This class implements:
[`\Monolog\Processor\ProcessorInterface`](./ProcessorInterface.md)



## Properties


### serverData



```php
protected array|\ArrayAccess $serverData
```






***

### extraFields

Default fields

```php
protected array $extraFields
```

Array is structured as [key in record.extra => key in $serverData]




***

## Methods


### __construct



```php
public __construct(array|\ArrayAccess $serverData = null, array|null $extraFields = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serverData` | **array&#124;\ArrayAccess** | Array or object w/ ArrayAccess that provides access to the $_SERVER data |
| `$extraFields` | **array&#124;null** | Field names and the related key inside $serverData to be added. If not provided it defaults to: url, ip, http_method, server, referrer |




***

### __invoke



```php
public __invoke(array $record): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### addExtraField



```php
public addExtraField(string $extraName, string $serverName): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extraName` | **string** |  |
| `$serverName` | **string** |  |




***

### appendExtraFields



```php
private appendExtraFields(array $extra): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extra` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
