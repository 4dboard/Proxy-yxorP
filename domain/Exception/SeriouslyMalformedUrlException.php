<?php namespace Pdp\Exception;

use InvalidArgumentException;
use function sprintf;

class SeriouslyMalformedUrlException extends InvalidArgumentException implements PdpException
{
    public function __construct($malformedUrl = '', $code = 0, $previous = null)
    {
        $message = sprintf('"%s" is one seriously malformed url.', $malformedUrl);
        parent::__construct($message, $code, $previous);
    }
}