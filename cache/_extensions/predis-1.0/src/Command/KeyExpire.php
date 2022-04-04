<?php /* yxorP */

namespace Predis\Command;
class KeyExpire extends Command
{

    public function getId(): string
    {
        return 'EXPIRE';
    }

    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
