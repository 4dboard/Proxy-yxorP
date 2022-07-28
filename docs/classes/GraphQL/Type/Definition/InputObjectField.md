***

# InputObjectField





* Full name: `\GraphQL\Type\Definition\InputObjectField`



## Properties


### name



```php
public string $name
```






***

### defaultValue



```php
public mixed|null $defaultValue
```






***

### description



```php
public string|null $description
```






***

### type



```php
private \GraphQL\Type\Definition\Type&amp;\GraphQL\Type\Definition\InputType $type
```






***

### astNode



```php
public \GraphQL\Language\AST\InputValueDefinitionNode|null $astNode
```






***

### config



```php
public array $config
```






***

## Methods


### __construct



```php
public __construct(array $opts): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$opts` | **array** |  |




***

### __isset



```php
public __isset(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### __get



```php
public __get(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### __set



```php
public __set(string $name, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |




***

### getType



```php
public getType(): \GraphQL\Type\Definition\Type&amp;\GraphQL\Type\Definition\InputType
```











***

### defaultValueExists



```php
public defaultValueExists(): bool
```











***

### isRequired



```php
public isRequired(): bool
```











***

### assertValid



```php
public assertValid(\GraphQL\Type\Definition\Type $parentType): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentType` | **\GraphQL\Type\Definition\Type** |  |




***


***

