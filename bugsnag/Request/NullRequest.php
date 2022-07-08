<?php namespace Bugsnag\Request;
class NullRequest implements RequestInterface
{
    public function isRequest(): bool
    {
        return false;
    }

    public function getSession(): array
    {
        return [];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getMetaData(): array
    {
        return [];
    }

    public function getContext()
    {
        return null;
    }

    public function getUserId()
    {
        return null;
    }
}