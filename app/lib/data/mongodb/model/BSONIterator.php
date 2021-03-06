<?php
/*
 * Copyright 2018-present MongoDB, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace yxorP\app\lib\data\mongoDB\Model;

use Iterator;
use ReturnTypeWillChange;
use yxorP\app\lib\http\mongoDB\Exception\InvalidArgumentException;
use yxorP\app\lib\http\mongoDB\Exception\UnexpectedValueException;
use function is_array;
use function MongoDB\BSON\toPHP;
use function sprintf;
use function strlen;
use function substr;
use function unpack;

/**
 * Iterator for BSON documents.
 */
class BSONIterator implements Iterator
{
    /** @var integer */
    private static int $bsonSize = 4;

    /** @var string */
    private string $buffer;

    /** @var integer */
    private int $bufferLength;

    /** @var mixed */
    private mixed $current;

    /** @var integer */
    private int $key = 0;

    /** @var integer */
    private int $position = 0;

    /** @var array */
    private array $options;

    /**
     * Constructs a BSON Iterator.
     *
     * Supported options:
     *
     *  * typeMap (array): Type map for BSON deserialization.
     *
     * @param string $data Concatenated, valid, BSON-encoded documents
     * @param array $options Iterator options
     * @throws InvalidArgumentException for parameter/option parsing errors
     * @see http://php.net/manual/en/function.mongodb.bson-tophp.php
     * @internal
     */
    public function __construct(string $data, array $options = [])
    {
        if (isset($options['typeMap']) && !is_array($options['typeMap'])) {
            throw InvalidArgumentException::invalidType('"typeMap" option', $options['typeMap'], 'array');
        }

        if (!isset($options['typeMap'])) {
            $options['typeMap'] = [];
        }

        $this->buffer = $data;
        $this->bufferLength = strlen($data);
        $this->options = $options;
    }

    /**
     * @see http://php.net/iterator.current
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function current(): mixed
    {
        return $this->current;
    }

    /**
     * @see http://php.net/iterator.key
     * @return int
     */
    #[ReturnTypeWillChange]
    public function key(): int
    {
        return $this->key;
    }

    /**
     * @see http://php.net/iterator.next
     * @return void
     */
    #[ReturnTypeWillChange]
    public function next()
    {
        $this->key++;
        $this->current = null;
        $this->advance();
    }

    private function advance()
    {
        if ($this->position === $this->bufferLength) {
            return;
        }

        if ($this->bufferLength - $this->position < self::$bsonSize) {
            throw new UnexpectedValueException(sprintf('Expected at least %d bytes; %d remaining', self::$bsonSize, $this->bufferLength - $this->position));
        }

        [, $documentLength] = unpack('V', substr($this->buffer, $this->position, self::$bsonSize));

        if ($this->bufferLength - $this->position < $documentLength) {
            throw new UnexpectedValueException(sprintf('Expected %d bytes; %d remaining', $documentLength, $this->bufferLength - $this->position));
        }

        $this->current = toPHP(substr($this->buffer, $this->position, $documentLength), $this->options['typeMap']);
        $this->position += $documentLength;
    }

    /**
     * @see http://php.net/iterator.rewind
     * @return void
     */
    #[ReturnTypeWillChange]
    public function rewind()
    {
        $this->key = 0;
        $this->position = 0;
        $this->current = null;
        $this->advance();
    }

    /**
     * @see http://php.net/iterator.valid
     * @return boolean
     */
    #[ReturnTypeWillChange]
    public function valid(): bool
    {
        return $this->current !== null;
    }
}
