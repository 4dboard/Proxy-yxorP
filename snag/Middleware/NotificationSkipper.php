<?php namespace yxorP\snag\Middleware;

use yxorP\snag\Configuration;
use yxorP\snag\Report;

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