<?php

namespace MongoDB\Tests\Operation;

use JetBrains\PhpStorm\Pure;
use MongoDB\Exception\InvalidArgumentException;
use MongoDB\Operation\FindOneAndDelete;

class FindOneAndDeleteTest extends TestCase
{
    /**
     * @dataProvider provideInvalidDocumentValues
     */
    public function testConstructorFilterArgumentTypeCheck($filter): void
    {
        $this->expectException(InvalidArgumentException::class);
        new FindOneAndDelete($this->getDatabaseName(), $this->getCollectionName(), $filter);
    }

    /**
     * @dataProvider provideInvalidConstructorOptions
     */
    public function testConstructorOptionTypeChecks(array $options): void
    {
        $this->expectException(InvalidArgumentException::class);
        new FindOneAndDelete($this->getDatabaseName(), $this->getCollectionName(), [], $options);
    }

    #[Pure] public function provideInvalidConstructorOptions(): array
    {
        $options = [];

        foreach ($this->getInvalidDocumentValues() as $value) {
            $options[][] = ['projection' => $value];
        }

        return $options;
    }
}
