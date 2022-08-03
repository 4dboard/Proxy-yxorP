<?php namespace yxorP\app\lib\proxy\psr7;

use BadMethodCallException;
use JetBrains\PhpStorm\Pure;
use LogicException;
use yxorP\app\lib\psr\http\message\streamInterface;

/**
 * @property $_fn_getMetadata
 * @property $_fn_getContents
 * @property $_fn_read
 * @property $_fn_isReadable
 * @property $_fn_write
 * @property $_fn_isWritable
 * @property $_fn_seek
 * @property $_fn_rewind
 * @property $_fn_isSeekable
 * @property $_fn_eof
 * @property $_fn_tell
 * @property $_fn_getSize
 * @property $_fn_detach
 * @property $_fn_close
 * @property $_fn___toString
 * @property array $methods
 */
class fnStream implements streamInterface
{
    private static $slots = ['__toString', 'close', 'detach', 'rewind', 'getSize', 'tell', 'eof', 'isSeekable', 'seek', 'isWritable', 'write', 'isReadable', 'read', 'getContents', 'getMetadata'];

    public function __construct(array $methods)
    {
        $this->methods = $methods;
        foreach ($methods as $name => $fn) {
            $this->{'_fn_' . $name} = $fn;
        }
    }

    #[Pure] public static function decorate(streamInterface $stream, array $methods)
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
