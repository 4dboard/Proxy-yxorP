<?php namespace yxorP\bugsnag\Callbacks;

use Bugsnag\Report;
use Bugsnag\Request\ResolverInterface;

class RequestContext
{
    private ResolverInterface $resolver;

    public function __construct(ResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    public function __invoke(Report $report)
    {
        if ($context = $this->resolver->resolve()->getContext()) {
            $report->setContext($context);
        }
    }
}