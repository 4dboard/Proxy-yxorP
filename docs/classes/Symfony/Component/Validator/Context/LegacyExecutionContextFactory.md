***

# LegacyExecutionContextFactory

Creates new {@link LegacyExecutionContext} instances.

Implemented for backward compatibility with Symfony < 2.5.

* Full name: `\Symfony\Component\Validator\Context\LegacyExecutionContextFactory`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Symfony\Component\Validator\Context\ExecutionContextFactoryInterface`](./ExecutionContextFactoryInterface.md)

## Properties

### metadataFactory

```php
private $metadataFactory
```

***

### translator

```php
private $translator
```

***

### translationDomain

```php
private $translationDomain
```

***

## Methods

### __construct

Creates a new context factory.

```php
public __construct(\Symfony\Component\Validator\MetadataFactoryInterface $metadataFactory, \Symfony\Component\Translation\TranslatorInterface $translator, string|null $translationDomain = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadataFactory` | **\Symfony\Component\Validator\MetadataFactoryInterface** | The metadata factory |
| `$translator` | **\Symfony\Component\Translation\TranslatorInterface** | The translator |
| `$translationDomain` | **
string&#124;null** | The translation domain<br />to use for translating<br />violation messages |

***

### createContext

Creates a new execution context.

```php
public createContext(\Symfony\Component\Validator\Validator\ValidatorInterface $validator, mixed $root): \Symfony\Component\Validator\Context\ExecutionContextInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$validator` | **\Symfony\Component\Validator\Validator\ValidatorInterface** | The validator |
| `$root` | **mixed** | The root value of the validated<br />object graph |

**Return Value:**

The new execution context yxorP::get('REQUEST')
