<?php namespace yxorP\app\lib\proxy\psr7;

use RuntimeException;
use yxorP\app\lib\psr\http\message\streamInterface;

class limitStream implements streamInterface
{
    use aStreamDecoratorTrait;

    private $offset;
    private $limit;

    public function __construct(streamInterface $stream, $limit = -1, $offset = 0)
    {
        $this->stream = $stream;
        $this->setLimit($limit);
        $this->setOffset($offset);
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function setOffset($offset)
    {
        $current = $this->stream->tell();
        if ($current !== $offset) {
            if ($this->stream->isSeekable()) {
                $this->stream->seek($offset);
            } elseif ($current > $offset) {
                throw new RuntimeException("Could not seek to stream offset $offset");
            } else {
                $this->stream->read($offset - $current);
            }
        }
        $this->offset = $offset;
    }

    public function tell()
    {
        return $this->stream->tell() - $this->offset;
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        if ($whence !== SEEK_SET || $offset < 0) {
            throw new RuntimeException(sprintf('Cannot seek to offset %s with whence %s', $offset, $whence));
        }
        $offset += $this->offset;
        if ($this->limit !== -1) {
            if ($offset > $this->offset + $this->limit) {
                $offset = $this->offset + $this->limit;
            }
        }
        $this->stream->seek($offset);
    }

    public function read($length)
    {
        if ($this->limit === -1) {
            return $this->stream->read($length);
        }
        $remaining = ($this->offset + $this->limit) - $this->stream->tell();
        if ($remaining > 0) {
            return $this->stream->read(min($remaining, $length));
        }
        return '';
    }

    public function eof()
    {
        if ($this->stream->eof()) {
            return true;
        }
        if ($this->limit === -1) {
            return false;
        }
        return $this->stream->tell() >= $this->offset + $this->limit;
    }

    public function getSize()
    {
        if (null === ($length = $this->stream->getSize())) {
            return null;
        } elseif ($this->limit === -1) {
            return $length - $this->offset;
        } else {
            return min($this->limit, $length - $this->offset);
        }
    }
}
