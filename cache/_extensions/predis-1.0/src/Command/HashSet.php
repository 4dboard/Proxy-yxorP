<?php /* yxorP */

namespace Predis\Command;
class HashSet extends Command
{

    public function getId(): string
    {
        return 'HSET';
    }

    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
