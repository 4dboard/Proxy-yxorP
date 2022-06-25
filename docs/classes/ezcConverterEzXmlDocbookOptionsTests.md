***

# ezcConverterEzXmlDocbookOptionsTests

Test suite for class.

* Full name: `\ezcConverterEzXmlDocbookOptionsTests`
* Parent class: [`\ezcDocumentOptionsTestCase`](./ezcDocumentOptionsTestCase.md)

## Methods

### suite

```php
public static suite(): mixed
```

* This method is **static**.

***

### getOptionsClassName

Return class name of options class to test

```php
protected getOptionsClassName(): string
```

***

### provideDefaultValues

Return default values for the options

```php
public static provideDefaultValues(): array
```

Returned array should be in the format:

<code>
 array(
     array(
         'optionname',
         $value,
     ),
     ...
 )
</code>

* This method is **static**.

***

### provideValidData

Return valid data for options to test

```php
public static provideValidData(): array
```

Returned array should be in the format:

<code>
 array(
     array(
         'optionname',
         array(
             'value 1', 'value 2', ...
         ),
     ),
     ...
 )
</code>

* This method is **static**.

***

### provideInvalidData

Return invalid data for options to test

```php
public static provideInvalidData(): array
```

Returned array should be in the format:

<code>
 array(
     array(
         'optionname',
         array(
             'value 1', 'value 2', ...
         ),
     ),
     ...
 )
</code>

* This method is **static**.

***

## Inherited methods

### getOptionsClassName

Return class name of options class to test

```php
protected getOptionsClassName(): string
```

* This method is **abstract**.

***

### provideDefaultValues

Return default values for the options

```php
public static provideDefaultValues(): array
```

Returned array should be in the format:

<code>
 array(
     array(
         'optionname',
         $value,
     ),
     ...
 )
</code>

* This method is **static**.

***

### provideValidData

Return valid data for options to test

```php
public static provideValidData(): array
```

Returned array should be in the format:

<code>
 array(
     array(
         'optionname',
         array(
             'value 1', 'value 2', ...
         ),
     ),
     ...
 )
</code>

* This method is **static**.

***

### provideInvalidData

Return invalid data for options to test

```php
public static provideInvalidData(): array
```

Returned array should be in the format:

<code>
 array(
     array(
         'optionname',
         array(
             'value 1', 'value 2', ...
         ),
     ),
     ...
 )
</code>

* This method is **static**.

***

### testOptionsDefaultValues

Test all options provided by the data provider

```php
public testOptionsDefaultValues(mixed $property, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |
| `$value` | **mixed** |  |

***

### testOptionsValidValues

Test all options provided by the data provider

```php
public testOptionsValidValues(mixed $property, mixed $values): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |
| `$values` | **mixed** |  |

***

### testOptionsInvalidValues

Test all options provided by the data provider

```php
public testOptionsInvalidValues(mixed $property, mixed $values): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |
| `$values` | **mixed** |  |

***

### testUnknownValue

```php
public testUnknownValue(): mixed
```

yxorP::get('REQUEST')
