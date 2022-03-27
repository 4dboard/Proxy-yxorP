<?php /* yxorP */


namespace Predis\Command;


class ZSetRangeByLex extends ZSetRange
{

    public function getId(): string
    {
        return 'ZRANGEBYLEX';
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

        return $finalizedOpts;
    }


    protected function withScores(): bool
    {
        return false;
    }
}
