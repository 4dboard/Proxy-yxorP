<?php /* yxorP */

namespace Predis\Response\Iterator;

use Predis\Connection\NodeConnectionInterface;

/**
 * @property null $current
 * @property int $position
 * @property $size
 * @property NodeConnectionInterface $connection
 */
class MultiBulk extends MultiBulkIterator
{
    private NodeConnectionInterface $connection;

    public function __construct(NodeConnectionInterface $connection, $size)
    {
        $this->connection = $connection;
        $this->size = $size;
        $this->position = 0;
        $this->current = $size > 0 ? $this->getValue() : null;
    }

    protected function getValue()
    {
        return $this->connection->read();
    }

    public function __destruct()
    {
        $this->drop(true);
    }

    public function drop($disconnect = false): void
    {
        if ($disconnect) {
            if ($this->valid()) {
                $this->position = $this->size;
                $this->connection->disconnect();
            }
        } else {
            while ($this->valid()) {
                $this->next();
            }
        }
    }
}
