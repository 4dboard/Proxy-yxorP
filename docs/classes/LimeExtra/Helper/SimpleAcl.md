***

# SimpleAcl

Class SimpleAcl



* Full name: `\LimeExtra\Helper\SimpleAcl`



## Properties


### resources



```php
protected $resources
```






***

### groups



```php
protected $groups
```






***

### rights



```php
protected $rights
```






***

### vars



```php
protected $vars
```






***

## Methods


### isSuperAdmin



```php
public isSuperAdmin( $group): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **** |  |




***

### addResource



```php
public addResource( $resource, array $actions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **** |  |
| `$actions` | **array** |  |




***

### addGroup



```php
public addGroup( $name, bool|false $isSuperAdmin = false, mixed $vars = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |
| `$isSuperAdmin` | **bool&#124;false** |  |
| `$vars` | **mixed** |  |




***

### hasGroup



```php
public hasGroup( $group): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **** |  |




***

### getGroups



```php
public getGroups(): array
```











***

### getResources



```php
public getResources(): array
```











***

### getVars



```php
public getVars(mixed $group): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **mixed** |  |




***

### getVar



```php
public getVar(mixed $group, mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **mixed** |  |
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### allow



```php
public allow( $group,  $resource, array $actions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **** |  |
| `$resource` | **** |  |
| `$actions` | **array** |  |




***

### deny



```php
public deny( $group,  $resource, array $actions = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **** |  |
| `$resource` | **** |  |
| `$actions` | **array** |  |




***

### getGroupRights



```php
public getGroupRights( $group,  $resource): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$group` | **** |  |
| `$resource` | **** |  |




***

### hasaccess



```php
public hasaccess( $groups,  $resource,  $actions): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$groups` | **** |  |
| `$resource` | **** |  |
| `$actions` | **** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
