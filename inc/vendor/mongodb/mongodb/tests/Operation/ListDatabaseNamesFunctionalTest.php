<?php

namespace MongoDB\Tests\Operation;

use MongoDB\Operation\InsertOne;
use MongoDB\Operation\ListDatabaseNames;
use MongoDB\Tests\CommandObserver;

class ListDatabaseNamesFunctionalTest extends FunctionalTestCase
{
    public function testListDatabaseNames(): void
    {
        $server = $this->getPrimaryServer();

        $insertOne = new InsertOne($this->getDatabaseName(), $this->getCollectionName(), ['x' => 1]);
        $writeResult = $insertOne->execute($server);
        $this->assertEquals(1, $writeResult->getInsertedCount());

        $databases = null;
        try {
            (new CommandObserver())->observe(
                function () use (&$databases, $server): void {
                    $operation = new ListDatabaseNames();

                    $databases = $operation->execute($server);
                },
                function (array $event): void {
                    $this->assertObjectNotHasAttribute('authorizedDatabases', $event['started']->getCommand());
                    $this->assertSame(true, $event['started']->getCommand()->nameOnly);
                }
            );
        } catch (\Throwable $e) {
        }

        foreach ($databases as $database) {
            $this->assertIsString($database);
        }
    }

    public function testAuthorizedDatabasesOption(): void
    {
        try {
            (new CommandObserver())->observe(
                function (): void {
                    $operation = new ListDatabaseNames(
                        ['authorizedDatabases' => true]
                    );

                    $operation->execute($this->getPrimaryServer());
                },
                function (array $event): void {
                    $this->assertObjectHasAttribute('authorizedDatabases', $event['started']->getCommand());
                    $this->assertSame(true, $event['started']->getCommand()->authorizedDatabases);
                }
            );
        } catch (\Throwable $e) {
        }
    }

    public function testFilterOption(): void
    {
        $server = $this->getPrimaryServer();

        $insertOne = new InsertOne($this->getDatabaseName(), $this->getCollectionName(), ['x' => 1]);
        $writeResult = $insertOne->execute($server);
        $this->assertEquals(1, $writeResult->getInsertedCount());

        $operation = new ListDatabaseNames(['filter' => ['name' => $this->getDatabaseName()]]);
        $names = $operation->execute($server);
        $this->assertCount(1, $names);

        foreach ($names as $database) {
            $this->assertSame($this->getDatabaseName(), $database);
        }
    }

    public function testSessionOption(): void
    {
        try {
            (new CommandObserver())->observe(
                function (): void {
                    $operation = new ListDatabaseNames(
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
}
