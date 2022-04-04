<?php /* yxorP */

namespace Predis\Command;
class StringSetMultiple extends Command
{

    public function getId(): string
    {
        return 'MSET';
    }

    protected function filterArguments(array $arguments): array
    {
        if (count($arguments) === 1 && is_array($arguments[0])) {
            $flattenedKVs = array();
            $args = $arguments[0];

            foreach ($args as $k => $v) {
                $flattenedKVs[] = $k;
                $flattenedKVs[] = $v;
            }

            return $flattenedKVs;
        }

        return $arguments;
    }
}
