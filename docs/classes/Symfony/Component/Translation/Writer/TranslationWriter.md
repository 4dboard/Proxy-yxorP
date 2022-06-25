***

# TranslationWriter

TranslationWriter writes translation messages.

* Full name: `\Symfony\Component\Translation\Writer\TranslationWriter`

## Properties

### dumpers

Dumpers used for export.

```php
private array $dumpers
```

***

## Methods

### addDumper

Adds a dumper to the writer.

```php
public addDumper(string $format, \Symfony\Component\Translation\Dumper\DumperInterface $dumper): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** | The format of the dumper |
| `$dumper` | **\Symfony\Component\Translation\Dumper\DumperInterface** | The dumper |

***

### disableBackup

Disables dumper backup.

```php
public disableBackup(): mixed
```

***

### getFormats

Obtains the list of supported formats.

```php
public getFormats(): array
```

***

### writeTranslations

Writes translation from the catalogue according to the selected format.

```php
public writeTranslations(\Symfony\Component\Translation\MessageCatalogue $catalogue, string $format, array $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$catalogue` | **\Symfony\Component\Translation\MessageCatalogue** | The message catalogue to dump |
| `$format` | **string** | The format to use to dump the messages |
| `$options` | **array** | Options that are passed to the dumper |

yxorP::get('REQUEST')
