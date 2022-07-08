<?php namespace yxorP\proxy\Psr7;

use Exception;
use InvalidArgumentException;
use RuntimeException;
use yxorP\psr\Http\Message\StreamInterface;

class AppendStream implements StreamInterface
{
    private array $streams = [];
    private bool $seekable = true;
    private int $current = 0;
    private int $pos = 0;

    public function __construct(array $streams = [])
    {
        foreach ($streams as $stream) {
            $this->addStream($stream);
        }
    }

    public function addStream(StreamInterface $stream)
    {
        if (!$stream->isReadable()) {
            throw new InvalidArgumentException('Each stream must be readable');
        }
        if (!$stream->isSeekable()) {
            $this->seekable = false;
        }
        $this->streams[] = $stream;
    }

    public function isReadable(): bool
    {
        return true;
    }

    public function isSeekable(): bool
    {
        return $this->seekable;
    }

    public function __toString()
    {
        try {
            $this->rewind();
            return $this->getContents();
        } catch (Exception $e) {
            return '';
        }
    }

    public function rewind(): mixed
    {
        $this->seek(0);
    }

    public function seek($offset, $whence = SEEK_SET): mixed
    {
        if (!$this->seekable) {
            throw new RuntimeException('This AppendStream is not seekable');
        } elseif ($whence !== SEEK_SET) {
            throw new RuntimeException('The AppendStream can only seek with SEEK_SET');
        }
        $this->pos = $this->current = 0;
        foreach ($this->streams as $i => $stream) {
            try {
                $stream->rewind();
            } catch (Exception $e) {
                throw new RuntimeException('Unable to seek stream ' . $i . ' of the AppendStream', 0, $e);
            }
        }
        while ($this->pos < $offset && !$this->eof()) {
            $result = $this->read(min(8096, $offset - $this->pos));
            if ($result === '') {
                break;
            }
        }
    }

    public function eof(): bool
    {
        return !$this->streams || ($this->current >= count($this->streams) - 1 && $this->streams[$this->current]->eof());
    }

    public function read($length): string
    {
        $buffer = '';
        $total = count($this->streams) - 1;
        $remaining = $length;
        $progressToNext = false;
        while ($remaining > 0) {
            if ($progressToNext || $this->streams[$this->current]->eof()) {
                $progressToNext = false;
                if ($this->current === $total) {
                    break;
                }
                $this->current++;
            }
            $result = $this->streams[$this->current]->read($remaining);
            if ($result == null) {
                $progressToNext = true;
                continue;
            }
            $buffer .= $result;
            $remaining = $length - strlen($buffer);
        }
        $this->pos += strlen($buffer);
        return $buffer;
    }

    public function getContents(): string
    {
        return copy_to_string($this);
    }

    public function close(): mixed
    {
        $this->pos = $this->current = 0;
        $this->seekable = true;
        foreach ($this->streams as $stream) {
            $stream->close();
        }
        $this->streams = [];
    }

    public function detach(): mixed
    {
        $this->pos = $this->current = 0;
        $this->seekable = true;
        foreach ($this->streams as $stream) {
            $stream->detach();
        }
        $this->streams = [];
    }

    public function tell(): int
    {
        return $this->pos;
    }

    public function getSize(): ?int
    {
        $size = 0;
        foreach ($this->streams as $stream) {
            $s = $stream->getSize();
            if ($s === null) {
                return null;
            }
            $size += $s;
        }
        return $size;
    }

    public function isWritable(): bool
    {
        return false;
    }

    public function write($string): int
    {
        throw new RuntimeException('Cannot write to an AppendStream');
    }

    public function getMetadata($key = null): ?array
    {
        return $key ? null : [];
    }
}