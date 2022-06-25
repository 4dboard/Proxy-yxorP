***

# ProcessFailedExceptionTest

* Full name: `\Symfony\Component\Process\Tests\ProcessFailedExceptionTest`
* Parent class: [`TestCase`](../../../../PHPUnit/Framework/TestCase.md)

## Methods

### testProcessFailedExceptionThrowsException

tests ProcessFailedException throws exception if the process was successful.

```php
public testProcessFailedExceptionThrowsException(): mixed
```

***

### testProcessFailedExceptionPopulatesInformationFromProcessOutput

tests ProcessFailedException uses information from process output to generate exception message.

```php
public testProcessFailedExceptionPopulatesInformationFromProcessOutput(): mixed
```

***

### testDisabledOutputInFailedExceptionDoesNotPopulateOutput

Tests that ProcessFailedException does not extract information from process output if it was previously disabled.

```php
public testDisabledOutputInFailedExceptionDoesNotPopulateOutput(): mixed
```

yxorP::get('REQUEST')
