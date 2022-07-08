<?php namespace yxorP\snag\Callbacks;

use Exception;
use yxorP\snag\Report;

class CustomUser
{
    private $resolver;

    public function __construct(callable $resolver)
    {
        $this->resolver = $resolver;
    }

    public function __invoke(Report $report)
    {
        $resolver = $this->resolver;
        try {
            if ($user = $resolver()) {
                $report->setUser($user);
            }
        } catch (Exception $e) {
        }
    }
}