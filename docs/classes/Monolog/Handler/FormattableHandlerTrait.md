***

# FormattableHandlerTrait

Helper trait for implementing FormattableInterface

This trait is present in monolog 1.x to ease forward compatibility.

* Full name: `\Monolog\Handler\FormattableHandlerTrait`

## Properties

### formatter

```php
protected \Monolog\Formatter\FormatterInterface $formatter
```

***

## Methods

### setFormatter

{@inheritdoc}

```php
public setFormatter(\Monolog\Formatter\FormatterInterface $formatter): \Monolog\Handler\HandlerInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Monolog\Formatter\FormatterInterface** |  |

***

### getFormatter

{@inheritdoc}

```php
public getFormatter(): \Monolog\Formatter\FormatterInterface
```

***

### getDefaultFormatter

Gets the default formatter.

```php
protected getDefaultFormatter(): \Monolog\Formatter\FormatterInterface
```

Overwrite this if the LineFormatter is not a good default for your handler.









***

***


