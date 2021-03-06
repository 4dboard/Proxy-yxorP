<?php namespace yxorP\app\lib\proxy\psr7;

use RuntimeException;
use yxorP\app\lib\psr\http\message\streamInterface;

class bufferStream implements streamInterface
{
    private mixed $hwm;
    private string $buffer = '';

    public function __construct($hwm = 16384)
    {
        $this->hwm = $hwm;
    }

    public function __toString()
    {
        return $this->getContents();
    }

    public function getContents(): string
    {
        $buffer = $this->buffer;
        $this->buffer = '';
        return $buffer;
    }

    public function detach()
    {
        $this->close();
    }

    public function close()
    {
        $this->buffer = '';
    }

    public function getSize(): ?int
    {
        return strlen($this->buffer);
    }

    public function isReadable(): bool
    {
        return true;
    }

    public function isWritable(): bool
    {
        return true;
    }

    public function isSeekable(): bool
    {
        return false;
    }

    public function rewind()
    {
        $this->seek(0);
    }

    public function seek(int $offset, int $whence = SEEK_SET)
    {
        throw new RuntimeException('Cannot seek a BufferStream');
    }

    public function eof(): bool
    {
        return strlen($this->buffer) === 0;
    }

    public function tell(): int
    {
        throw new RuntimeException('Cannot determine the position of a BufferStream');
    }

    public function read(int $length): string
    {
        $currentLength = strlen($this->buffer);
        if ($length >= $currentLength) {
            $result = $this->buffer;
            $this->buffer = '';
        } else {
            $result = substr($this->buffer, 0, $length);
            $this->buffer = substr($this->buffer, $length);
        }
        return $result;
    }

    public function write(string $string): int
    {
        $this->buffer .= $string;
        if (strlen($this->buffer) >= $this->hwm) {
            return false;
        }
        return strlen($string);
    }

    public function getMetadata(string $key = null)
    {
        if ($key === 'hwm') {
            return $this->hwm;
        }
        return $key ? null : [];
    }
}
