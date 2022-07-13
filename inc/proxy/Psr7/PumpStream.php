<?php

namespace yxorP\inc\proxy\Psr7;

use Exception;
use RuntimeException;
use yxorP\inc\psr\Http\Message\StreamInterface;

/**
 * Provides a read only stream that pumps data from a PHP callable.
 *
 * When invoking the provided callable, the PumpStream will pass the amount of
 * data requested to read to the callable. The callable can choose to ignore
 * this value and return fewer or more bytes than requested. Any extra data
 * returned by the provided callable is buffered internally until drained using
 * the read() function of the PumpStream. The provided callable MUST return
 * false when there is no more data to read.
 */
class PumpStream implements StreamInterface
{
    /** @var callable */
    private $source;

    /** @var int */
    private mixed $size;

    /** @var int */
    private int $tellPos = 0;

    /** @var array */
    private mixed $metadata;

    /** @var BufferStream */
    private BufferStream $buffer;

    /**
     * @param callable $source Source of the stream data. The callable MAY
     *                         accept an integer argument used to control the
     *                         amount of data to return. The callable MUST
     *                         return a string when called, or false on error
     *                         or EOF.
     * @param array $options Stream options:
     *                         - metadata: Hash of metadata to use with stream.
     *                         - size: Size of the stream, if known.
     */
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

    public function seek(int $offset, int $whence = SEEK_SET)
    {
        throw new RuntimeException('Cannot seek a PumpStream');
    }

    public function isWritable(): bool
    {
        return false;
    }

    public function write(string $string): int
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

    public function read(int $length): string
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

    public function getMetadata(string $key = null)
    {
        if (!$key) {
            return $this->metadata;
        }

        return $this->metadata[$key] ?? null;
    }
}
