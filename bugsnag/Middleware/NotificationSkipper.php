<?php namespace yxorP\bugsnag\Middleware;

use Bugsnag\Configuration;
use Bugsnag\Report;

class NotificationSkipper
{
    private Configuration $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    public function __invoke(Report $report, callable $next)
    {
        if (!$this->config->shouldNotify()) {
            return;
        }
        $next($report);
    }
}