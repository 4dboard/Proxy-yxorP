<?php

namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;
use yxorP\snag\Request\ResolverInterface;

class RequestCookies
{
    /**
     * The request resolver instance.
     *
     * @var \yxorP\snag\Request\ResolverInterface
     */
    protected $resolver;

    /**
     * Create a new request cookies callback instance.
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
     * Execute the request cookies callback.
     *
     * @param \yxorP\snag\Report $report the snag report instance
     *
     * @return void
     */
    public function __invoke(Report $report)
    {
        if ($data = $this->resolver->resolve()->getCookies()) {
            $report->setMetaData(['cookies' => $data]);
        }
    }
}
