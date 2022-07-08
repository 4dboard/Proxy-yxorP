<?php namespace yxorP\bugsnag\Callbacks;

use yxorP\bugsnag\Report;
use yxorP\bugsnag\Request\ResolverInterface;

class RequestSession
{
    private ResolverInterface $resolver;

    public function __construct(ResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    public function __invoke(Report $report)
    {
        if ($data = $this->resolver->resolve()->getSession()) {
            $report->setMetaData(['session' => $data]);
        }
    }
}