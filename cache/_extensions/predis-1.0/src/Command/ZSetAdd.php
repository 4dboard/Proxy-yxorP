<?php /* yxorP */


namespace Predis\Command;


class ZSetAdd extends Command
{

    public function getId(): string
    {
        return 'ZADD';
    }


    protected function filterArguments(array $arguments): array
    {
        if (count($arguments) === 2 && is_array($arguments[1])) {
            $flattened = array($arguments[0]);

            foreach ($arguments[1] as $member => $score) {
                $flattened[] = $score;
                $flattened[] = $member;
            }

            return $flattened;
        }

        return $arguments;
    }
}
