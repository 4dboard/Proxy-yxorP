<?php namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;
use yxorP\snag\Request\ResolverInterface;

class RequestUser
{
    private ResolverInterface $resolver;

    public function __construct(ResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    public function __invoke(Report $report)
    {
        if ($id = $this->resolver->resolve()->getUserId()) {
            $report->setUser(['id' => $id]);
        }
    }
}