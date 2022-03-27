<?php /* yxorP */


namespace Predis\Command;


class KeyPreciseExpire extends KeyExpire
{

    public function getId(): string
    {
        return 'PEXPIRE';
    }
}
