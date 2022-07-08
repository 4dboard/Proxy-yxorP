<?php namespace yxorP\snag\Callbacks;

use yxorP\snag\Configuration;
use yxorP\snag\Report;

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