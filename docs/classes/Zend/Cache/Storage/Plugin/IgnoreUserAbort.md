***

# IgnoreUserAbort

Abstract aggregate listener



* Full name: `\Zend\Cache\Storage\Plugin\IgnoreUserAbort`
* Parent class: [`\Zend\Cache\Storage\Plugin\AbstractPlugin`](./AbstractPlugin.md)



## Properties


### activatedTarget

The storage who activated ignore_user_abort.

```php
protected null|\Zend\Cache\Storage\StorageInterface $activatedTarget
```






***

## Methods


### attach

{@inheritDoc}

```php
public attach(\Zend\EventManager\EventManagerInterface $events, mixed $priority = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManagerInterface** |  |
| `$priority` | **mixed** |  |




***

### onBefore

Activate ignore_user_abort if not already done
and save the target who activated it.

```php
public onBefore(\Zend\Cache\Storage\Event $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\Event** |  |




***

### onAfter

Reset ignore_user_abort if it's activated and if it's the same target
who activated it.

```php
public onAfter(\Zend\Cache\Storage\Event $event): void
```

If exit_on_abort is enabled and the connection has been aborted
exit the script.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\Event** |  |




***


## Inherited methods


### setOptions

Set pattern options

```php
public setOptions(\Zend\Cache\Storage\Plugin\PluginOptions $options): \Zend\Cache\Storage\Plugin\AbstractPlugin
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Storage\Plugin\PluginOptions** |  |




***

### getOptions

Get all pattern options

```php
public getOptions(): \Zend\Cache\Storage\Plugin\PluginOptions
```











***

### detach

Detach all previously attached listeners

```php
public detach(\Zend\EventManager\EventManagerInterface $events): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$events` | **\Zend\EventManager\EventManagerInterface** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
