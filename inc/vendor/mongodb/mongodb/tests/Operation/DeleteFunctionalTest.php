<?php

namespace MongoDB\Tests\Operation;

use MongoDB\Collection;
use MongoDB\DeleteResult;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\WriteConcern;
use MongoDB\Exception\BadMethodCallException;
use MongoDB\Exception\UnsupportedException;
use MongoDB\Operation\Delete;
use MongoDB\Tests\CommandObserver;
use function version_compare;

class DeleteFunctionalTest extends FunctionalTestCase
{
    /** @var Collection */
    private Collection $collection;

    public function setUp(): void
    {
        parent::setUp();

        $this->collection = new Collection($this->manager, $this->getDatabaseName(), $this->getCollectionName());
    }

    public function testDeleteOne(): void
    {
        $this->createFixtures();

        $filter = ['_id' => 1];

        $operation = new Delete($this->getDatabaseName(), $this->getCollectionName(), $filter, 1);
        $result = $operation->execute($this->getPrimaryServer());

        $this->assertInstanceOf(DeleteResult::class, $result);
        $this->assertSame(1, $result->getDeletedCount());

        $expected = [
            ['_id' => 2, 'x' => 22],
            ['_id' => 3, 'x' => 33],
        ];

        $this->assertSameDocuments($expected, $this->collection->find());
    }

    /**
     * Create data fixtures.
     *
     */
    private function createFixtures(): void
    {
        $bulkWrite = new BulkWrite(['ordered' => true]);

        for ($i = 1; $i <= 3; $i++) {
            $bulkWrite->insert([
                '_id' => $i,
                'x' => (integer)($i . $i),
            ]);
        }

        $result = $this->manager->executeBulkWrite($this->getNamespace(), $bulkWrite);

        $this->assertEquals(3, $result->getInsertedCount());
    }

    public function testDeleteMany(): void
    {
        $this->createFixtures();

        $filter = ['_id' => ['$gt' => 1]];

        $operation = new Delete($this->getDatabaseName(), $this->getCollectionName(), $filter, 0);
        $result = $operation->execute($this->getPrimaryServer());

        $this->assertInstanceOf(DeleteResult::class, $result);
        $this->assertSame(2, $result->getDeletedCount());

        $expected = [
            ['_id' => 1, 'x' => 11],
        ];

        $this->assertSameDocuments($expected, $this->collection->find());
    }

    public function testHintOptionAndUnacknowledgedWriteConcernUnsupportedClientSideError(): void
    {
        if (version_compare($this->getServerVersion(), '4.4.0', '>=')) {
            $this->markTestSkipped('hint is supported');
        }

        $operation = new Delete(
            $this->getDatabaseName(),
            $this->getCollectionName(),
            [],
            0,
            ['hint' => '_id_', 'writeConcern' => new WriteConcern(0)]
        );

        $this->expectException(UnsupportedException::class);
        $this->expectExceptionMessage('Hint is not supported by the server executing this operation');

        $operation->execute($this->getPrimaryServer());
    }

    public function testSessionOption(): void
    {
        try {
            (new CommandObserver())->observe(
                function (): void {
                    $operation = new Delete(
                        $this->getDatabaseName(),
                        $this->getCollectionName(),
                        [],
                        0,
                        ['session' => $this->createSession()]
                    );

                    $operation->execute($this->getPrimaryServer());
                },
                function (array $event): void {
                    $this->assertObjectHasAttribute('lsid', $event['started']->getCommand());
                }
            );
        } catch (\Throwable $e) {
        }
    }

    public function testUnacknowledgedWriteConcern(): DeleteResult
    {
        $filter = ['_id' => 1];
        $options = ['writeConcern' => new WriteConcern(0)];

        $operation = new Delete($this->getDatabaseName(), $this->getCollectionName(), $filter, 0, $options);
        $result = $operation->execute($this->getPrimaryServer());

        $this->assertFalse($result->isAcknowledged());

        return $result;
    }

    /**
     * @depends testUnacknowledgedWriteConcern
     */
    public function testUnacknowledgedWriteConcernAccessesDeletedCount(DeleteResult $result): void
    {
        $this->expectException(BadMethodCallException::class);
        $this->expectExceptionMessageMatches('/[\w:\\\\]+ should not be called for an unacknowledged write result/');
        $result->getDeletedCount();
    }
}
