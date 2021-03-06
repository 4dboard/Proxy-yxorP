<?php
/*
 * Copyright 2016-present MongoDB, Inc.
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

namespace yxorP\app\lib\data\mongoDB\GridFS\Exception;

use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\http\mongoDB\Exception\RuntimeException;
use function sprintf;

class CorruptFileException extends RuntimeException
{
    /**
     * Thrown when a chunk is not found for an expected index.
     *
     * @param integer $expectedIndex Expected index number
     * @return self
     */
    #[Pure] public static function missingChunk(int $expectedIndex): CorruptFileException
    {
        return new static(sprintf('Chunk not found for index "%d"', $expectedIndex));
    }

    /**
     * Thrown when a chunk has an unexpected index number.
     *
     * @param integer $index Actual index number (i.e. "n" field)
     * @param integer $expectedIndex Expected index number
     * @return self
     */
    #[Pure] public static function unexpectedIndex(int $index, int $expectedIndex): CorruptFileException
    {
        return new static(sprintf('Expected chunk to have index "%d" but found "%d"', $expectedIndex, $index));
    }

    /**
     * Thrown when a chunk has an unexpected data size.
     *
     * @param integer $size Actual size (i.e. "data" field length)
     * @param integer $expectedSize Expected size
     * @return self
     */
    #[Pure] public static function unexpectedSize(int $size, int $expectedSize): CorruptFileException
    {
        return new static(sprintf('Expected chunk to have size "%d" but found "%d"', $expectedSize, $size));
    }
}
