***

# QuestionHelperTest





* Full name: `\Symfony\Component\Console\Tests\Helper\QuestionHelperTest`
* Parent class: [`TestCase`](../../../../../PHPUnit/Framework/TestCase.md)




## Methods


### testAskChoice



```php
public testAskChoice(): mixed
```











***

### testAskChoiceNonInteractive



```php
public testAskChoiceNonInteractive(): mixed
```











***

### testAsk



```php
public testAsk(): mixed
```











***

### testAskWithAutocomplete



```php
public testAskWithAutocomplete(): mixed
```











***

### testAskWithAutocompleteWithNonSequentialKeys



```php
public testAskWithAutocompleteWithNonSequentialKeys(): mixed
```











***

### testAskWithAutocompleteWithExactMatch



```php
public testAskWithAutocompleteWithExactMatch(): mixed
```











***

### testAutocompleteWithTrailingBackslash



```php
public testAutocompleteWithTrailingBackslash(): mixed
```











***

### testAskHiddenResponse



```php
public testAskHiddenResponse(): mixed
```











***

### testAskConfirmation



```php
public testAskConfirmation(mixed $question, mixed $expected, mixed $default = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **mixed** |  |
| `$expected` | **mixed** |  |
| `$default` | **mixed** |  |




***

### getAskConfirmationData



```php
public getAskConfirmationData(): mixed
```











***

### testAskConfirmationWithCustomTrueAnswer



```php
public testAskConfirmationWithCustomTrueAnswer(): mixed
```











***

### testAskAndValidate



```php
public testAskAndValidate(): mixed
```











***

### testSelectChoiceFromSimpleChoices



```php
public testSelectChoiceFromSimpleChoices(mixed $providedAnswer, mixed $expectedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$providedAnswer` | **mixed** |  |
| `$expectedValue` | **mixed** |  |




***

### simpleAnswerProvider



```php
public simpleAnswerProvider(): mixed
```











***

### testSpecialCharacterChoiceFromMultipleChoiceList



```php
public testSpecialCharacterChoiceFromMultipleChoiceList(mixed $providedAnswer, mixed $expectedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$providedAnswer` | **mixed** |  |
| `$expectedValue` | **mixed** |  |




***

### specialCharacterInMultipleChoice



```php
public specialCharacterInMultipleChoice(): mixed
```











***

### testChoiceFromChoicelistWithMixedKeys



```php
public testChoiceFromChoicelistWithMixedKeys(mixed $providedAnswer, mixed $expectedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$providedAnswer` | **mixed** |  |
| `$expectedValue` | **mixed** |  |




***

### mixedKeysChoiceListAnswerProvider



```php
public mixedKeysChoiceListAnswerProvider(): mixed
```











***

### testSelectChoiceFromChoiceList



```php
public testSelectChoiceFromChoiceList(mixed $providedAnswer, mixed $expectedValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$providedAnswer` | **mixed** |  |
| `$expectedValue` | **mixed** |  |




***

### testAmbiguousChoiceFromChoicelist



```php
public testAmbiguousChoiceFromChoicelist(): mixed
```











***

### answerProvider



```php
public answerProvider(): mixed
```











***

### testNoInteraction



```php
public testNoInteraction(): mixed
```











***

### testChoiceOutputFormattingQuestionForUtf8Keys



```php
public testChoiceOutputFormattingQuestionForUtf8Keys(): mixed
```











***

### testAskThrowsExceptionOnMissingInput



```php
public testAskThrowsExceptionOnMissingInput(): mixed
```











***

### testAskThrowsExceptionOnMissingInputWithValidator



```php
public testAskThrowsExceptionOnMissingInputWithValidator(): mixed
```











***

### testEmptyChoices



```php
public testEmptyChoices(): mixed
```











***

### testTraversableAutocomplete



```php
public testTraversableAutocomplete(): mixed
```











***

### getInputStream



```php
protected getInputStream(mixed $input): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### createOutputInterface



```php
protected createOutputInterface(): mixed
```











***

### createInputInterfaceMock



```php
protected createInputInterfaceMock(mixed $interactive = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interactive` | **mixed** |  |




***

### hasSttyAvailable



```php
private hasSttyAvailable(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
