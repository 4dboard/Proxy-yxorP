<?php /* yxorP */

namespace Predis\Command;
class PubSubPublish extends Command
{

    public function getId(): string
    {
        return 'PUBLISH';
    }
}
