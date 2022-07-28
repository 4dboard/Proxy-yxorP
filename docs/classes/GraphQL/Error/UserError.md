***

# UserError

Error caused by actions of GraphQL clients. Can be safely displayed to a client.

..

* Full name: `\GraphQL\Error\UserError`
* Parent class: [`RuntimeException`](../../RuntimeException.md)
* This class implements:
[`\GraphQL\Error\ClientAware`](./ClientAware.md)




## Methods


### isClientSafe

Returns true when exception message is safe to be displayed to a client.

```php
public isClientSafe(): bool
```











***

### getCategory

Returns string describing a category of the error.

```php
public getCategory(): string
```











***


***

