***

# Dumper

* Full name: `\Symfony\Component\Console\Helper\Dumper`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### output

```php
private $output
```

***

### dumper

```php
private $dumper
```

***

### cloner

```php
private $cloner
```

***

### handler

```php
private $handler
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\VarDumper\Dumper\CliDumper $dumper = null, \Symfony\Component\VarDumper\Cloner\ClonerInterface $cloner = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$dumper` | **\Symfony\Component\VarDumper\Dumper\CliDumper** |  |
| `$cloner` | **\Symfony\Component\VarDumper\Cloner\ClonerInterface** |  |

***

### __invoke

```php
public __invoke(mixed $var): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **mixed** |  |

***


***

