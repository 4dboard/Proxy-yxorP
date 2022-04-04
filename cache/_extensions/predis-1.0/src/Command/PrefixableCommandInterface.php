<?php /* yxorP */

namespace Predis\Command;
interface PrefixableCommandInterface extends CommandInterface
{

    public function prefixKeys($prefix);
}
