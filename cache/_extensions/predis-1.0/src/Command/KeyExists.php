<?php /* yxorP */

namespace Predis\Command;
class KeyExists extends Command
{

    public function getId(): string
    {
        return 'EXISTS';
    }

    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
