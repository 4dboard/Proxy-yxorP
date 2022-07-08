<?php namespace Bugsnag\Middleware;

use Bugsnag\Configuration;
use Bugsnag\Report;

class NotificationSkipper
{
    protected $config;

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