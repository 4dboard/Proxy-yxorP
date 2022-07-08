<?php namespace yxorP\proxy\Psr7;

use yxorP\psr\Http\Message\StreamInterface;

class InflateStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function __construct(StreamInterface $stream)
    {
        $header = $stream->read(10);
        $filenameHeaderLength = $this->getLengthOfPossibleFilenameHeader($stream, $header);
        $stream = new LimitStream($stream, -1, 10 + $filenameHeaderLength);
        $resource = StreamWrapper::getResource($stream);
        stream_filter_append($resource, 'zlib.inflate', STREAM_FILTER_READ);
        $this->stream = $stream->isSeekable() ? new Stream($resource) : new NoSeekStream(new Stream($resource));
    }

    private function getLengthOfPossibleFilenameHeader(StreamInterface $stream, $header): int
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