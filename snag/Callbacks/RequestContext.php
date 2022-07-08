<?php

namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;
use yxorP\snag\Request\ResolverInterface;

class RequestContext
{
    /**
     * The request resolver instance.
     *
     * @var \yxorP\snag\Request\ResolverInterface
     */
    protected $resolver;

    /**
     * Create a new request context callback instance.
     *
     * @param \yxorP\snag\Request\ResolverInterface $resolver the request resolver instance
     *
     * @return void
     */
    public function __construct(ResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     * Execute the request context callback.
     *
     * @param \yxorP\snag\Report $report the bugsnag report instance
     *
     * @return void
     */
    public function __invoke(Report $report)
    {
        if ($context = $this->resolver->resolve()->getContext()) {
            $report->setContext($context);
        }
    }
}
