<?php /* yxorP */


namespace Predis\Command;


class SetIntersectionStore extends Command
{

    public function getId(): string
    {
        return 'SINTERSTORE';
    }


    protected function filterArguments(array $arguments): array
    {
        if (count($arguments) === 2 && is_array($arguments[1])) {
            return array_merge(array($arguments[0]), $arguments[1]);
        }

        return $arguments;
    }
}
