<?php /* yxorP */


namespace Predis\Command;


class SetMove extends Command
{

    public function getId(): string
    {
        return 'SMOVE';
    }


    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
