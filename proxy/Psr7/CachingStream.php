<?php namespace yxorP\proxy\Psr7;

use InvalidArgumentException;
use yxorP\psr\Http\Message\StreamInterface;

class CachingStream implements StreamInterface
{
    use AStreamDecoratorTrait;

    private StreamInterface $remoteStream;
    private int $skipReadBytes = 0;

    public function __construct(StreamInterface $stream, StreamInterface $target = null)
    {
        $this->remoteStream = $stream;
        $this->stream = $target ?: new Stream(fopen('php://temp', 'r+'));
    }

    public function rewind(): mixed
    {
        $this->seek(0);
    }

    public function seek(int $offset, int $whence = SEEK_SET): mixed
    {
        if ($whence == SEEK_SET) {
            $byte = $offset;
        } elseif ($whence == SEEK_CUR) {
            $byte = $offset + $this->tell();
        } elseif ($whence == SEEK_END) {
            $size = $this->remoteStream->getSize();
            if ($size === null) {
                $size = $this->cacheEntireStream();
            }
            $byte = $size + $offset;
        } else {
            throw new InvalidArgumentException('Invalid whence');
        }
        $diff = $byte - $this->stream->getSize();
        if ($diff > 0) {
            while ($diff > 0 && !$this->remoteStream->eof()) {
                $this->read($diff);
                $diff = $byte - $this->stream->getSize();
            }
        } else {
            $this->stream->seek($byte);
        }
    }

    public function getSize(): mixed
    {
        return max($this->stream->getSize(), $this->remoteStream->getSize());
    }

    private function cacheEntireStream(): int
    {
        $target = new FnStream(['write' => 'strlen']);
        copy_to_stream($this, $target);
        return $this->tell();
    }

    public function eof(): bool
    {
        return $this->stream->eof() && $this->remoteStream->eof();
    }

    public function read(int $length): string
    {
        $data = $this->stream->read($length);
        $remaining = $length - strlen($data);
        if ($remaining) {
            $remoteData = $this->remoteStream->read($remaining + $this->skipReadBytes);
            if ($this->skipReadBytes) {
                $len = strlen($remoteData);
                $remoteData = substr($remoteData, $this->skipReadBytes);
                $this->skipReadBytes = max(0, $this->skipReadBytes - $len);
            }
            $data .= $remoteData;
            $this->stream->write($remoteData);
        }
        return $data;
    }

    public function write(string $string): int
    {
        $overflow = (strlen($string) + $this->tell()) - $this->remoteStream->tell();
        if ($overflow > 0) {
            $this->skipReadBytes += $overflow;
        }
        return $this->stream->write($string);
    }

    public function close(): mixed
    {
        $this->remoteStream->close() && $this->stream->close();
    }
}