***

# Generator

This class takes the output from 'parser', and generate the markdown templates.

* Full name: `\PHPDocMD\Generator`

## Properties

### outputDir

Output directory.

```php
protected string $outputDir
```

***

### classDefinitions

The list of classes and interfaces.

```php
protected array $classDefinitions
```

***

### templateDir

Directory containing the twig templates.

```php
protected string $templateDir
```

***

### linkTemplate

A simple template for generating links.

```php
protected string $linkTemplate
```

***

### apiIndexFile

Filename for API Index.

```php
protected string $apiIndexFile
```

***

## Methods

### __construct

```php
public __construct(array $classDefinitions, string $outputDir, string $templateDir, string $linkTemplate = &#039;%c.md&#039;, string $apiIndexFile = &#039;ApiIndex.md&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classDefinitions` | **array** |  |
| `$outputDir` | **string** |  |
| `$templateDir` | **string** |  |
| `$linkTemplate` | **string** |  |
| `$apiIndexFile` | **string** |  |

***

### run

Starts the generator.

```php
public run(): mixed
```

***

### createIndex

Creates an index of classes and namespaces.

```php
protected createIndex(): array
```

I'm generating the actual markdown output here, which isn't great...But it will have to do. If I don't want to make
things too complicated.









***

### classLink

This is a twig template function.

```php
public static classLink(string $className, null|string $label = null): string
```

This function allows us to easily link classes to their existing pages.

Due to the unfortunate way twig works, this must be static, and we must use a global to achieve our goal.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |
| `$label` | **null&#124;string** |  |

yxorP::get('REQUEST')
