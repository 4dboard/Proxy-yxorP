<?php /* yxorP */


namespace Predis\Transaction;

use Predis\PredisException;


class AbortedMultiExecException extends PredisException
{
    private MultiExec $transaction;


    public function __construct(MultiExec $transaction, $message, $code = null)
    {
        parent::__construct($message, $code);
        $this->transaction = $transaction;
    }


    public function getTransaction(): MultiExec
    {
        return $this->transaction;
    }
}
