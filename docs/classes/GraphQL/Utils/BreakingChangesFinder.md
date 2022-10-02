***

# BreakingChangesFinder

* Full name: `\GraphQL\Utils\BreakingChangesFinder`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`BREAKING_CHANGE_FIELD_CHANGED_KIND`|public| |&#039;FIELD_CHANGED_KIND&#039;|
|`BREAKING_CHANGE_FIELD_REMOVED`|public| |&#039;FIELD_REMOVED&#039;|
|`BREAKING_CHANGE_TYPE_CHANGED_KIND`|public| |&#039;TYPE_CHANGED_KIND&#039;|
|`BREAKING_CHANGE_TYPE_REMOVED`|public| |&#039;TYPE_REMOVED&#039;|
|`BREAKING_CHANGE_TYPE_REMOVED_FROM_UNION`|public| |&#039;TYPE_REMOVED_FROM_UNION&#039;|
|`BREAKING_CHANGE_VALUE_REMOVED_FROM_ENUM`|public| |&#039;VALUE_REMOVED_FROM_ENUM&#039;|
|`BREAKING_CHANGE_ARG_REMOVED`|public| |&#039;ARG_REMOVED&#039;|
|`BREAKING_CHANGE_ARG_CHANGED_KIND`|public| |&#039;ARG_CHANGED_KIND&#039;|
|`BREAKING_CHANGE_REQUIRED_ARG_ADDED`|public| |&#039;REQUIRED_ARG_ADDED&#039;|
|`BREAKING_CHANGE_REQUIRED_INPUT_FIELD_ADDED`|public| |&#039;REQUIRED_INPUT_FIELD_ADDED&#039;|
|`BREAKING_CHANGE_IMPLEMENTED_INTERFACE_REMOVED`|public| |&#039;IMPLEMENTED_INTERFACE_REMOVED&#039;|
|`BREAKING_CHANGE_DIRECTIVE_REMOVED`|public| |&#039;DIRECTIVE_REMOVED&#039;|
|`BREAKING_CHANGE_DIRECTIVE_ARG_REMOVED`|public| |&#039;DIRECTIVE_ARG_REMOVED&#039;|
|`BREAKING_CHANGE_DIRECTIVE_LOCATION_REMOVED`|public| |&#039;DIRECTIVE_LOCATION_REMOVED&#039;|
|`BREAKING_CHANGE_REQUIRED_DIRECTIVE_ARG_ADDED`|public| |&#039;REQUIRED_DIRECTIVE_ARG_ADDED&#039;|
|`DANGEROUS_CHANGE_ARG_DEFAULT_VALUE_CHANGED`|public| |&#039;ARG_DEFAULT_VALUE_CHANGE&#039;|
|`DANGEROUS_CHANGE_VALUE_ADDED_TO_ENUM`|public| |&#039;VALUE_ADDED_TO_ENUM&#039;|
|`DANGEROUS_CHANGE_IMPLEMENTED_INTERFACE_ADDED`|public| |&#039;IMPLEMENTED_INTERFACE_ADDED&#039;|
|`DANGEROUS_CHANGE_TYPE_ADDED_TO_UNION`|public| |&#039;TYPE_ADDED_TO_UNION&#039;|
|`DANGEROUS_CHANGE_OPTIONAL_INPUT_FIELD_ADDED`|public| |&#039;OPTIONAL_INPUT_FIELD_ADDED&#039;|
|`DANGEROUS_CHANGE_OPTIONAL_ARG_ADDED`|public| |&#039;OPTIONAL_ARG_ADDED&#039;|
|`BREAKING_CHANGE_INTERFACE_REMOVED_FROM_OBJECT`|public| |&#039;IMPLEMENTED_INTERFACE_REMOVED&#039;|
|`DANGEROUS_CHANGE_INTERFACE_ADDED_TO_OBJECT`|public| |&#039;IMPLEMENTED_INTERFACE_ADDED&#039;|

## Methods

### findBreakingChanges

Given two schemas, returns an Array containing descriptions of all the types
of breaking changes covered by the other functions down below.

```php
public static findBreakingChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findRemovedTypes

Given two schemas, returns an Array containing descriptions of any breaking
changes in the newSchema related to removing an entire type.

```php
public static findRemovedTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findTypesThatChangedKind

Given two schemas, returns an Array containing descriptions of any breaking
changes in the newSchema related to changing the type of a type.

```php
public static findTypesThatChangedKind(\GraphQL\Type\Schema $schemaA, \GraphQL\Type\Schema $schemaB): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaA` | **\GraphQL\Type\Schema** |  |
| `$schemaB` | **\GraphQL\Type\Schema** |  |

