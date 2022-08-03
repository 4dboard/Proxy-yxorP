<?php

namespace yxorP\app\lib\data\mongoDB\Operation;

use Throwable;
use yxorP\app\lib\http\mongoDB\Driver\Exception\RuntimeException;
use yxorP\app\lib\http\mongoDB\Driver\Session;
use function call_user_func;
use function time;

/**
 * @internal
 */
class WithTransaction
{
    /** @var callable */
    private $callback;

    /** @var array */
    private array $transactionOptions;

    /**
     * @param callable $callback A callback that will be invoked within the transaction
     * @param array $transactionOptions Additional options that are passed to Session::startTransaction
     * @see Session::startTransaction for supported transaction options
     *
     */
    public function __construct(callable $callback, array $transactionOptions = [])
    {
        $this->callback = $callback;
        $this->transactionOptions = $transactionOptions;
    }

    /**
     * Execute the operation in the given session
     *
     * This helper takes care of retrying the commit operation or the entire
     * transaction if an error occurs.
     *
     * If the commit fails because of an UnknownTransactionCommitResult error, the
     * commit is retried without re-invoking the callback.
     * If the commit fails because of a TransientTransactionError, the entire
     * transaction will be retried. In this case, the callback will be invoked
     * again. It is important that the logic inside the callback is idempotent.
     *
     * In case of failures, the commit or transaction are retried until 120 seconds
     * from the initial call have elapsed. After that, no retries will happen and
     * the helper will throw the last exception received from the driver.
     *
     * @param Session $session A session object as retrieved by Client::startSession
     * @return void
     * @throws Throwable
     * @see client::startSession
     */
    public function execute(Session $session)
    {
        $startTime = time();

        while (true) {
            $session->startTransaction($this->transactionOptions);

            try {
                call_user_func($this->callback, $session);
            } catch (Throwable $e) {
                if ($session->isInTransaction()) {
                    $session->abortTransaction();
                }

                if (
                    $e instanceof RuntimeException &&
                    $e->hasErrorLabel('TransientTransactionError') &&
                    !$this->isTransactionTimeLimitExceeded($startTime)
                ) {
                    continue;
                }

                throw $e;
            }

            if (!$session->isInTransaction()) {
                // Assume callback intentionally ended the transaction
                return;
            }

            while (true) {
                try {
                    $session->commitTransaction();
                } catch (RuntimeException $e) {
                    if (
                        $e->getCode() !== 50 /* MaxTimeMSExpired */ &&
                        $e->hasErrorLabel('UnknownTransactionCommitResult') &&
                        !$this->isTransactionTimeLimitExceeded($startTime)
                    ) {
                        // Retry committing the transaction
                        continue;
                    }

                    if (
                        $e->hasErrorLabel('TransientTransactionError') &&
                        !$this->isTransactionTimeLimitExceeded($startTime)
                    ) {
                        // Restart the transaction, invoking the callback again
                        continue 2;
                    }

                    throw $e;
                }

                // Commit was successful
                break;
            }

            // Transaction was successful
            break;
        }
    }

    /**
     * Returns whether the time limit for retrying transactions in the convenient transaction API has passed
     *
     * @param int $startTime The time the transaction was started
     * @return bool
     */
    private function isTransactionTimeLimitExceeded(int $startTime): bool
    {
        return time() - $startTime >= 120;
    }
}
