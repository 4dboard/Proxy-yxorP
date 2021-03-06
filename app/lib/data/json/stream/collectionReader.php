<?php namespace yxorP\app\lib\data\json\stream;

use Generator;
use InvalidArgumentException;

class collectionReader
{
    const CHUNK_SIZE = 8192;
    protected $resource;
    protected bool $asArray = false;
    protected string $buffer = '';
    protected int $nestingLevel = 0;

    public function __construct(string $path, bool $asArray = true)
    {
        if (!file_exists($path)) {
            throw new InvalidArgumentException('There is no file at given path');
        }
        $this->asArray = $asArray;
        $this->resource = fopen($path, 'rb');
    }

    public function get(): Generator
    {
        $this->buffer = '';
        $this->nestingLevel = 0;
        rewind($this->resource);
        while (!feof($this->resource)) {
            $chunk = fread($this->resource, self::CHUNK_SIZE);
            yield from $this->parseChunk($chunk);
        }
    }

    private function parseChunk($chunk): Generator
    {
        $this->buffer .= $chunk;
        $start = 0;
        $keepFrom = 0;
        $yielded = 0;
        $split = mb_str_split($this->buffer);
        foreach ($split as $position => $char) {
            if ($this->nestingLevel === 0 && $char === '[') {
                continue;
            }
            if ($this->nestingLevel === 0 && $char === ']') {
                break;
            }
            if ($char === '{') {
                if ($this->nestingLevel === 0) {
                    $start = $position;
                }
                $this->nestingLevel++;
            } elseif ($char === '}') {
                $this->nestingLevel--;
                if ($this->nestingLevel === 0) {
                    $keepFrom = $position + 1;
                    yield json_decode(mb_substr($this->buffer, $start, $position - $start + 1), $this->asArray);
                    $yielded++;
                }
            }
        }
        if ($yielded === 0) {
            $this->nestingLevel = 0;
        }
        $this->buffer = mb_substr($this->buffer, $keepFrom);
    }

    public function __destruct()
    {
        $this->close();
    }

    public function close(): void
    {
        if (is_resource($this->resource)) {
            fclose($this->resource);
        }
    }
}
