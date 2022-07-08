<?php namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;

class EnvironmentData
{
    public function __invoke(Report $report)
    {
        if (!empty($_ENV)) {
            $report->setMetaData(['Environment' => $_ENV]);
        }
    }
}