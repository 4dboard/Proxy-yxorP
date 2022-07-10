<?php

namespace yxorP\inc\snag\Callbacks;

use yxorP\inc\snag\Report;
use yxorP\inc\snag\Request\ResolverInterface;

class RequestUser
{
    /**
     * The request resolver instance.
     *
     * @var \yxorP\inc\snag\Request\ResolverInterface
     */
    protected $resolver;

    /**
     * Create a new request user callback instance.
     *
     * @param \yxorP\inc\snag\Request\ResolverInterface $resolver the request resolver instance
     *
     * @return void
     */
    public function __construct(ResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    /**
     * Execute the request user callback.
     *
     * @param \yxorP\inc\snag\Report $report the snag report instance
     *
     * @return void
     */
    public function __invoke(Report $report)
    {
        if ($id = $this->resolver->resolve()->getUserId()) {
            $report->setUser(['id' => $id]);
        }
    }
}
