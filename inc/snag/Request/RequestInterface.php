<?php

namespace yxorP\inc\snag\Request;

interface RequestInterface
{
    /**
     * Are we currently processing a request?
     *
     * @return bool
     */
    public function isRequest(): bool;

    /**
     * Get the session data.
     *
     * @return array
     */
    public function getSession(): array;

    /**
     * Get the cookies.
     *
     * @return array
     */
    public function getCookies(): array;

    /**
     * Get the request formatted as meta data.
     *
     * @return array
     */
    public function getMetaData(): array;

    /**
     * Get the request context.
     *
     * @return string|null
     */
    public function getContext(): ?string;

    /**
     * Get the request user id.
     *
     * @return string|null
     */
    public function getUserId(): ?string;
}
