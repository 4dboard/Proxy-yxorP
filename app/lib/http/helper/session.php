<?php

namespace yxorP\app\lib\http\helper;

use function session_destroy;
use function session_name;
use function session_regenerate_id;
use function session_start;
use function session_status;
use function session_write_close;
use function yxorP\app\lib\http\fetch_from_array;

class session extends Helper
{

    public string $name;
    protected bool $initialized = false;

    public function init(?string $name = null)
    {

        if ($this->initialized) return;

        if (session_status() != PHP_SESSION_ACTIVE) {

            $this->name = $name ? $name : $this->app["session.name"];

            session_name($this->name);
            session_start();
        } else {
            $this->name = session_name();
        }

        $this->initialized = true;
    }

    public function write(string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function read(string $key, mixed $default = null)
    {
        return fetch_from_array($_SESSION, $key, $default);
    }

    public function delete(string $key): void
    {
        unset($_SESSION[$key]);
    }

    public function destroy(): void
    {
        session_destroy();
    }

    public function close(): void
    {
        session_write_close();
    }

    public function regenerateId(bool $delete_old_session = false): bool
    {
        return session_regenerate_id(true);
    }
}
