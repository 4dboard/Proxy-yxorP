<?php namespace yxorP\bugsnag\Middleware;

use yxorP\bugsnag\Breadcrumbs\Recorder;
use yxorP\bugsnag\Report;

class BreadcrumbData
{
    private Recorder $recorder;

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