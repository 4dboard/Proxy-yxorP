<?php

namespace MongoDB\Tests\Operation;

use MongoDB\Driver\BulkWrite;
use MongoDB\Operation\FindOne;

class FindOneFunctionalTest extends FunctionalTestCase
{
    /**
     * @dataProvider provideTypeMapOptionsAndExpectedDocument
     */
    public function testTypeMapOption(array $typeMap, $expectedDocument): void
    {
        $this->createFixtures();

        $operation = new FindOne($this->getDatabaseName(), $this->getCollectionName(), [], ['typeMap' => $typeMap]);
        $document = $operation->execute($this->getPrimaryServer());

        $this->assertEquals($expectedDocument, $document);
    }

    /**
     * Create data fixtures.
     *
     */
    private function createFixtures(): void
    {
        $bulkWrite = new BulkWrite(['ordered' => true]);

        for ($i = 1; $i <= 1; $i++) {
            $bulkWrite->insert([
                '_id' => $i,
                'x' => (object)['foo' => 'bar'],
            ]);
        }

        $result = $this->manager->executeBulkWrite($this->getNamespace(), $bulkWrite);

        $this->assertEquals(1, $result->getInsertedCount());
    }

    public function provideTypeMapOptionsAndExpectedDocument(): array
    {
        return [
            [
                ['root' => 'array', 'document' => 'array'],
                ['_id' => 1, 'x' => ['foo' => 'bar']],
            ],
            [
                ['root' => 'object', 'document' => 'array'],
                (object)['_id' => 1, 'x' => ['foo' => 'bar']],
            ],
            [
                ['root' => 'array', 'document' => 'stdClass'],
                ['_id' => 1, 'x' => (object)['foo' => 'bar']],
            ],
        ];
    }
}
