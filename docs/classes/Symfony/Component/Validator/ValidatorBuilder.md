***

# ValidatorBuilder

The default implementation of {@link ValidatorBuilderInterface}.

* Full name: `\Symfony\Component\Validator\ValidatorBuilder`
* This class implements:
  [`\Symfony\Component\Validator\ValidatorBuilderInterface`](./ValidatorBuilderInterface.md)

## Properties

### initializers

```php
private $initializers
```

***

### xmlMappings

```php
private $xmlMappings
```

***

### yamlMappings

```php
private $yamlMappings
```

***

### methodMappings

```php
private $methodMappings
```

***

### annotationReader

```php
private \Doctrine\Common\Annotations\Reader|null $annotationReader
```

***

### metadataFactory

```php
private \Symfony\Component\Validator\MetadataFactoryInterface|null $metadataFactory
```

***

### validatorFactory

```php
private \Symfony\Component\Validator\ConstraintValidatorFactoryInterface|null $validatorFactory
```

***

### metadataCache

```php
private \Symfony\Component\Validator\Mapping\Cache\CacheInterface|null $metadataCache
```

***

### translator

```php
private \Symfony\Component\Translation\TranslatorInterface|null $translator
```

***

### translationDomain

```php
private string|null $translationDomain
```

***

### propertyAccessor

```php
private \Symfony\Component\PropertyAccess\PropertyAccessorInterface|null $propertyAccessor
```

***

## Methods

### addObjectInitializer

Adds an object initializer to the validator.

```php
public addObjectInitializer(\Symfony\Component\Validator\ObjectInitializerInterface $initializer): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initializer` | **\Symfony\Component\Validator\ObjectInitializerInterface** |  |

***

### addObjectInitializers

Adds a list of object initializers to the validator.

```php
public addObjectInitializers(array $initializers): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initializers` | **array** |  |

***

### addXmlMapping

Adds an XML constraint mapping file to the validator.

```php
public addXmlMapping(mixed $path): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the mapping file |

***

### addXmlMappings

Adds a list of XML constraint mapping files to the validator.

```php
public addXmlMappings(array $paths): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | The paths to the mapping files |

***

### addYamlMapping

Adds a YAML constraint mapping file to the validator.

```php
public addYamlMapping(mixed $path): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** | The path to the mapping file |

***

### addYamlMappings

Adds a list of YAML constraint mappings file to the validator.

```php
public addYamlMappings(array $paths): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | The paths to the mapping files |

***

### addMethodMapping

Enables constraint mapping using the given static method.

```php
public addMethodMapping(mixed $methodName): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methodName` | **mixed** | The name of the method |

***

### addMethodMappings

Enables constraint mapping using the given static methods.

```php
public addMethodMappings(array $methodNames): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methodNames` | **array** | The names of the methods |

***

### enableAnnotationMapping

Enables annotation based constraint mapping.

```php
public enableAnnotationMapping(\Doctrine\Common\Annotations\Reader $annotationReader = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotationReader` | **\Doctrine\Common\Annotations\Reader** |  |

***

### disableAnnotationMapping

Disables annotation based constraint mapping.

```php
public disableAnnotationMapping(): $this
```

***

### setMetadataFactory

Sets the class metadata factory used by the validator.

```php
public setMetadataFactory(\Symfony\Component\Validator\MetadataFactoryInterface $metadataFactory): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadataFactory` | **\Symfony\Component\Validator\MetadataFactoryInterface** |  |

***

### setMetadataCache

Sets the cache for caching class metadata.

```php
public setMetadataCache(\Symfony\Component\Validator\Mapping\Cache\CacheInterface $cache): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cache` | **\Symfony\Component\Validator\Mapping\Cache\CacheInterface** |  |

***

### setConstraintValidatorFactory

Sets the constraint validator factory used by the validator.

```php
public setConstraintValidatorFactory(\Symfony\Component\Validator\ConstraintValidatorFactoryInterface $validatorFactory): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$validatorFactory` | **\Symfony\Component\Validator\ConstraintValidatorFactoryInterface** |  |

***

### setTranslator

Sets the translator used for translating violation messages.

```php
public setTranslator(\Symfony\Component\Translation\TranslatorInterface $translator): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\Symfony\Component\Translation\TranslatorInterface** |  |

***

### setTranslationDomain

Sets the default translation domain of violation messages.

```php
public setTranslationDomain(mixed $translationDomain): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translationDomain` | **mixed** | The translation domain of the violation messages |

***

### setPropertyAccessor

Sets the property accessor for resolving property paths.

```php
public setPropertyAccessor(\Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor): $this
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyAccessor` | **\Symfony\Component\PropertyAccess\PropertyAccessorInterface** | The property accessor |

***

### setApiVersion

Sets the API version that the returned validator should support.

```php
public setApiVersion(mixed $apiVersion): $this
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$apiVersion` | **mixed** | The required API version |

***

### getValidator

Builds and returns a new validator object.

```php
public getValidator(): \Symfony\Component\Validator\ValidatorInterface
```

**Return Value:**

The built validator yxorP::get('REQUEST')
