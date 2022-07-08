<?php

namespace yxorP\snag\Callbacks;

use yxorP\snag\Configuration;
use yxorP\snag\Report;

class GlobalMetaData
{
    /**
     * The config instance.
     *
     * @var \yxorP\snag\Configuration
     */
    protected $config;

    /**
     * Create a new global meta data callback instance.
     *
     * @param \yxorP\snag\Configuration $config the configuration instance
     *
     * @return void
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    /**
     * Execute the global meta data callback.
     *
     * @param \yxorP\snag\Report $report the bugsnag report instance
     *
     * @return void
     */
    public function __invoke(Report $report)
    {
        if ($data = $this->config->getMetaData()) {
            $report->setMetaData($data);
        }
    }
}
