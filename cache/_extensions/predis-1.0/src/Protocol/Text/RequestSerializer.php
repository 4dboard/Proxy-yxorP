<?php /* yxorP */


namespace Predis\Protocol\Text;

use Predis\Command\CommandInterface;
use Predis\Protocol\RequestSerializerInterface;


class RequestSerializer implements RequestSerializerInterface
{

    public function serialize(CommandInterface $command): string
    {
        $commandID = $command->getId();
        $arguments = $command->getArguments();

        $cmdlen = strlen($commandID);
        $reqlen = count($arguments) + 1;

        $buffer = "*{$reqlen}\r\n\${$cmdlen}\r\n{$commandID}\r\n";

        for ($i = 0, $reqlen--; $i < $reqlen; $i++) {
            $argument = $arguments[$i];
            $arglen = strlen($argument);
            $buffer .= "\${$arglen}\r\n{$argument}\r\n";
        }

        return $buffer;
    }
}
