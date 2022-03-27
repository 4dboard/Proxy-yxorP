<?php /* yxorP */


namespace Predis\Command;


class KeyTimeToLive extends Command
{

    public function getId(): string
    {
        return 'TTL';
    }
}
