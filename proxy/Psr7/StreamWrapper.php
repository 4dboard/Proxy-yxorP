<?php namespace yxorP\proxy\Psr7;

use InvalidArgumentException;
use yxorP\psr\Http\Message\StreamInterface;

class StreamWrapper
{
    public $context;
    private $stream;
    private $mode;

    public static function getResource(StreamInterface $stream): bool
    {
        self::register();
        if ($stream->isReadable()) {
            $mode = $stream->isWritable() ? 'r+' : 'r';
        } elseif ($stream->isWritable()) {
            $mode = 'w';
        } else {
            throw new InvalidArgumentException('The stream must be readable, ' . 'writable, or both.');
        }
        return fopen('proxy://stream', $mode, null, self::createStreamContext($stream));
    }

    public static function register()
    {
        if (!in_array('proxy', stream_get_wrappers())) {
            stream_wrapper_register('proxy', __CLASS__);
        }
    }

    public static function createStreamContext(StreamInterface $stream)
    {
        return stream_context_create(['proxy' => ['stream' => $stream]]);
    }

    public function stream_open($path, $mode, $options, &$opened_path): bool
    {
        $options = stream_context_get_options($this->context);
        if (!isset($options['proxy']['stream'])) {
            return false;
        }
        $this->mode = $mode;
        $this->stream = $options['proxy']['stream'];
        return true;
    }

    public function stream_read($count): string
    {
        return $this->stream->read($count);
    }

    public function stream_write($data): int
    {
        return $this->stream->write($data);
    }

    public function stream_tell(): int
    {
        return $this->stream->tell();
    }

    public function stream_eof(): bool
    {
        return $this->stream->eof();
    }

    public function stream_seek($offset, $whence): bool
    {
        $this->stream->seek($offset, $whence);
        return true;
    }

    public function stream_cast($cast_as)
    {
        $stream = clone($this->stream);
        return $stream->detach();
    }

    public function stream_stat(): array
    {
        static $modeMap = ['r' => 33060, 'rb' => 33060, 'r+' => 33206, 'w' => 33188, 'wb' => 33188];
        return ['dev' => 0, 'ino' => 0, 'mode' => $modeMap[$this->mode], 'nlink' => 0, 'uid' => 0, 'gid' => 0, 'rdev' => 0, 'size' => $this->stream->getSize() ?: 0, 'atime' => 0, 'mtime' => 0, 'ctime' => 0, 'blksize' => 0, 'blocks' => 0];
    }

    public function url_stat($path, $flags): array
    {
        return ['dev' => 0, 'ino' => 0, 'mode' => 0, 'nlink' => 0, 'uid' => 0, 'gid' => 0, 'rdev' => 0, 'size' => 0, 'atime' => 0, 'mtime' => 0, 'ctime' => 0, 'blksize' => 0, 'blocks' => 0];
    }
}