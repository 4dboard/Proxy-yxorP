<?php namespace Bugsnag\Middleware;

use Bugsnag\Breadcrumbs\Recorder;
use Bugsnag\Report;

class BreadcrumbData
{
    private $recorder;

    public function __construct(Recorder $recorder)
    {
        $this->recorder = $recorder;
    }

    public function __invoke(Report $report, callable $next)
    {
        foreach ($this->recorder as $breadcrumb) {
            $report->addBreadcrumb($breadcrumb);
        }
        $next($report);
    }
}