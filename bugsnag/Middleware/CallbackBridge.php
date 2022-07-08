<?php namespace Bugsnag\Middleware;

use Bugsnag\Report;

class CallbackBridge
{
    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function __invoke(Report $report, callable $next)
    {
        $initialUnhandled = $report->getUnhandled();
        $initialSeverity = $report->getSeverity();
        $initialReason = $report->getSeverityReason();
        $callback = $this->callback;
        if ($callback($report) !== false) {
            $report->setUnhandled($initialUnhandled);
            if ($report->getSeverity() != $initialSeverity) {
                $report->setSeverityReason(['type' => 'userCallbackSetSeverity',]);
            } else {
                $report->setSeverityReason($initialReason);
            }
            $next($report);
        }
    }
}