<?php

namespace MongoDB\Tests\Operation;

use MongoDB\Driver\ReadConcern;
use MongoDB\Driver\WriteConcern;
use MongoDB\Tests\FunctionalTestCase as BaseFunctionalTestCase;

/**
 * Base class for Operation functional tests.
 */
abstract class FunctionalTestCase extends BaseFunctionalTestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->dropCollection();
    }

    public function tearDown(): void
    {
        if ($this->hasFailed()) {
            return;
        }

        $this->dropCollection();

        parent::tearDown();
    }

    protected function createDefaultReadConcern(): ReadConcern
    {
        return new ReadConcern();
    }

    protected function createDefaultWriteConcern(): WriteConcern
    {
        return new WriteConcern(-2);
    }

    protected function createSession(): \MongoDB\Driver\Session
    {
        return $this->manager->startSession();
    }
}
