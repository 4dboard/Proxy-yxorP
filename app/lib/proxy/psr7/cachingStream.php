<?php namespace yxorP\app\lib\proxy\psr7;

use InvalidArgumentException;
use yxorP\app\lib\psr\http\message\streamInterface;

class cachingStream implements streamInterface
{
    use aStreamDecoratorTrait;

    private $remoteStream;
    private $skipReadBytes = 0;

    public function __construct(streamInterface $stream, streamInterface $target = null)
    {
        $this->remoteStream = $stream;
        $this->stream = $target ?: new stream(fopen('php://temp', 'r+'));
    }

    public function rewind()
    {
        $this->seek(0);
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        if ($whence === SEEK_SET) {
            $byte = $offset;
        } elseif ($whence === SEEK_CUR) {
            $byte = $offset + $this->tell();
        } elseif ($whence === SEEK_END) {
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

    public function getSize()
    {
        return max($this->stream->getSize(), $this->remoteStream->getSize());
    }

    public function eof()
    {
        return $this->stream->eof() && $this->remoteStream->eof();
    }

    public function read($length)
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

    public function write($string)
    {
        $overflow = (strlen($string) + $this->tell()) - $this->remoteStream->tell();
        if ($overflow > 0) {
            $this->skipReadBytes += $overflow;
        }
        return $this->stream->write($string);
    }

    public function close()
    {
        $this->remoteStream->close() && $this->stream->close();
    }

    private function cacheEntireStream()
    {
        $target = new fnStream(['write' => 'strlen']);
        copy_to_stream($this, $target);
        return $this->tell();
    }
}
