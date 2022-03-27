<?php /* yxorP */


namespace Predis\Command;


class KeyPreciseTimeToLive extends KeyTimeToLive
{

    public function getId(): string
    {
        return 'PTTL';
    }
}
