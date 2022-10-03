***

# ValidationRule





* Full name: `\GraphQL\Validator\Rules\ValidationRule`
* This class is an **Abstract class**



## Properties


### name



```php
protected string $name
```






***

## Methods


### getName



```php
public getName(): mixed
```











***

### __invoke



```php
public __invoke(\GraphQL\Validator\ValidationContext $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |




***

### getVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getVisitor(\GraphQL\Validator\ValidationContext $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |



**See Also:**

* \GraphQL\Language\Visitor - 

***

### getSDLVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\SDLValidationContext** |  |



**See Also:**

* \GraphQL\Language\Visitor - 

***


***

