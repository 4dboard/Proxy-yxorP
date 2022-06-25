***

# ApplicationTest





* Full name: `\Symfony\Component\Console\Tests\ApplicationTest`
* Parent class: [`TestCase`](../../../../PHPUnit/Framework/TestCase.md)



## Properties


### fixturesPath



```php
protected static $fixturesPath
```



* This property is **static**.


***

## Methods


### setUpBeforeClass



```php
public static setUpBeforeClass(): mixed
```



* This method is **static**.







***

### normalizeLineBreaks



```php
protected normalizeLineBreaks(mixed $text): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |




***

### ensureStaticCommandHelp

Replaces the dynamic placeholders of the command help text with a static version.

```php
protected ensureStaticCommandHelp(\Symfony\Component\Console\Application $application): mixed
```

The placeholder %command.full_name% includes the script path that is not predictable
and can not be tested against.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$application` | **\Symfony\Component\Console\Application** |  |




***

### testConstructor



```php
public testConstructor(): mixed
```











***

### testSetGetName



```php
public testSetGetName(): mixed
```











***

### testSetGetVersion



```php
public testSetGetVersion(): mixed
```











***

### testGetLongVersion



```php
public testGetLongVersion(): mixed
```











***

### testHelp



```php
public testHelp(): mixed
```











***

### testAll



```php
public testAll(): mixed
```











***

### testRegister



```php
public testRegister(): mixed
```











***

### testAdd



```php
public testAdd(): mixed
```











***

### testAddCommandWithEmptyConstructor



```php
public testAddCommandWithEmptyConstructor(): mixed
```











***

### testHasGet



```php
public testHasGet(): mixed
```











***

### testSilentHelp



```php
public testSilentHelp(): mixed
```











***

### testGetInvalidCommand



```php
public testGetInvalidCommand(): mixed
```











***

### testGetNamespaces



```php
public testGetNamespaces(): mixed
```











***

### testFindNamespace



```php
public testFindNamespace(): mixed
```











***

### testFindNamespaceWithSubnamespaces



```php
public testFindNamespaceWithSubnamespaces(): mixed
```











***

### testFindAmbiguousNamespace



```php
public testFindAmbiguousNamespace(): mixed
```











***

### testFindNonAmbiguous



```php
public testFindNonAmbiguous(): mixed
```











***

### testFindInvalidNamespace



```php
public testFindInvalidNamespace(): mixed
```











***

### testFindUniqueNameButNamespaceName



```php
public testFindUniqueNameButNamespaceName(): mixed
```











***

### testFind



```php
public testFind(): mixed
```











***

### testFindWithAmbiguousAbbreviations



```php
public testFindWithAmbiguousAbbreviations(mixed $abbreviation, mixed $expectedExceptionMessage): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$abbreviation` | **mixed** |  |
| `$expectedExceptionMessage` | **mixed** |  |




***

### provideAmbiguousAbbreviations



```php
public provideAmbiguousAbbreviations(): mixed
```











***

### testFindCommandEqualNamespace



```php
public testFindCommandEqualNamespace(): mixed
```











***

### testFindCommandWithAmbiguousNamespacesButUniqueName



```php
public testFindCommandWithAmbiguousNamespacesButUniqueName(): mixed
```











***

### testFindCommandWithMissingNamespace



```php
public testFindCommandWithMissingNamespace(): mixed
```











***

### testFindAlternativeExceptionMessageSingle



