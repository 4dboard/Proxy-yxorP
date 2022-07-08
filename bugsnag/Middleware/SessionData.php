<?php namespace Bugsnag\Middleware;

use Bugsnag\Client;
use Bugsnag\Report;

class SessionData
{
    private $client;
    private $sessionTracker;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->sessionTracker = $client->getSessionTracker();
    }

    public function __invoke(Report $report, callable $next)
    {
        $session = $this->sessionTracker->getCurrentSession();
        if (isset($session['events'])) {
            if ($report->getUnhandled()) {
                $session['events']['unhandled'] += 1;
            } else {
                $session['events']['handled'] += 1;
            }
            $report->setSessionData($session);
            $this->sessionTracker->setCurrentSession($session);
        }
        $next($report);
    }
}