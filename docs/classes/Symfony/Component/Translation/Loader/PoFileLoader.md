***

# PoFileLoader

ArrayLoader loads translations from a PHP array.



* Full name: `\Symfony\Component\Translation\Loader\PoFileLoader`
* Parent class: [`\Symfony\Component\Translation\Loader\FileLoader`](./FileLoader.md)




## Methods


### loadResource

Parses portable object (PO) format.

```php
protected loadResource(mixed $resource): mixed
```

From http://www.gnu.org/software/gettext/manual/gettext.html#PO-Files
we should be able to parse files having:

white-space
#  translator-comments
#. extracted-comments
#: reference...
#, flag...
#| msgid previous-untranslated-string
msgid untranslated-string
msgstr translated-string

extra or different lines are:

#| msgctxt previous-context
#| msgid previous-untranslated-string
msgctxt context

#| msgid previous-untranslated-string-singular
#| msgid_plural previous-untranslated-string-plural
msgid untranslated-string-singular
msgid_plural untranslated-string-plural
msgstr[0] translated-string-case-0
...
msgstr[N] translated-string-case-n

The definition states:
- white-space and comments are optional.
- msgid "" that an empty singleline defines a header.

This parser sacrifices some features of the reference implementation the
differences to that implementation are as follows.
- No support for comments spanning multiple lines.
- Translator and extracted comments are treated as being the same type.
- Message IDs are allowed to have other encodings as just US-ASCII.

Items with an empty id are ignored.

{@inheritdoc}






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |




***

### addMessage

Save a translation item to the messages.

```php
private addMessage(array& $messages, array $item): mixed
```

A .po file could contain by error missing plural indexes. We need to
fix these before saving them.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **array** |  |
| `$item` | **array** |  |




***


## Inherited methods


### load

Loads a locale.

```php
public load(mixed $resource, mixed $locale, mixed $domain = &#039;messages&#039;): \Symfony\Component\Translation\MessageCatalogue
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$locale` | **mixed** | A locale |
| `$domain` | **mixed** | The domain |


**Return Value:**

A MessageCatalogue instance



***

### loadResource



```php
protected loadResource(mixed $resource): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |




***

### flatten

Flattens an nested array of translations.

```php
private flatten(array& $messages, array $subnode = null, string $path = null): mixed
```

The scheme used is:
  'key' => array('key2' => array('key3' => 'value'))
Becomes:
  'key.key2.key3' => 'value'

This function takes an array by reference and will modify it






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **array** | The array that will be flattened |
| `$subnode` | **array** | Current subnode being parsed, used internally for recursive calls |
| `$path` | **string** | Current path being parsed, used internally for recursive calls |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
