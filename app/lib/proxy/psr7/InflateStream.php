<?php namespace yxorP\app\lib\proxy\psr7;

use yxorP\app\lib\psr\http\message\streamInterface;

class inflateStream implements streamInterface
{
    use aStreamDecoratorTrait;

    public function __construct(streamInterface $stream)
    {
        $header = $stream->read(10);
        $filenameHeaderLength = $this->getLengthOfPossibleFilenameHeader($stream, $header);
        $stream = new limitStream($stream, -1, 10 + $filenameHeaderLength);
        $resource = streamWrapper::getResource($stream);
        stream_filter_append($resource, 'zlib.inflate', STREAM_FILTER_READ);
        $this->stream = $stream->isSeekable() ? new stream($resource) : new noSeekStream(new stream($resource));
    }

    private function getLengthOfPossibleFilenameHeader(streamInterface $stream, $header): int
    {
        $filename_header_length = 0;
        if (substr(bin2hex($header), 6, 2) === '08') {
            $filename_header_length = 1;
            while ($stream->read(1) !== chr(0)) {
                $filename_header_length++;
            }
        }
        return $filename_header_length;
    }
}
