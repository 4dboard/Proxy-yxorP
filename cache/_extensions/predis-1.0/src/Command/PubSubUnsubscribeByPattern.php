<?php /* yxorP */

namespace Predis\Command;
class PubSubUnsubscribeByPattern extends PubSubUnsubscribe
{

    public function getId(): string
    {
        return 'PUNSUBSCRIBE';
    }
}
