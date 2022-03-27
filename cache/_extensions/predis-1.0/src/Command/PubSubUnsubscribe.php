<?php /* yxorP */


namespace Predis\Command;


class PubSubUnsubscribe extends Command
{

    public function getId(): string
    {
        return 'UNSUBSCRIBE';
    }


    protected function filterArguments(array $arguments): array
    {
        return self::normalizeArguments($arguments);
    }
}
