<?php /* yxorP */


namespace Predis\Command;


class ZSetRangeByScore extends ZSetRange
{

    public function getId(): string
    {
        return 'ZRANGEBYSCORE';
    }


    protected function prepareOptions($options): array
    {
        $opts = array_change_key_case($options, CASE_UPPER);
        $finalizedOpts = array();

        if (isset($opts['LIMIT']) && is_array($opts['LIMIT'])) {
            $limit = array_change_key_case($opts['LIMIT'], CASE_UPPER);

            $finalizedOpts[] = 'LIMIT';
            $finalizedOpts[] = $limit['OFFSET'] ?? $limit[0];
            $finalizedOpts[] = $limit['COUNT'] ?? $limit[1];
        }

        return array_merge($finalizedOpts, parent::prepareOptions($options));
    }


    protected function withScores(): bool
    {
        $arguments = $this->getArguments();

        for ($i = 3, $iMax = count($arguments); $i < $iMax; $i++) {
            switch (strtoupper($arguments[$i])) {
                case 'WITHSCORES':
                    return true;

                case 'LIMIT':
                    $i += 2;
                    break;
            }
        }

        return false;
    }
}
