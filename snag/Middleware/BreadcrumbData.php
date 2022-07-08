<?php namespace yxorP\snag\Middleware;

use yxorP\snag\Breadcrumbs\Recorder;
use yxorP\snag\Report;

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