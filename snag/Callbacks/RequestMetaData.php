<?php

namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;
use yxorP\snag\Request\ResolverInterface;

class RequestMetaData
{
    /**
     * The request resolver instance.
     *
     * @var \yxorP\snag\Request\ResolverInterface
     */
    protected $resolver;

    /**
     * Create a new request meta data callback instance.
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
     * Execute the request meta data callback.
     *
     * @param \yxorP\snag\Report $report the snag report instance
     *
     * @return void
     */
    public function __invoke(Report $report)
    {
        if ($data = $this->resolver->resolve()->getMetaData()) {
            $report->setMetaData($data);
        }
    }
}
