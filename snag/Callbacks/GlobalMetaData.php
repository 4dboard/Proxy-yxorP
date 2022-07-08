<?php namespace yxorP\bugsnag\Callbacks;

use yxorP\bugsnag\Configuration;
use yxorP\bugsnag\Report;

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