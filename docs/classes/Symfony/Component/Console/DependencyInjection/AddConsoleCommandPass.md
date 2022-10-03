***

# AddConsoleCommandPass

Registers console commands.



* Full name: `\Symfony\Component\Console\DependencyInjection\AddConsoleCommandPass`
* This class implements:
[`\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface`](../../DependencyInjection/Compiler/CompilerPassInterface.md)



## Properties


### commandLoaderServiceId



```php
private $commandLoaderServiceId
```






***

### commandTag



```php
private $commandTag
```






***

### noPreloadTag



```php
private $noPreloadTag
```






***

### privateTagName



```php
private $privateTagName
```






***

## Methods


### __construct



```php
public __construct(string $commandLoaderServiceId = &#039;console.command_loader&#039;, string $commandTag = &#039;console.command&#039;, string $noPreloadTag = &#039;container.no_preload&#039;, string $privateTagName = &#039;container.private&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commandLoaderServiceId` | **string** |  |
| `$commandTag` | **string** |  |
| `$noPreloadTag` | **string** |  |
| `$privateTagName` | **string** |  |




***

### process



```php
public process(\Symfony\Component\DependencyInjection\ContainerBuilder $container): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Symfony\Component\DependencyInjection\ContainerBuilder** |  |




***


***

