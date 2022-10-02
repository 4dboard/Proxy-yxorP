***

# SingleFieldSubscription

* Full name: `\GraphQL\Validator\Rules\SingleFieldSubscription`
* Parent class: [`\GraphQL\Validator\Rules\ValidationRule`](./ValidationRule.md)

## Methods

### getVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getVisitor(\GraphQL\Validator\ValidationContext $context): array&lt;string,callable&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |

***

### multipleFieldsInOperation

```php
public static multipleFieldsInOperation(?string $operationName): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operationName` | **?string** |  |

***

## Inherited methods

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

