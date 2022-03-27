<?php /* yxorP */


namespace Predis\Command;


class KeyMove extends Command
{

    public function getId(): string
    {
        return 'MOVE';
    }


    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
