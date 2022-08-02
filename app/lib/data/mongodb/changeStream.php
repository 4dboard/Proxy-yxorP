<?php namespace yxorP\app\lib\psr\http\mongoDB;

use Iterator;
use yxorP\app\lib\http\mongoDB\Driver\Exception\ConnectionException;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Exception\ServerException;
use yxorP\app\lib\http\mongoDB\Exception\ResumeTokenException;
use yxorP\app\lib\http\mongoDB\Model\ChangeStreamIterator;
use function call_user_func;
use function in_array;

class changeStream implements Iterator
{
    public const CURSOR_NOT_FOUND = 43;
    private static $cursorNotFound = 43;
    private static $resumableErrorCodes = [6, 7, 89, 91, 189, 262, 9001, 10107, 11600, 11602, 13435, 13436, 63, 150, 13388, 234, 133,];
    private static $wireVersionForResumableChangeStreamError = 9;
    private $resumeCallable;
    private $iterator;
    private $key = 0;
    private $hasAdvanced = false;

    public function __construct(ChangeStreamIterator $iterator, callable $resumeCallable)
    {
        $this->iterator = $iterator;
        $this->resumeCallable = $resumeCallable;
    }

    #[ReturnTypeWillChange] public function current()
    {
        return $this->iterator->current();
    }

    #[ReturnTypeWillChange] public function key()
    {
        if ($this->valid()) {
            return $this->key;
        }
        return null;
    }

    #[ReturnTypeWillChange] public function valid()
    {
        return $this->iterator->valid();
    }

    #[ReturnTypeWillChange] public function next()
    {
        try {
            $this->iterator->next();
            $this->onIteration($this->hasAdvanced);
        } catch (RuntimeException $e) {
            $this->resumeOrThrow($e);
        }
    }

    public function getCursorId()
    {
        return $this->iterator->getInnerIterator()->getId();
    }

    public function getResumeToken()
    {
        return $this->iterator->getResumeToken();
    }

    #[ReturnTypeWillChange] public function rewind()
    {
        try {
            $this->iterator->rewind();
            $this->onIteration(false);
        } catch (RuntimeException $e) {
            $this->resumeOrThrow($e);
        }
    }

    private function onIteration($incrementKey)
    {
        if ((string)$this->getCursorId() === '0') {
            $this->resumeCallable = null;
        }
        if (!$this->valid()) {
            return;
        }
        if ($incrementKey) {
            $this->key++;
        }
        $this->hasAdvanced = true;
    }

    private function resumeOrThrow(RuntimeException $exception)
    {
        if ($this->isResumableError($exception)) {
            $this->resume();
            return;
        }
        throw $exception;
    }

    private function isResumableError(RuntimeException $exception)
    {
        if ($exception instanceof ConnectionException) {
            return true;
        }
        if (!$exception instanceof ServerException) {
            return false;
        }
        if ($exception->getCode() === self::$cursorNotFound) {
            return true;
        }
        if (server_supports_feature($this->iterator->getServer(), self::$wireVersionForResumableChangeStreamError)) {
            return $exception->hasErrorLabel('ResumableChangeStreamError');
        }
        return in_array($exception->getCode(), self::$resumableErrorCodes);
    }

    private function resume()
    {
        $this->iterator = call_user_func($this->resumeCallable, $this->getResumeToken(), $this->hasAdvanced);
        $this->iterator->rewind();
        $this->onIteration($this->hasAdvanced);
    }
}