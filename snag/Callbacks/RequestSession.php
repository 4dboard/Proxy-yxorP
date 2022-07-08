<?php

namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;
use yxorP\snag\Request\ResolverInterface;

class RequestSession
{
    /**
     * The request resolver instance.
     *
     * @var \yxorP\snag\Request\ResolverInterface
     */
    protected $resolver;

    /**
     * Create a new request session callback instance.
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
     * Execute the request session callback.
     *
     * @param \yxorP\snag\Report $report the snag report instance
     *
     * @return void
     */
    public function __invoke(Report $report)
    {
        if ($data = $this->resolver->resolve()->getSession()) {
            $report->setMetaData(['session' => $data]);
        }
    }
}
