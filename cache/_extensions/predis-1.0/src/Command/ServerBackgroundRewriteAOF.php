<?php /* yxorP */

namespace Predis\Command;
class ServerBackgroundRewriteAOF extends Command
{

    public function getId(): string
    {
        return 'BGREWRITEAOF';
    }

    public function parseResponse($data): bool
    {
        return $data === 'Background append only file rewriting started';
    }
}
