<?php

namespace yxorP\inc\snag\Callbacks;

use yxorP\inc\snag\Configuration;
use yxorP\inc\snag\Report;

class GlobalMetaData
{
    /**
     * The config instance.
     *
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * Create a new global meta data callback instance.
     *
     * @param Configuration $config the configuration instance
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
     * @param Report $report the snag report instance
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
