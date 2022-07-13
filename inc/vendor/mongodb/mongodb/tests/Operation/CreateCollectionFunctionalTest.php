<?php

namespace MongoDB\Tests\Operation;

use MongoDB\Operation\CreateCollection;
use MongoDB\Tests\CommandObserver;

class CreateCollectionFunctionalTest extends FunctionalTestCase
{
    public function testDefaultWriteConcernIsOmitted(): void
    {
        try {
            (new CommandObserver())->observe(
                function (): void {
                    $operation = new CreateCollection(
                        $this->getDatabaseName(),
                        $this->getCollectionName(),
                        ['writeConcern' => $this->createDefaultWriteConcern()]
                    );

                    $operation->execute($this->getPrimaryServer());
                },
                function (array $event): void {
                    $this->assertObjectNotHasAttribute('writeConcern', $event['started']->getCommand());
                }
            );
        } catch (\Throwable $e) {
        }
    }

    public function testSessionOption(): void
    {
        try {
            (new CommandObserver())->observe(
                function (): void {
                    $operation = new CreateCollection(
                        $this->getDatabaseName(),
                        $this->getCollectionName(),
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
