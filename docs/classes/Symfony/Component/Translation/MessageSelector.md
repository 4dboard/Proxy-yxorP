***

# MessageSelector

MessageSelector.

* Full name: `\Symfony\Component\Translation\MessageSelector`

## Methods

### choose

Given a message with different plural translations separated by a pipe (|), this method returns the correct portion of
the message based on the given number, locale and the pluralization rules in the message itself.

```php
public choose(string $message, int $number, string $locale): string
```

The message supports two different types of pluralization rules:

interval: {0} There are no apples|{1} There is one apple|]1,Inf] There are %count% apples indexed:  There is one
apple|There are %count% apples

The indexed solution can also contain labels (e.g. one: There is one apple). This is purely for making the translations
more clear - it does not affect the functionality.

The two methods can also be mixed:
{0} There are no apples|one: There is one apple|more: There are %count% apples

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message being translated |
| `$number` | **int** | The number of items represented for the message |
| `$locale` | **string** | The locale to use for choosing |

yxorP::get('REQUEST')
