<?php namespace GuzzleHttp\Psr7;

use BadMethodCallException;
use JetBrains\PhpStorm\Pure;
use LogicException;
use Psr\Http\Message\StreamInterface;

class FnStream implements StreamInterface
{
    private static array $slots = ['__toString', 'close', 'detach', 'rewind', 'getSize', 'tell', 'eof', 'isSeekable', 'seek', 'isWritable', 'write', 'isReadable', 'read', 'getContents', 'getMetadata'];
    private array $methods;

    public function __construct(array $methods)
    {
        $this->methods = $methods;
        foreach ($methods as $name => $fn) {
            $this->{'_fn_' . $name} = $fn;
        }
    }

    #[Pure] public static function decorate(StreamInterface $stream, array $methods): FnStream
    {
        foreach (array_diff(self::$slots, array_keys($methods)) as $diff) {
            $methods[$diff] = [$stream, $diff];
        }
        return new self($methods);
    }

    public function __get($name)
    {
        throw new BadMethodCallException(str_replace('_fn_', '', $name) . '() is not implemented in the FnStream');
    }

    public function __destruct()
    {
        if (isset($this->_fn_close)) {
            call_user_func($this->_fn_close);
        }
    }

    public function __wakeup()
    {
        throw new LogicException('FnStream should never be unserialized');
    }

    public function __toString()
    {
        return call_user_func($this->_fn___toString);
    }

    public function close()
    {
        return call_user_func($this->_fn_close);
    }

    public function detach()
    {
        return call_user_func($this->_fn_detach);
    }

    public function getSize()
    {
        return call_user_func($this->_fn_getSize);
    }

    public function tell()
    {
        return call_user_func($this->_fn_tell);
    }

    public function eof()
    {
        return call_user_func($this->_fn_eof);
    }

    public function isSeekable()
    {
        return call_user_func($this->_fn_isSeekable);
    }

    public function rewind()
    {
        call_user_func($this->_fn_rewind);
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        call_user_func($this->_fn_seek, $offset, $whence);
    }

    public function isWritable()
    {
        return call_user_func($this->_fn_isWritable);
    }

    public function write($string)
    {
        return call_user_func($this->_fn_write, $string);
    }

    public function isReadable()
    {
        return call_user_func($this->_fn_isReadable);
    }

    public function read($length)
    {
        return call_user_func($this->_fn_read, $length);
    }

    public function getContents()
    {
        return call_user_func($this->_fn_getContents);
    }

    public function getMetadata($key = null)
    {
        return call_user_func($this->_fn_getMetadata, $key);
    }
}