***

# ProcessTest

* Full name: `\Symfony\Component\Process\Tests\ProcessTest`
* Parent class: [`TestCase`](../../../../PHPUnit/Framework/TestCase.md)

## Properties

### phpBin

```php
private static $phpBin
```

* This property is **static**.

***

### process

```php
private static $process
```

* This property is **static**.

***

### sigchild

```php
private static $sigchild
```

* This property is **static**.

***

### notEnhancedSigchild

```php
private static $notEnhancedSigchild
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

### tearDown

```php
protected tearDown(): mixed
```

***

### testThatProcessDoesNotThrowWarningDuringRun

```php
public testThatProcessDoesNotThrowWarningDuringRun(): mixed
```

***

### testNegativeTimeoutFromConstructor

```php
public testNegativeTimeoutFromConstructor(): mixed
```

***

### testNegativeTimeoutFromSetter

```php
public testNegativeTimeoutFromSetter(): mixed
```

***

### testFloatAndNullTimeout

```php
public testFloatAndNullTimeout(): mixed
```

***

### testStopWithTimeoutIsActuallyWorking

```php
public testStopWithTimeoutIsActuallyWorking(): mixed
```

***

### testAllOutputIsActuallyReadOnTermination

```php
public testAllOutputIsActuallyReadOnTermination(): mixed
```

***

### testCallbacksAreExecutedWithStart

```php
public testCallbacksAreExecutedWithStart(): mixed
```

***

### testProcessResponses

tests results from sub processes.

```php
public testProcessResponses(mixed $expected, mixed $getter, mixed $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$getter` | **mixed** |  |
| `$code` | **mixed** |  |

***

### testProcessPipes

tests results from sub processes.

```php
public testProcessPipes(mixed $code, mixed $size): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$size` | **mixed** |  |

***

### testSetStreamAsInput

```php
public testSetStreamAsInput(mixed $code, mixed $size): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$size` | **mixed** |  |

***

### testLiveStreamAsInput

```php
public testLiveStreamAsInput(): mixed
```

***

### testSetInputWhileRunningThrowsAnException

```php
public testSetInputWhileRunningThrowsAnException(): mixed
```

***

### testInvalidInput

```php
public testInvalidInput(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### provideInvalidInputValues

```php
public provideInvalidInputValues(): mixed
```

***

### testValidInput

```php
public testValidInput(mixed $expected, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$value` | **mixed** |  |

***

### provideInputValues

```php
public provideInputValues(): mixed
```

***

### testLegacyValidInput

```php
public testLegacyValidInput(mixed $expected, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$value` | **mixed** |  |

***

### provideLegacyInputValues

```php
public provideLegacyInputValues(): mixed
```

***

### chainedCommandsOutputProvider

```php
public chainedCommandsOutputProvider(): mixed
```

***

### testChainedCommandsOutput

```php
public testChainedCommandsOutput(mixed $expected, mixed $operator, mixed $input): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **mixed** |  |
| `$operator` | **mixed** |  |
| `$input` | **mixed** |  |

***

### testCallbackIsExecutedForOutput

```php
public testCallbackIsExecutedForOutput(): mixed
```

***

### testGetErrorOutput

```php
public testGetErrorOutput(): mixed
```

***

### testFlushErrorOutput

```php
public testFlushErrorOutput(): mixed
```

***

### testIncrementalOutput

```php
public testIncrementalOutput(mixed $getOutput, mixed $getIncrementalOutput, mixed $uri): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$getOutput` | **mixed** |  |
| `$getIncrementalOutput` | **mixed** |  |
| `$uri` | **mixed** |  |

***

### provideIncrementalOutput

```php
public provideIncrementalOutput(): mixed
```

***

### testGetOutput

```php
public testGetOutput(): mixed
```

***

### testFlushOutput

```php
public testFlushOutput(): mixed
```

***

### testZeroAsOutput

```php
public testZeroAsOutput(): mixed
```

***

### testExitCodeCommandFailed

```php
public testExitCodeCommandFailed(): mixed
```

***

### testTTYCommand

```php
public testTTYCommand(): mixed
```

***

### testTTYCommandExitCode

```php
public testTTYCommandExitCode(): mixed
```

***

### testTTYInWindowsEnvironment

```php
public testTTYInWindowsEnvironment(): mixed
```

***

### testExitCodeTextIsNullWhenExitCodeIsNull

```php
public testExitCodeTextIsNullWhenExitCodeIsNull(): mixed
```

***

### testPTYCommand

```php
public testPTYCommand(): mixed
```

***

### testMustRun

```php
public testMustRun(): mixed
```

***

### testSuccessfulMustRunHasCorrectExitCode

```php
public testSuccessfulMustRunHasCorrectExitCode(): mixed
```

***

### testMustRunThrowsException

```php
public testMustRunThrowsException(): mixed
```

***

### testExitCodeText

```php
public testExitCodeText(): mixed
```

***

### testStartIsNonBlocking

```php
public testStartIsNonBlocking(): mixed
```

***

### testUpdateStatus

```php
public testUpdateStatus(): mixed
```

***

### testGetExitCodeIsNullOnStart

```php
public testGetExitCodeIsNullOnStart(): mixed
```

***

### testGetExitCodeIsNullOnWhenStartingAgain

```php
public testGetExitCodeIsNullOnWhenStartingAgain(): mixed
```

***

### testGetExitCode

```php
public testGetExitCode(): mixed
```

***

### testStatus

```php
public testStatus(): mixed
```

***

### testStop

```php
public testStop(): mixed
```

***

### testIsSuccessful

```php
public testIsSuccessful(): mixed
```

***

### testIsSuccessfulOnlyAfterTerminated

```php
public testIsSuccessfulOnlyAfterTerminated(): mixed
```

***

### testIsNotSuccessful

```php
public testIsNotSuccessful(): mixed
```

***

### testProcessIsNotSignaled

```php
public testProcessIsNotSignaled(): mixed
```

***

### testProcessWithoutTermSignal

```php
public testProcessWithoutTermSignal(): mixed
```

***

### testProcessIsSignaledIfStopped

```php
public testProcessIsSignaledIfStopped(): mixed
```

***

### testProcessThrowsExceptionWhenExternallySignaled

```php
public testProcessThrowsExceptionWhenExternallySignaled(): mixed
```

***

### testRestart

```php
public testRestart(): mixed
```

***

### testRunProcessWithTimeout

```php
public testRunProcessWithTimeout(): mixed
```

***

### testCheckTimeoutOnNonStartedProcess

```php
public testCheckTimeoutOnNonStartedProcess(): mixed
```

***

### testCheckTimeoutOnTerminatedProcess

```php
public testCheckTimeoutOnTerminatedProcess(): mixed
```

***

### testCheckTimeoutOnStartedProcess

```php
public testCheckTimeoutOnStartedProcess(): mixed
```

***

### testIdleTimeout

```php
public testIdleTimeout(): mixed
```

***

### testIdleTimeoutNotExceededWhenOutputIsSent

```php
public testIdleTimeoutNotExceededWhenOutputIsSent(): mixed
```

***

### testStartAfterATimeout

```php
public testStartAfterATimeout(): mixed
```

***

### testGetPid

```php
public testGetPid(): mixed
```

***

### testGetPidIsNullBeforeStart

```php
public testGetPidIsNullBeforeStart(): mixed
```

***

### testGetPidIsNullAfterRun

```php
public testGetPidIsNullAfterRun(): mixed
```

***

### testSignal

```php
public testSignal(): mixed
```

***

### testExitCodeIsAvailableAfterSignal

```php
public testExitCodeIsAvailableAfterSignal(): mixed
```

***

### testSignalProcessNotRunning

```php
public testSignalProcessNotRunning(): mixed
```

***

### testMethodsThatNeedARunningProcess

```php
public testMethodsThatNeedARunningProcess(mixed $method): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |

***

### provideMethodsThatNeedARunningProcess

```php
public provideMethodsThatNeedARunningProcess(): mixed
```

***

### testMethodsThatNeedATerminatedProcess

```php
public testMethodsThatNeedATerminatedProcess(mixed $method): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |

***

### provideMethodsThatNeedATerminatedProcess

```php
public provideMethodsThatNeedATerminatedProcess(): mixed
```

***

### testWrongSignal

```php
public testWrongSignal(mixed $signal): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signal` | **mixed** |  |

***

### provideWrongSignal

```php
public provideWrongSignal(): mixed
```

***

### testDisableOutputDisablesTheOutput

```php
public testDisableOutputDisablesTheOutput(): mixed
```

***

### testDisableOutputWhileRunningThrowsException

```php
public testDisableOutputWhileRunningThrowsException(): mixed
```

***

### testEnableOutputWhileRunningThrowsException

```php
public testEnableOutputWhileRunningThrowsException(): mixed
```

***

### testEnableOrDisableOutputAfterRunDoesNotThrowException

```php
public testEnableOrDisableOutputAfterRunDoesNotThrowException(): mixed
```

***

### testDisableOutputWhileIdleTimeoutIsSet

```php
public testDisableOutputWhileIdleTimeoutIsSet(): mixed
```

***

### testSetIdleTimeoutWhileOutputIsDisabled

```php
public testSetIdleTimeoutWhileOutputIsDisabled(): mixed
```

***

### testSetNullIdleTimeoutWhileOutputIsDisabled

```php
public testSetNullIdleTimeoutWhileOutputIsDisabled(): mixed
```

***

### testStartWithACallbackAndDisabledOutput

```php
public testStartWithACallbackAndDisabledOutput(mixed $startMethod, mixed $exception, mixed $exceptionMessage): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$startMethod` | **mixed** |  |
| `$exception` | **mixed** |  |
| `$exceptionMessage` | **mixed** |  |

***

### provideStartMethods

```php
public provideStartMethods(): mixed
```

***

### testGetOutputWhileDisabled

```php
public testGetOutputWhileDisabled(mixed $fetchMethod): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fetchMethod` | **mixed** |  |

***

### provideOutputFetchingMethods

```php
public provideOutputFetchingMethods(): mixed
```

***

### testStopTerminatesProcessCleanly

```php
public testStopTerminatesProcessCleanly(): mixed
```

***

### testKillSignalTerminatesProcessCleanly

```php
public testKillSignalTerminatesProcessCleanly(): mixed
```

***

### testTermSignalTerminatesProcessCleanly

```php
public testTermSignalTerminatesProcessCleanly(): mixed
```

***

### responsesCodeProvider

```php
public responsesCodeProvider(): mixed
```

***

### pipesCodeProvider

```php
public pipesCodeProvider(): mixed
```

***

### testIncrementalOutputDoesNotRequireAnotherCall

```php
public testIncrementalOutputDoesNotRequireAnotherCall(mixed $stream, mixed $method): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |
| `$method` | **mixed** |  |

***

### provideVariousIncrementals

```php
public provideVariousIncrementals(): mixed
```

***

### getProcess

```php
private getProcess(string $commandline, string|null $cwd = null, array|null $env = null, string|null $input = null, int $timeout = 60, array $options = array()): \Symfony\Component\Process\Process
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commandline` | **string** |  |
| `$cwd` | **string&#124;null** |  |
| `$env` | **array&#124;null** |  |
| `$input` | **string&#124;null** |  |
| `$timeout` | **int** |  |
| `$options` | **array** |  |

***

### skipIfNotEnhancedSigchild

```php
private skipIfNotEnhancedSigchild(mixed $expectException = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectException` | **mixed** |  |

yxorP::get('REQUEST')
