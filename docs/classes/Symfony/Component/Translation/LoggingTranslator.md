***

# LoggingTranslator

* Full name: `\Symfony\Component\Translation\LoggingTranslator`
* This class implements:
  [`\Symfony\Component\Translation\TranslatorInterface`](./TranslatorInterface.md)
  , [`\Symfony\Component\Translation\TranslatorBagInterface`](./TranslatorBagInterface.md)

## Properties

### translator

```php
private \Symfony\Component\Translation\TranslatorInterface|\Symfony\Component\Translation\TranslatorBagInterface $translator
```

***

### logger

```php
private \Psr\Log\LoggerInterface $logger
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Translation\TranslatorInterface $translator, \Psr\Log\LoggerInterface $logger): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **
\Symfony\Component\Translation\TranslatorInterface** | The translator must implement TranslatorBagInterface |
| `$logger` | **\Psr\Log\LoggerInterface** |  |

***

### trans

Translates the given message.

```php
public trans(mixed $id, array $parameters = array(), mixed $domain = null, mixed $locale = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id (may also be an object that can be cast to string) |
| `$parameters` | **array** | An array of parameters for the message |
| `$domain` | **mixed** | The domain for the message or null to use the default |
| `$locale` | **mixed** | The locale or null to use the default |

**Return Value:**

The translated string



***

### transChoice

Translates the given choice message by choosing a translation according to a number.

```php
public transChoice(mixed $id, mixed $number, array $parameters = array(), mixed $domain = null, mixed $locale = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id (may also be an object that can be cast to string) |
| `$number` | **mixed** | The number to use to find the indice of the message |
| `$parameters` | **array** | An array of parameters for the message |
| `$domain` | **mixed** | The domain for the message or null to use the default |
| `$locale` | **mixed** | The locale or null to use the default |

**Return Value:**

The translated string



***

### setLocale

Sets the current locale.

```php
public setLocale(mixed $locale): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** | The locale |

***

### getLocale

Returns the current locale.

```php
public getLocale(): string
```

**Return Value:**

The locale



***

### getCatalogue

Gets the catalogue by locale.

```php
public getCatalogue(mixed $locale = null): \Symfony\Component\Translation\MessageCatalogueInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** | The locale or null to use the default |

***

### __call

Passes through all unknown calls onto the translator object.

```php
public __call(mixed $method, mixed $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **mixed** |  |

***

### log

Logs for missing translations.

```php
private log(string $id, string|null $domain, string|null $locale): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$domain` | **string&#124;null** |  |
| `$locale` | **string&#124;null** |  |

yxorP::get('REQUEST')
