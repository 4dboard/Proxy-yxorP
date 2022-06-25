***

# Symbol

Parser symbol.

All properties in the symbol are defined as public for easier and faster access from the applied closures. An exception
are the closure properties themselves, as they have to be accessed via the appropriate getter and setter methods.

* Full name: `\Zend\I18n\Translator\Plural\Symbol`

## Properties

### parser

Parser instance.

```php
public \Zend\I18n\Translator\Plural\Parser $parser
```

***

### id

Node or token type name.

```php
public string $id
```

***

### leftBindingPower

Left binding power (precedence).

```php
public int $leftBindingPower
```

***

### nullDenotationGetter

Getter for null denotation.

```php
protected callable $nullDenotationGetter
```

***

### leftDenotationGetter

Getter for left denotation.

```php
protected callable $leftDenotationGetter
```

***

### value

Value used by literals.

```php
public mixed $value
```

***

### first

First node value.

```php
public \Zend\I18n\Translator\Plural\Symbol $first
```

***

### second

Second node value.

```php
public \Zend\I18n\Translator\Plural\Symbol $second
```

***

### third

Third node value.

```php
public \Zend\I18n\Translator\Plural\Symbol $third
```

***

## Methods

### __construct

Create a new symbol.

```php
public __construct(\Zend\I18n\Translator\Plural\Parser $parser, string $id, int $leftBindingPower): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Zend\I18n\Translator\Plural\Parser** |  |
| `$id` | **string** |  |
| `$leftBindingPower` | **int** |  |

***

### setNullDenotationGetter

Set the null denotation getter.

```php
public setNullDenotationGetter(\Closure $getter): \Zend\I18n\Translator\Plural\Symbol
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$getter` | **\Closure** |  |

***

### setLeftDenotationGetter

Set the left denotation getter.

```php
public setLeftDenotationGetter(\Closure $getter): \Zend\I18n\Translator\Plural\Symbol
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$getter` | **\Closure** |  |

***

### getNullDenotation

Get null denotation.

```php
public getNullDenotation(): \Zend\I18n\Translator\Plural\Symbol
```

***

### getLeftDenotation

Get left denotation.

```php
public getLeftDenotation(\Zend\I18n\Translator\Plural\Symbol $left): \Zend\I18n\Translator\Plural\Symbol
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$left` | **\Zend\I18n\Translator\Plural\Symbol** |  |

yxorP::get('REQUEST')
