<?php /* yxorP */


namespace Predis\Command;


class KeyPersist extends Command
{

    public function getId(): string
    {
        return 'PERSIST';
    }


    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