```php
public testFindAlternativeExceptionMessageSingle(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### provideInvalidCommandNamesSingle



```php
public provideInvalidCommandNamesSingle(): mixed
```











***

### testFindAlternativeExceptionMessageMultiple



```php
public testFindAlternativeExceptionMessageMultiple(): mixed
```











***

### testFindAlternativeCommands



```php
public testFindAlternativeCommands(): mixed
```











***

### testFindAlternativeCommandsWithAnAlias



```php
public testFindAlternativeCommandsWithAnAlias(): mixed
```











***

### testFindAlternativeNamespace



```php
public testFindAlternativeNamespace(): mixed
```











***

### testFindNamespaceDoesNotFailOnDeepSimilarNamespaces



```php
public testFindNamespaceDoesNotFailOnDeepSimilarNamespaces(): mixed
```











***

### testFindWithDoubleColonInNameThrowsException



```php
public testFindWithDoubleColonInNameThrowsException(): mixed
```











***

### testSetCatchExceptions



```php
public testSetCatchExceptions(): mixed
```











***

### testLegacyAsText



```php
public testLegacyAsText(): mixed
```











***

### testLegacyAsXml



```php
public testLegacyAsXml(): mixed
```











***

### testRenderException



```php
public testRenderException(): mixed
```











***

### testRenderExceptionWithDoubleWidthCharacters



```php
public testRenderExceptionWithDoubleWidthCharacters(): mixed
```











***

### testRenderExceptionEscapesLines



```php
public testRenderExceptionEscapesLines(): mixed
```











***

### testRenderExceptionLineBreaks



```php
public testRenderExceptionLineBreaks(): mixed
```











***

### testRun



```php
public testRun(): mixed
```











***

### testVerboseValueNotBreakArguments

Issue #9285.

```php
public testVerboseValueNotBreakArguments(): mixed
```

If the "verbose" option is just before an argument in ArgvInput,
an argument value should not be treated as verbosity value.
This test will fail with "Not enough arguments." if broken









***

### testRunReturnsIntegerExitCode



```php
public testRunReturnsIntegerExitCode(): mixed
```











***

### testRunDispatchesIntegerExitCode



```php
public testRunDispatchesIntegerExitCode(): mixed
```











***

### testRunReturnsExitCodeOneForExceptionCodeZero



```php
public testRunReturnsExitCodeOneForExceptionCodeZero(): mixed
```











***

### testRunDispatchesExitCodeOneForExceptionCodeZero



```php
public testRunDispatchesExitCodeOneForExceptionCodeZero(): mixed
```











***

### testAddingOptionWithDuplicateShortcut



```php
public testAddingOptionWithDuplicateShortcut(): mixed
```











***

### testAddingAlreadySetDefinitionElementData



```php
public testAddingAlreadySetDefinitionElementData(mixed $def): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **mixed** |  |




***

### getAddingAlreadySetDefinitionElementData



```php
public getAddingAlreadySetDefinitionElementData(): mixed
```











***

### testGetDefaultHelperSetReturnsDefaultValues



```php
public testGetDefaultHelperSetReturnsDefaultValues(): mixed
```











***

### testAddingSingleHelperSetOverwritesDefaultValues



```php
public testAddingSingleHelperSetOverwritesDefaultValues(): mixed
```











***

### testOverwritingDefaultHelperSetOverwritesDefaultValues



```php
public testOverwritingDefaultHelperSetOverwritesDefaultValues(): mixed
```











***

### testGetDefaultInputDefinitionReturnsDefaultValues



```php
public testGetDefaultInputDefinitionReturnsDefaultValues(): mixed
```











***

### testOverwritingDefaultInputDefinitionOverwritesDefaultValues



```php
public testOverwritingDefaultInputDefinitionOverwritesDefaultValues(): mixed
```











***

### testSettingCustomInputDefinitionOverwritesDefaultValues



```php
public testSettingCustomInputDefinitionOverwritesDefaultValues(): mixed
```











***

### testRunWithDispatcher



```php
public testRunWithDispatcher(): mixed
```











***

### testRunWithExceptionAndDispatcher



```php
public testRunWithExceptionAndDispatcher(): mixed
```











***

### testRunDispatchesAllEventsWithException



```php
public testRunDispatchesAllEventsWithException(): mixed
```











***

### testRunDispatchesAllEventsWithExceptionInListener



```php
public testRunDispatchesAllEventsWithExceptionInListener(): mixed
```











***

### testRunWithError



```php
public testRunWithError(): mixed
```











***

### testRunWithErrorAndDispatcher



```php
public testRunWithErrorAndDispatcher(): mixed
```











***

### testRunDispatchesAllEventsWithError



```php
public testRunDispatchesAllEventsWithError(): mixed
```











***

### testRunWithErrorFailingStatusCode



```php
public testRunWithErrorFailingStatusCode(): mixed
```











***

### testRunWithDispatcherSkippingCommand



```php
public testRunWithDispatcherSkippingCommand(): mixed
```











***

### testRunWithDispatcherAccessingInputOptions



```php
public testRunWithDispatcherAccessingInputOptions(): mixed
```











***

### testRunWithDispatcherAddingInputOptions



```php
public testRunWithDispatcherAddingInputOptions(): mixed
```











***

### testTerminalDimensions



```php
public testTerminalDimensions(): mixed
```











***

### testSetRunCustomDefaultCommand



```php
public testSetRunCustomDefaultCommand(): mixed
```











***

### testSetRunCustomDefaultCommandWithOption



```php
public testSetRunCustomDefaultCommandWithOption(): mixed
```











***

### testCanCheckIfTerminalIsInteractive



```php
public testCanCheckIfTerminalIsInteractive(): mixed
```











***

### getDispatcher



```php
protected getDispatcher(mixed $skipCommand = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$skipCommand` | **mixed** |  |




***

### testErrorIsRethrownIfNotHandledByConsoleErrorEventWithCatchingEnabled



```php
public testErrorIsRethrownIfNotHandledByConsoleErrorEventWithCatchingEnabled(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
