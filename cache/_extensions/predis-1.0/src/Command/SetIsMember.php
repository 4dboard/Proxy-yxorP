<?php /* yxorP */

namespace Predis\Command;
class SetIsMember extends Command
{

    public function getId(): string
    {
        return 'SISMEMBER';
    }

    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
