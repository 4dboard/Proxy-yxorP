***

# Serializer

Abstract aggregate listener



* Full name: `\Zend\Cache\Storage\Plugin\Serializer`
* Parent class: [`\Zend\Cache\Storage\Plugin\AbstractPlugin`](./AbstractPlugin.md)



## Properties


### capabilities



```php
protected array $capabilities
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

### onReadItemPost

On read item post

```php
public onReadItemPost(\Zend\Cache\Storage\PostEvent $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\PostEvent** |  |




***

### onReadItemsPost

On read items post

```php
public onReadItemsPost(\Zend\Cache\Storage\PostEvent $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\PostEvent** |  |




***

### onWriteItemPre

On write item pre

```php
public onWriteItemPre(\Zend\Cache\Storage\Event $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\Event** |  |




***

### onWriteItemsPre

On write items pre

```php
public onWriteItemsPre(\Zend\Cache\Storage\Event $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\Event** |  |




***

### onIncrementItemPre

On increment item pre

```php
public onIncrementItemPre(\Zend\Cache\Storage\Event $event): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\Event** |  |




***

### onIncrementItemsPre

On increment items pre

```php
public onIncrementItemsPre(\Zend\Cache\Storage\Event $event): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\Event** |  |




***

### onDecrementItemPre

On decrement item pre

```php
public onDecrementItemPre(\Zend\Cache\Storage\Event $event): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\Event** |  |




***

### onDecrementItemsPre

On decrement items pre

```php
public onDecrementItemsPre(\Zend\Cache\Storage\Event $event): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\Event** |  |




***

### onGetCapabilitiesPost

On get capabilities

```php
public onGetCapabilitiesPost(\Zend\Cache\Storage\PostEvent $event): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Zend\Cache\Storage\PostEvent** |  |




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
