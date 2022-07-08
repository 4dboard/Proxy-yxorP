<?php namespace yxorP\proxy\Psr7;

use RuntimeException;
use yxorP\psr\Http\Message\StreamInterface;

class LimitStream implements StreamInterface
{
    use AStreamDecoratorTrait;

    private $offset;
    private $limit;

    public function __construct(StreamInterface $stream, $limit = -1, $offset = 0)
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

    public function tell(): int
    {
        return $this->stream->tell() - $this->offset;
    }

    public function seek(int $offset, int $whence = SEEK_SET): mixed
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

    public function read(int $length): string
    {
        if ($this->limit == -1) {
            return $this->stream->read($length);
        }
        $remaining = ($this->offset + $this->limit) - $this->stream->tell();
        if ($remaining > 0) {
            return $this->stream->read(min($remaining, $length));
        }
        return '';
    }

    public function eof(): bool
    {
        if ($this->stream->eof()) {
            return true;
        }
        if ($this->limit == -1) {
            return false;
        }
        return $this->stream->tell() >= $this->offset + $this->limit;
    }

    public function getSize(): mixed
    {
        if (null === ($length = $this->stream->getSize())) {
            return null;
        } elseif ($this->limit == -1) {
            return $length - $this->offset;
        } else {
            return min($this->limit, $length - $this->offset);
        }
    }
}