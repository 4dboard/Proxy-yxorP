<?php /* yxorP */

namespace Predis\Response;

use JetBrains\PhpStorm\Pure;

class Error implements ErrorInterface
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getErrorType()
    {
        [$errorType,] = explode(' ', $this->getMessage(), 2);

        return $errorType;
    }

    public function getMessage()
    {
        return $this->message;
    }

    #[Pure] public function __toString()
    {
        return $this->getMessage();
    }
}
