<?php /* yxorP */


namespace Predis\Command;


class StringSetPreserve extends Command
{

    public function getId(): string
    {
        return 'SETNX';
    }


    public function parseResponse($data): bool
    {
        return (bool)$data;
    }
}
