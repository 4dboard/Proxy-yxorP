<?php namespace yxorP\snag\Middleware;

use JetBrains\PhpStorm\Pure;
use yxorP\snag\Client;
use yxorP\snag\Report;
use yxorP\snag\SessionTracker;

class SessionData
{
    private Client $client;
    private SessionTracker $sessionTracker;

    #[Pure] #[Pure] public function __construct(Client $client)
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