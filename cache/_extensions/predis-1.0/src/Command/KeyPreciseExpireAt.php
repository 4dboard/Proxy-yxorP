<?php /* yxorP */


namespace Predis\Command;


class KeyPreciseExpireAt extends KeyExpireAt
{

    public function getId(): string
    {
        return 'PEXPIREAT';
    }
}
