<?php namespace yxorP\bugsnag\Callbacks;

use yxorP\bugsnag\Report;

class EnvironmentData
{
    public function __invoke(Report $report)
    {
        if (!empty($_ENV)) {
            $report->setMetaData(['Environment' => $_ENV]);
        }
    }
}