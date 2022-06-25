***

# MessageCatalogue

MessageCatalogue.

* Full name: `\Symfony\Component\Translation\MessageCatalogue`
* This class implements:
  [`\Symfony\Component\Translation\MessageCatalogueInterface`](./MessageCatalogueInterface.md)
  , [`\Symfony\Component\Translation\MetadataAwareInterface`](./MetadataAwareInterface.md)

## Properties

### messages

```php
private $messages
```

***

### metadata

```php
private $metadata
```

***

### resources

```php
private $resources
```

***

### locale

```php
private $locale
```

***

### fallbackCatalogue

```php
private $fallbackCatalogue
```

***

### parent

```php
private $parent
```

***

## Methods

### __construct

Constructor.

```php
public __construct(string $locale, array $messages = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | The locale |
| `$messages` | **array** | An array of messages classified by domain |

***

### getLocale

Gets the catalogue locale.

```php
public getLocale(): string
```

**Return Value:**

The locale



***

### getDomains

Gets the domains.

```php
public getDomains(): array
```

**Return Value:**

An array of domains



***

### all

Gets the messages within a given domain.

```php
public all(mixed $domain = null): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** | The domain name |

**Return Value:**

An array of messages



***

### set

Sets a message translation.

```php
public set(mixed $id, mixed $translation, mixed $domain = &#039;messages&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id |
| `$translation` | **mixed** | The messages translation |
| `$domain` | **mixed** | The domain name |

***

### has

Checks if a message has a translation.

```php
public has(mixed $id, mixed $domain = &#039;messages&#039;): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id |
| `$domain` | **mixed** | The domain name |

**Return Value:**

true if the message has a translation, false otherwise



***

### defines

Checks if a message has a translation (it does not take into account the fallback mechanism).

```php
public defines(mixed $id, mixed $domain = &#039;messages&#039;): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id |
| `$domain` | **mixed** | The domain name |

**Return Value:**

true if the message has a translation, false otherwise



***

### get

Gets a message translation.

```php
public get(mixed $id, mixed $domain = &#039;messages&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id |
| `$domain` | **mixed** | The domain name |

**Return Value:**

The message translation



***

### replace

Sets translations for a given domain.

```php
public replace(mixed $messages, mixed $domain = &#039;messages&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | An array of translations |
| `$domain` | **mixed** | The domain name |

***

### add

Adds translations for a given domain.

```php
public add(mixed $messages, mixed $domain = &#039;messages&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | An array of translations |
| `$domain` | **mixed** | The domain name |

***

### addCatalogue

Merges translations from the given Catalogue into the current one.

```php
public addCatalogue(\Symfony\Component\Translation\MessageCatalogueInterface $catalogue): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$catalogue` | **\Symfony\Component\Translation\MessageCatalogueInterface** | A MessageCatalogueInterface instance |

***

### addFallbackCatalogue

Merges translations from the given Catalogue into the current one only when the translation does not exist.

```php
public addFallbackCatalogue(\Symfony\Component\Translation\MessageCatalogueInterface $catalogue): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$catalogue` | **\Symfony\Component\Translation\MessageCatalogueInterface** | A MessageCatalogueInterface instance |

***

### getFallbackCatalogue

Gets the fallback catalogue.

```php
public getFallbackCatalogue(): \Symfony\Component\Translation\MessageCatalogueInterface|null
```

**Return Value:**

A MessageCatalogueInterface instance or null when no fallback has been set



***

### getResources

Returns an array of resources loaded to build this collection.

```php
public getResources(): \Symfony\Component\Config\Resource\ResourceInterface[]
```

**Return Value:**

An array of resources



***

### addResource

Adds a resource for this collection.

```php
public addResource(\Symfony\Component\Config\Resource\ResourceInterface $resource): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **\Symfony\Component\Config\Resource\ResourceInterface** | A resource instance |

***

### getMetadata

Gets metadata for the given domain and key.

```php
public getMetadata(mixed $key = &#039;&#039;, mixed $domain = &#039;messages&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** | The key |
| `$domain` | **mixed** | The domain name |

**Return Value:**

The value that was set or an array with the domains/keys or null



***

### setMetadata

Adds metadata to a message domain.

```php
public setMetadata(mixed $key, mixed $value, mixed $domain = &#039;messages&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** | The key |
| `$value` | **mixed** | The value |
| `$domain` | **mixed** | The domain name |

***

### deleteMetadata

Deletes metadata for the given key and domain.

```php
public deleteMetadata(mixed $key = &#039;&#039;, mixed $domain = &#039;messages&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** | The key |
| `$domain` | **mixed** | The domain name |

***

### addMetadata

Adds current values with the new values.

```php
private addMetadata(array $values): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** | Values to add |

yxorP::get('REQUEST')
