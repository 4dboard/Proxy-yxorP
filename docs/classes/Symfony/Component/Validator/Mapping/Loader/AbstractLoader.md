***

# AbstractLoader

Base loader for validation metadata.

This loader supports the loading of constraints from Symfony's default namespace (see {@link}) using the short class
names of those constraints. Constraints can also be loaded using their fully qualified class names. At last, namespace
aliases can be defined to load constraints with the syntax "alias:ShortName".

* Full name: `\Symfony\Component\Validator\Mapping\Loader\AbstractLoader`
* This class implements:
  [`\Symfony\Component\Validator\Mapping\Loader\LoaderInterface`](./LoaderInterface.md)
* This class is an **Abstract class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_NAMESPACE`|public| |&#039;\\Symfony\\Component\\Validator\\Constraints\\&#039;|

## Properties

### namespaces

```php
protected $namespaces
```

***

## Methods

### addNamespaceAlias

Adds a namespace alias.

```php
protected addNamespaceAlias(string $alias, string $namespace): mixed
```

The namespace alias can be used to reference constraints from specific namespaces in {@link}:

    $this->addNamespaceAlias('mynamespace', '\\Acme\\Package\\Constraints\\');

    $constraint = $this->newConstraint('mynamespace:NotNull');

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **string** | The alias |
| `$namespace` | **string** | The PHP namespace |

***

### newConstraint

Creates a new constraint instance for the given constraint name.

```php
protected newConstraint(string $name, mixed $options = null): \Symfony\Component\Validator\Constraint
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **
string** | The constraint name. Either a constraint relative<br />to the default constraint namespace, or a fully<br />qualified class name. Alternatively, the constraint<br />may be preceded by a namespace alias and a colon.<br />The namespace alias must have been defined using<br />{@link}. |
| `$options` | **mixed** | The constraint options |

yxorP::get('REQUEST')
