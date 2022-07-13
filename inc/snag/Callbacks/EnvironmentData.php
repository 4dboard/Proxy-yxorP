<?php

namespace yxorP\inc\snag\Callbacks;

use yxorP\inc\snag\Report;

class EnvironmentData
{
    /**
     * Execute the environment data callback.
     *
     * @param Report $report the snag report instance
     *
     * @return void
     */
    public function __invoke(Report $report)
    {
        if (!empty($_ENV)) {
            $report->setMetaData(['Environment' => $_ENV]);
        }
    }
}
