<?php

namespace yxorP\snag\Middleware;

use yxorP\snag\Configuration;
use yxorP\snag\Report;

class NotificationSkipper
{
    /**
     * The config instance.
     *
     * @var \yxorP\snag\Configuration
     */
    protected $config;

    /**
     * Create a new notification skipper middleware instance.
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
     * Execute the notification skipper middleware.
     *
     * @param \yxorP\snag\Report $report the snag report instance
     * @param callable $next the next stage callback
     *
     * @return void
     */
    public function __invoke(Report $report, callable $next)
    {
        if (!$this->config->shouldNotify()) {
            return;
        }

        $next($report);
    }
}
