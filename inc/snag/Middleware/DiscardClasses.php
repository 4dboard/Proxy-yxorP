<?php

namespace yxorP\inc\snag\Middleware;

use yxorP\inc\snag\Configuration;
use yxorP\inc\snag\Report;

class DiscardClasses
{
    /**
     * @var \yxorP\inc\snag\Configuration
     */
    protected $config;

    /**
     * @param \yxorP\inc\snag\Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    /**
     * @param \yxorP\inc\snag\Report $report
     * @param callable $next
     *
     * @return void
     */
    public function __invoke(Report $report, callable $next)
    {
        $errors = $report->getErrors();

        foreach ($this->config->getDiscardClasses() as $discardClass) {
            foreach ($errors as $error) {
                if ($error['errorClass'] === $discardClass
                    || @preg_match($discardClass, $error['errorClass']) === 1
                ) {
                    syslog(LOG_INFO, sprintf(
                        'Discarding event because error class "%s" matched discardClasses configuration',
                        $error['errorClass']
                    ));

                    return;
                }
            }
        }

        $next($report);
    }
}
