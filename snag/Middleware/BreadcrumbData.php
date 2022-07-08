<?php

namespace yxorP\snag\Middleware;

use yxorP\snag\Breadcrumbs\Recorder;
use yxorP\snag\Report;

class BreadcrumbData
{
    /**
     * The recorder instance.
     *
     * @var \yxorP\snag\Breadcrumbs\Recorder
     */
    protected $recorder;

    /**
     * Create a new breadcrumb data middleware instance.
     *
     * @param \yxorP\snag\Breadcrumbs\Recorder $recorder the recorder instance
     *
     * @return void
     */
    public function __construct(Recorder $recorder)
    {
        $this->recorder = $recorder;
    }

    /**
     * Execute the breadcrumb data middleware.
     *
     * @param \yxorP\snag\Report $report the bugsnag report instance
     * @param callable $next the next stage callback
     *
     * @return void
     */
    public function __invoke(Report $report, callable $next)
    {
        foreach ($this->recorder as $breadcrumb) {
            $report->addBreadcrumb($breadcrumb);
        }

        $next($report);
    }
}
