<?php namespace yxorP\bugsnag\Callbacks;

use Bugsnag\Configuration;
use Bugsnag\Report;

class GlobalMetaData
{
    private Configuration $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    public function __invoke(Report $report)
    {
        if ($data = $this->config->getMetaData()) {
            $report->setMetaData($data);
        }
    }
}