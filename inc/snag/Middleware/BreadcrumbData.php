<?php

namespace yxorP\inc\snag\Middleware;

use yxorP\inc\snag\Breadcrumbs\Recorder;
use yxorP\inc\snag\Report;

class BreadcrumbData
{
    /**
     * The recorder instance.
     *
     * @var Recorder
     */
    protected Recorder $recorder;

    /**
     * Create a new breadcrumb data middleware instance.
     *
     * @param Recorder $recorder the recorder instance
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
     * @param Report $report the snag report instance
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
