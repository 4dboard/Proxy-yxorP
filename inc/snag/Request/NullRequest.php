<?php

namespace yxorP\inc\snag\Request;

class NullRequest implements RequestInterface
{
    /**
     * Are we currently processing a request?
     *
     * @return bool
     */
    public function isRequest(): bool
    {
        return false;
    }

    /**
     * Get the session data.
     *
     * @return array
     */
    public function getSession(): array
    {
        return [];
    }

    /**
     * Get the cookies.
     *
     * @return array
     */
    public function getCookies(): array
    {
        return [];
    }

    /**
     * Get the request formatted as meta data.
     *
     * @return array
     */
    public function getMetaData(): array
    {
        return [];
    }

    /**
     * Get the request context.
     *
     * @return string|null
     */
    public function getContext(): ?string
    {
        return null;
    }

    /**
     * Get the request user id.
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return null;
    }
}
