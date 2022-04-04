<?php /* yxorP */

namespace Predis\Command;
class HashExists extends Command
{

    public function getId(): string
    {
        return 'HEXISTS';
    }

    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
