<?php namespace GuzzleHttp\Psr7;

use BadMethodCallException;
use Exception;
use Psr\Http\Message\StreamInterface;
use UnexpectedValueException;

trait StreamDecoratorTrait
{
    public function __construct(StreamInterface $stream)
    {
        $this->stream = $stream;
    }

    public function __get($name)
    {
        if ($name == 'stream') {
            $this->stream = $this->createStream();
            return $this->stream;
        }
        throw new UnexpectedValueException("$name not found on class");
    }

    public function __toString()
    {
        try {
            if ($this->isSeekable()) {
                $this->seek(0);
            }
            return $this->getContents();
        } catch (Exception $e) {
            trigger_error('StreamDecorator::__toString exception: ' . (string)$e->__toString(), E_USER_ERROR);
            return '';
        }
    }

    public function getContents()
    {
        return copy_to_string($this);
    }

    public function __call($method, array $args)
    {
        $result = call_user_func_array([$this->stream, $method], $args);
        return $result === $this->stream ? $this : $result;
    }

    public function close()
    {
        $this->stream->close();
    }

    public function getMetadata($key = null)
    {
        return $this->stream->getMetadata($key);
    }

    public function detach()
    {
        return $this->stream->detach();
    }

    public function getSize()
    {
        return $this->stream->getSize();
    }

    public function eof()
    {
        return $this->stream->eof();
    }

    public function tell()
    {
        return $this->stream->tell();
    }

    public function isReadable()
    {
        return $this->stream->isReadable();
    }

    public function isWritable()
    {
        return $this->stream->isWritable();
    }

    public function isSeekable()
    {
        return $this->stream->isSeekable();
    }

    public function rewind()
    {
        $this->seek(0);
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        $this->stream->seek($offset, $whence);
    }

    public function read($length)
    {
        return $this->stream->read($length);
    }

    public function write($string)
    {
        return $this->stream->write($string);
    }

    protected function createStream()
    {
        throw new BadMethodCallException('Not implemented');
    }
}