***

### typeKindName

```php
private static typeKindName(\GraphQL\Type\Definition\Type $type): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |

***

### findFieldsThatChangedTypeOnObjectOrInterfaceTypes

```php
public static findFieldsThatChangedTypeOnObjectOrInterfaceTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### isChangeSafeForObjectOrInterfaceField

```php
private static isChangeSafeForObjectOrInterfaceField(\GraphQL\Type\Definition\Type $oldType, \GraphQL\Type\Definition\Type $newType): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldType` | **\GraphQL\Type\Definition\Type** |  |
| `$newType` | **\GraphQL\Type\Definition\Type** |  |

***

### findFieldsThatChangedTypeOnInputObjectTypes

```php
public static findFieldsThatChangedTypeOnInputObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array&lt;string,array&lt;int,array&lt;string,string&gt;&gt;&gt;
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### isChangeSafeForInputObjectFieldOrFieldArg

```php
private static isChangeSafeForInputObjectFieldOrFieldArg(\GraphQL\Type\Definition\Type $oldType, \GraphQL\Type\Definition\Type $newType): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldType` | **\GraphQL\Type\Definition\Type** |  |
| `$newType` | **\GraphQL\Type\Definition\Type** |  |

***

### findTypesRemovedFromUnions

Given two schemas, returns an Array containing descriptions of any breaking
changes in the newSchema related to removing types from a union type.

```php
public static findTypesRemovedFromUnions(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findValuesRemovedFromEnums

Given two schemas, returns an Array containing descriptions of any breaking
changes in the newSchema related to removing values from an enum type.

```php
public static findValuesRemovedFromEnums(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findArgChanges

Given two schemas, returns an Array containing descriptions of any
breaking or dangerous changes in the newSchema related to arguments
(such as removal or change of type of an argument, or a change in an
argument's default value).

```php
public static findArgChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): array&lt;string,array&lt;int,array&lt;string,string&gt;&gt;&gt;
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findInterfacesRemovedFromObjectTypes

```php
public static findInterfacesRemovedFromObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findRemovedDirectives

```php
public static findRemovedDirectives(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### getDirectiveMapForSchema

```php
private static getDirectiveMapForSchema(\GraphQL\Type\Schema $schema): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |

***

### findRemovedDirectiveArgs

```php
public static findRemovedDirectiveArgs(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findRemovedArgsForDirectives

```php
public static findRemovedArgsForDirectives(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldDirective` | **\GraphQL\Type\Definition\Directive** |  |
| `$newDirective` | **\GraphQL\Type\Definition\Directive** |  |

***

### getArgumentMapForDirective

```php
private static getArgumentMapForDirective(\GraphQL\Type\Definition\Directive $directive): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **\GraphQL\Type\Definition\Directive** |  |

***

### findAddedNonNullDirectiveArgs

```php
public static findAddedNonNullDirectiveArgs(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findAddedArgsForDirective

```php
public static findAddedArgsForDirective(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective): \GraphQL\Type\Definition\FieldArgument[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldDirective` | **\GraphQL\Type\Definition\Directive** |  |
| `$newDirective` | **\GraphQL\Type\Definition\Directive** |  |

***

### findRemovedDirectiveLocations

```php
public static findRemovedDirectiveLocations(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findRemovedLocationsForDirective

```php
public static findRemovedLocationsForDirective(\GraphQL\Type\Definition\Directive $oldDirective, \GraphQL\Type\Definition\Directive $newDirective): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldDirective` | **\GraphQL\Type\Definition\Directive** |  |
| `$newDirective` | **\GraphQL\Type\Definition\Directive** |  |

***

### findDangerousChanges

Given two schemas, returns an Array containing descriptions of all the types
of potentially dangerous changes covered by the other functions down below.

```php
public static findDangerousChanges(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findValuesAddedToEnums

Given two schemas, returns an Array containing descriptions of any dangerous
changes in the newSchema related to adding values to an enum type.

```php
public static findValuesAddedToEnums(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findInterfacesAddedToObjectTypes

```php
public static findInterfacesAddedToObjectTypes(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***

### findTypesAddedToUnions

Given two schemas, returns an Array containing descriptions of any dangerous
changes in the newSchema related to adding types to a union type.

```php
public static findTypesAddedToUnions(\GraphQL\Type\Schema $oldSchema, \GraphQL\Type\Schema $newSchema): string[][]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$oldSchema` | **\GraphQL\Type\Schema** |  |
| `$newSchema` | **\GraphQL\Type\Schema** |  |

***


***

