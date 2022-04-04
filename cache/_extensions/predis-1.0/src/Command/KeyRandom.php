<?php /* yxorP */

namespace Predis\Command;
class KeyRandom extends Command
{

    public function getId(): string
    {
        return 'RANDOMKEY';
    }

    public function parseResponse($data)
    {
        return null;
    }
}
