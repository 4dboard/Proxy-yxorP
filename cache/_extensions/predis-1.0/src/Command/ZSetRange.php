<?php /* yxorP */

namespace Predis\Command;
class ZSetRange extends Command
{

    public function getId(): string
    {
        return 'ZRANGE';
    }

    public function parseResponse($data): array
    {
        if ($this->withScores()) {
            $result = array();

            foreach ($data as $i => $iValue) {
                $result[$iValue] = $data[++$i];
            }

            return $result;
        }

        return $data;
    }

    protected function withScores(): bool
    {
        $arguments = $this->getArguments();

        if (count($arguments) < 4) {
            return false;
        }

        return strtoupper($arguments[3]) === 'WITHSCORES';
    }

    protected function filterArguments(array $arguments): array
    {
        if (count($arguments) === 4) {
            $lastType = gettype($arguments[3]);

            if ($lastType === 'string' && strtoupper($arguments[3]) === 'WITHSCORES') {

                $arguments[3] = array('WITHSCORES' => true);
                $lastType = 'array';
            }

            if ($lastType === 'array') {
                $options = $this->prepareOptions(array_pop($arguments));

                return array_merge($arguments, $options);
            }
        }

        return $arguments;
    }

    protected function prepareOptions($options): array
    {
        $opts = array_change_key_case($options, CASE_UPPER);
        $finalizedOpts = array();

        if (!empty($opts['WITHSCORES'])) {
            $finalizedOpts[] = 'WITHSCORES';
        }

        return $finalizedOpts;
    }
}
