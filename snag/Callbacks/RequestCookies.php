<?php namespace yxorP\snag\Callbacks;

use yxorP\snag\Report;
use yxorP\snag\Request\ResolverInterface;

class RequestCookies
{
    private ResolverInterface $resolver;

    public function __construct(ResolverInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    public function __invoke(Report $report)
    {
        if ($data = $this->resolver->resolve()->getCookies()) {
            $report->setMetaData(['cookies' => $data]);
        }
    }
}