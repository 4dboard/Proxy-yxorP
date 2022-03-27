<?php /* yxorP */


namespace Predis\Command;


class HyperLogLogCount extends Command
{

    public function getId(): string
    {
        return 'PFCOUNT';
    }


    protected function filterArguments(array $arguments): array
    {
        return self::normalizeArguments($arguments);
    }
}
