<?php /* yxorP */

namespace Predis\Command;
class ServerBackgroundSave extends Command
{

    public function getId(): string
    {
        return 'BGSAVE';
    }

    public function parseResponse($data): bool
    {
        return $data === 'Background saving started' ? true : $data;
    }
}
