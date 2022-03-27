<?php /* yxorP */


namespace Predis\Response;

use Predis\PredisException;


class ServerException extends PredisException implements ErrorInterface
{

    public function getErrorType()
    {
        [$errorType,] = explode(' ', $this->getMessage(), 2);

        return $errorType;
    }


    public function toErrorResponse(): Error
    {
        return new Error($this->getMessage());
    }
}
