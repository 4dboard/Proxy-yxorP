<?php /* yxorP */

namespace Predis\Command;
class PubSubSubscribeByPattern extends PubSubSubscribe
{

    public function getId(): string
    {
        return 'PSUBSCRIBE';
    }
}
