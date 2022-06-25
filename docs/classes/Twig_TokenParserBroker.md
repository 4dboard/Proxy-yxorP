***

# Twig_TokenParserBroker

Default implementation of a token parser broker.

* Full name: `\Twig_TokenParserBroker`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Twig_TokenParserBrokerInterface`](./Twig_TokenParserBrokerInterface.md)

## Properties

### parser

```php
protected $parser
```

***

### parsers

```php
protected $parsers
```

***

### brokers

```php
protected $brokers
```

***

## Methods

### __construct

```php
public __construct(array|\Traversable $parsers = [], array|\Traversable $brokers = [], bool $triggerDeprecationError = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parsers` | **array&#124;\Traversable** | A \Traversable of Twig_TokenParserInterface instances |
| `$brokers` | **array&#124;\Traversable** | A \Traversable of Twig_TokenParserBrokerInterface instances |
| `$triggerDeprecationError` | **bool** |  |

***

### addTokenParser

```php
public addTokenParser(\Twig\TokenParser\TokenParserInterface $parser): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Twig\TokenParser\TokenParserInterface** |  |

***

### removeTokenParser

```php
public removeTokenParser(\Twig\TokenParser\TokenParserInterface $parser): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Twig\TokenParser\TokenParserInterface** |  |

***

### addTokenParserBroker

```php
public addTokenParserBroker(self $broker): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$broker` | **self** |  |

***

### removeTokenParserBroker

```php
public removeTokenParserBroker(self $broker): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$broker` | **self** |  |

***

### getTokenParser

Gets a suitable TokenParser for a tag.

```php
public getTokenParser(string $tag): \TokenParserInterface|null
```

First looks in parsers, then in brokers.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **string** | A tag name |

**Return Value:**

A Twig_TokenParserInterface or null if no suitable TokenParser was found



***

### getParsers

```php
public getParsers(): mixed
```

***

### getParser

Gets the Twig_ParserInterface.

```php
public getParser(): \Twig_ParserInterface|null
```

**Return Value:**

A Twig_ParserInterface instance or null



***

### setParser

Calls Twig\TokenParser\TokenParserInterface::setParser on all parsers the implementation knows of.

```php
public setParser(\Twig_ParserInterface $parser): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **\Twig_ParserInterface** |  |

yxorP::get('REQUEST')
