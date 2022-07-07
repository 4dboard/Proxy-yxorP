<?php namespace yxorp\domain\Exception;

use InvalidArgumentException;
use function sprintf;

class seriouslyMalformedUrlException extends InvalidArgumentException implements pdpException
{
    public function __construct($malformedUrl = '', $code = 0, $previous = null)
    {
        $message = sprintf('"%s" is one seriously malformed url.', $malformedUrl);
        parent::__construct($message, $code, $previous);
    }
}