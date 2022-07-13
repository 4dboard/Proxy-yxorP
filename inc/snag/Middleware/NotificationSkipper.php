<?php

namespace yxorP\inc\snag\Middleware;

use yxorP\inc\snag\Configuration;
use yxorP\inc\snag\Report;

class NotificationSkipper
{
    /**
     * The config instance.
     *
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * Create a new notification skipper middleware instance.
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
     * Execute the notification skipper middleware.
     *
     * @param Report $report the snag report instance
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
