***

# RequestError





* Full name: `\GraphQL\Server\RequestError`
* Parent class: [`Exception`](../../Exception.md)
* This class implements:
[`\GraphQL\Error\ClientAware`](../Error/ClientAware.md)




## Methods


### isClientSafe

Returns true when exception message is safe to be displayed to client

```php
public isClientSafe(): bool
```











***

### getCategory

Returns string describing error category. E.g. "validation" for your own validation errors.

```php
public getCategory(): string
```

Value "graphql" is reserved for errors produced by query parsing or validation, do not use it.









***


***

