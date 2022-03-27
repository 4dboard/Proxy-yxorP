<?php /* yxorP */


namespace Predis\Command;


class StringBitOp extends Command
{

    public function getId(): string
    {
        return 'BITOP';
    }


    protected function filterArguments(array $arguments): array
    {
        if (count($arguments) === 3 && is_array($arguments[2])) {
            [$operation, $destination,] = $arguments;
            $arguments = $arguments[2];
            array_unshift($arguments, $operation, $destination);
        }

        return $arguments;
    }
}
