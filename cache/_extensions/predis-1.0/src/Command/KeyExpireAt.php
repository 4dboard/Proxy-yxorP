<?php /* yxorP */

namespace Predis\Command;
class KeyExpireAt extends Command
{

    public function getId(): string
    {
        return 'EXPIREAT';
    }

    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
