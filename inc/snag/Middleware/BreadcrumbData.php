<?php

namespace yxorP\inc\snag\Middleware;

use yxorP\inc\snag\Breadcrumbs\Recorder;
use yxorP\inc\snag\Report;

class BreadcrumbData
{
    /**
     * The recorder instance.
     *
     * @var \yxorP\inc\snag\Breadcrumbs\Recorder
     */
    protected $recorder;

    /**
     * Create a new breadcrumb data middleware instance.
     *
     * @param \yxorP\inc\snag\Breadcrumbs\Recorder $recorder the recorder instance
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
     * @param \yxorP\inc\snag\Report $report the snag report instance
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
