<?php /* yxorP */


namespace Predis\Command;


class PubSubSubscribe extends Command
{

    public function getId(): string
    {
        return 'SUBSCRIBE';
    }


    protected function filterArguments(array $arguments): array
    {
        return self::normalizeArguments($arguments);
    }
}
