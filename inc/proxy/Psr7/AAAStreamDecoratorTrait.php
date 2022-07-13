<?php

namespace yxorP\inc\proxy\Psr7;

use BadMethodCallException;
use Exception;
use UnexpectedValueException;
use yxorP\inc\psr\Http\Message\StreamInterface;

/**
 * Stream decorator trait
 * @property StreamInterface stream
 */
trait AAAStreamDecoratorTrait
{
    /**
     * @param StreamInterface $stream Stream to decorate
     */
    public function __construct(StreamInterface $stream)
    {
        $this->stream = $stream;
    }

    /**
     * Magic method used to create a new stream if streams are not added in
     * the constructor of a decorator (e.g., LazyOpenStream).
     *
     * @param string $name Name of the property (allows "stream" only).
     *
     * @return StreamInterface
     */
    public function __get(string $name)
    {
        if ($name == 'stream') {
            $this->stream = $this->createStream();
            return $this->stream;
        }

        throw new UnexpectedValueException("$name not found on class");
    }

    /**
     * Implement in subclasses to dynamically create streams when requested.
     *
     * @return StreamInterface
     * @throws BadMethodCallException
     */
    protected function createStream(): StreamInterface
    {
        throw new BadMethodCallException('Not implemented');
    }

    public function __toString()
    {
        try {
            if ($this->isSeekable()) {
                $this->seek(0);
            }
            return $this->getContents();
        } catch (Exception $e) {
            // Really, PHP? https://bugs.php.net/bug.php?id=53648
            trigger_error('StreamDecorator::__toString exception: '
                . $e, E_USER_ERROR);
            return '';
        }
    }

    public function isSeekable(): bool
    {
        return $this->stream->isSeekable();
    }

    public function seek(int $offset, int $whence = SEEK_SET)
    {
        $this->stream->seek($offset, $whence);
    }

    public function getContents(): string
    {
        return copy_to_string($this);
    }

    /**
     * Allow decorators to implement custom methods
     *
     * @param string $method Missing method name
     * @param array $args Method arguments
     *
     * @return mixed
     */
    public function __call(string $method, array $args)
    {
        $result = call_user_func_array([$this->stream, $method], $args);

        // Always return the wrapped object if the result is a return $this
        return $result === $this->stream ? $this : $result;
    }

    public function close()
    {
        $this->stream->close();
    }

    public function getMetadata(string $key = null)
    {
        return $this->stream->getMetadata($key);
    }

    public function detach()
    {
        return $this->stream->detach();
    }

    public function getSize(): ?int
    {
        return $this->stream->getSize();
    }

    public function eof(): bool
    {
        return $this->stream->eof();
    }

    public function tell(): int
    {
        return $this->stream->tell();
    }

    public function isReadable(): bool
    {
        return $this->stream->isReadable();
    }

    public function isWritable(): bool
    {
        return $this->stream->isWritable();
    }

    public function rewind()
    {
        $this->seek(0);
    }

    public function read(int $length): string
    {
        return $this->stream->read($length);
    }

    public function write(string $string): int
    {
        return $this->stream->write($string);
    }
}
