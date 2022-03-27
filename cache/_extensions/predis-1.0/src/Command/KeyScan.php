<?php /* yxorP */


namespace Predis\Command;


class KeyScan extends Command
{

    public function getId(): string
    {
        return 'SCAN';
    }


    protected function filterArguments(array $arguments): array
    {
        if (count($arguments) === 2 && is_array($arguments[1])) {
            $options = $this->prepareOptions(array_pop($arguments));
            $arguments = array_merge($arguments, $options);
        }

        return $arguments;
    }


    protected function prepareOptions($options): array
    {
        $options = array_change_key_case($options, CASE_UPPER);
        $normalized = array();

        if (!empty($options['MATCH'])) {
            $normalized[] = 'MATCH';
            $normalized[] = $options['MATCH'];
        }

        if (!empty($options['COUNT'])) {
            $normalized[] = 'COUNT';
            $normalized[] = $options['COUNT'];
        }

        return $normalized;
    }
}
