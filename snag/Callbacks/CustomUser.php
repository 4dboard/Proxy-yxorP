<?php

namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;
use Exception;

class CustomUser
{
    /**
     * The user resolver.
     *
     * @var callable
     */
    protected $resolver;

    /**
     * Create a new custom user callback instance.
     *
     * @param callable $resolver the user resolver
     *
     * @return void
     */
    public function __construct(callable $resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     * Execute the user data callback.
     *
     * @param \yxorP\snag\Report $report the snag report instance
     *
     * @return void
     */
    public function __invoke(Report $report)
    {
        $resolver = $this->resolver;

        try {
            if ($user = $resolver()) {
                $report->setUser($user);
            }
        } catch (Exception $e) {
            // Ignore any errors.
        }
    }
}
