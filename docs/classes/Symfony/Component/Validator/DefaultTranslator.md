***

# DefaultTranslator

Simple translator implementation that simply replaces the parameters in
the message IDs.

Example usage:

    $translator = new DefaultTranslator();

    echo $translator->trans(
        'This is a {{ var }}.',
        array('{{ var }}' => 'donkey')
    );

    // -> This is a donkey.

    echo $translator->transChoice(
        'This is {{ count }} donkey.|These are {{ count }} donkeys.',
        3,
        array('{{ count }}' => 'three')
    );

    // -> These are three donkeys.

This translator does not support message catalogs, translation domains or
locales. Instead, it implements a subset of the capabilities of
{@link} and can be used in places
where translation is not required by default but should be optional.

* Full name: `\Symfony\Component\Validator\DefaultTranslator`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Symfony\Component\Translation\TranslatorInterface`](../Translation/TranslatorInterface.md)




## Methods


### trans

Interpolates the given message.

```php
public trans(string $id, array $parameters = array(), string $domain = null, string $locale = null): string
```

Parameters are replaced in the message in the same manner that
{@link} uses.

Example usage:

    $translator = new DefaultTranslator();

    echo $translator->trans(
        'This is a {{ var }}.',
        array('{{ var }}' => 'donkey')
    );

    // -> This is a donkey.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The message id |
| `$parameters` | **array** | An array of parameters for the message |
| `$domain` | **string** | Ignored |
| `$locale` | **string** | Ignored |


**Return Value:**

The interpolated string



***

### transChoice

Interpolates the given choice message by choosing a variant according to a number.

```php
public transChoice(string $id, int $number, array $parameters = array(), string $domain = null, string $locale = null): string
```

The variants are passed in the message ID using the format
"<singular>|<plural>". "<singular>" is chosen if the passed $number is
exactly 1. "<plural>" is chosen otherwise.

This format is consistent with the format supported by
{@link}, but it does not
have the same expressiveness. While Translator supports intervals in
message translations, which are needed for languages other than English,
this translator does not. You should use Translator or a custom
implementation of {@link} if you need this or similar
functionality.

Example usage:

    echo $translator->transChoice(
        'This is {{ count }} donkey.|These are {{ count }} donkeys.',
        0,
        array('{{ count }}' => 0)
    );

    // -> These are 0 donkeys.

    echo $translator->transChoice(
        'This is {{ count }} donkey.|These are {{ count }} donkeys.',
        1,
        array('{{ count }}' => 1)
    );

    // -> This is 1 donkey.

    echo $translator->transChoice(
        'This is {{ count }} donkey.|These are {{ count }} donkeys.',
        3,
        array('{{ count }}' => 3)
    );

    // -> These are 3 donkeys.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The message id |
| `$number` | **int** | The number to use to find the index of the message |
| `$parameters` | **array** | An array of parameters for the message |
| `$domain` | **string** | Ignored |
| `$locale` | **string** | Ignored |


**Return Value:**

The translated string



***

### setLocale

Not supported.

```php
public setLocale(string $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** | The locale |




***

### getLocale

Returns the locale of the translator.

```php
public getLocale(): string
```









**Return Value:**

Always returns 'en'



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
