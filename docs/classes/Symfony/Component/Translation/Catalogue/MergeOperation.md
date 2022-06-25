***

# MergeOperation

Merge operation between two catalogues as follows:
all = source ∪ target = {x: x ∈ source ∨ x ∈ target} new = all ∖ source = {x: x ∈ target ∧ x ∉ source} obsolete = source
∖ all = {x: x ∈ source ∧ x ∉ source ∧ x ∉ target} = ∅ Basically, the result contains messages from both catalogues.

* Full name: `\Symfony\Component\Translation\Catalogue\MergeOperation`
* Parent class: [`\Symfony\Component\Translation\Catalogue\AbstractOperation`](./AbstractOperation.md)

## Methods

### processDomain

Performs operation on source and target catalogues for the given domain and stores the results.

```php
protected processDomain(mixed $domain): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** | The domain which the operation will be performed for |

***

## Inherited methods

### __construct

```php
public __construct(\Symfony\Component\Translation\MessageCatalogueInterface $source, \Symfony\Component\Translation\MessageCatalogueInterface $target): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\Symfony\Component\Translation\MessageCatalogueInterface** | The source catalogue |
| `$target` | **\Symfony\Component\Translation\MessageCatalogueInterface** | The target catalogue |

***

### getDomains

Returns domains affected by operation.

```php
public getDomains(): array
```

***

### getMessages

Returns all valid messages ('all') after operation.

```php
public getMessages(mixed $domain): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |

***

### getNewMessages

Returns new messages ('new') after operation.

```php
public getNewMessages(mixed $domain): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |

***

### getObsoleteMessages

Returns obsolete messages ('obsolete') after operation.

```php
public getObsoleteMessages(mixed $domain): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |

***

### getResult

Returns resulting catalogue ('result').

```php
public getResult(): \Symfony\Component\Translation\MessageCatalogueInterface
```

***

### processDomain

Performs operation on source and target catalogues for the given domain and stores the results.

```php
protected processDomain(string $domain): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** | The domain which the operation will be performed for |

yxorP::get('REQUEST')
