<?php namespace yxorP\proxy\Psr7;

use Exception;
use RuntimeException;
use yxorP\psr\Http\Message\StreamInterface;

class PumpStream implements StreamInterface
{
    private $source;
    private mixed $size;
    private int $tellPos = 0;
    private mixed $metadata;
    private BufferStream $buffer;

    public function __construct(callable $source, array $options = [])
    {
        $this->source = $source;
        $this->size = $options['size'] ?? null;
        $this->metadata = $options['metadata'] ?? [];
        $this->buffer = new BufferStream();
    }

    public function __toString()
    {
        try {
            return copy_to_string($this);
        } catch (Exception $e) {
            return '';
        }
    }

    public function close()
    {
        $this->detach();
    }

    public function detach()
    {
        $this->tellPos = false;
        $this->source = null;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function tell(): int
    {
        return $this->tellPos;
    }

    public function isSeekable(): bool
    {
        return false;
    }

    public function rewind()
    {
        $this->seek(0);
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        throw new RuntimeException('Cannot seek a PumpStream');
    }

    public function isWritable(): bool
    {
        return false;
    }

    public function write($string): int
    {
        throw new RuntimeException('Cannot write to a PumpStream');
    }

    public function isReadable(): bool
    {
        return true;
    }

    public function getContents(): string
    {
        $result = '';
        while (!$this->eof()) {
            $result .= $this->read(1000000);
        }
        return $result;
    }

    public function eof(): bool
    {
        return !$this->source;
    }

    public function read($length): string
    {
        $data = $this->buffer->read($length);
        $readLen = strlen($data);
        $this->tellPos += $readLen;
        $remaining = $length - $readLen;
        if ($remaining) {
            $this->pump($remaining);
            $data .= $this->buffer->read($remaining);
            $this->tellPos += strlen($data) - $readLen;
        }
        return $data;
    }

    private function pump($length)
    {
        if ($this->source) {
            do {
                $data = call_user_func($this->source, $length);
                if ($data === false || $data === null) {
                    $this->source = null;
                    return;
                }
                $this->buffer->write($data);
                $length -= strlen($data);
            } while ($length > 0);
        }
    }

    public function getMetadata($key = null)
    {
        if (!$key) {
            return $this->metadata;
        }
        return $this->metadata[$key] ?? null;
    }
}