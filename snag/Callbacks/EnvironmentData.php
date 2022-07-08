<?php

namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;

class EnvironmentData
{
    /**
     * Execute the environment data callback.
     *
     * @param \yxorP\snag\Report $report the snag report instance
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
