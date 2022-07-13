<?php

namespace yxorP\inc\snag\Callbacks;

use yxorP\inc\snag\Report;
use yxorP\inc\snag\Request\ResolverInterface;

class RequestContext
{
    /**
     * The request resolver instance.
     *
     * @var ResolverInterface
     */
    protected ResolverInterface $resolver;

    /**
     * Create a new request context callback instance.
     *
     * @param ResolverInterface $resolver the request resolver instance
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
     * @param Report $report the snag report instance
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
