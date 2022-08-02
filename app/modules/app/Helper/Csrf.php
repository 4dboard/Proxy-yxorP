<?php

namespace yxorP\app\modules\app\helper;

use Exception;
use helper;


class csrf extends helperAware
{

    public function token(string $key, bool $generate = false, ?int $expire = null): string
    {

        $token = $this->app->helper('session')->read("app.csrf.token.{$key}", null);

        if (!$token || $generate) {
            $token = $this->generateToken($key, $expire);
        }

        return $token;
    }

    public function generateToken(string $key, ?int $expire = null): string
    {

        $payload = ['csrf' => $key];

        if ($expire && is_numeric($expire)) {
            $payload['exp'] = $expire;
        }

        $token = $this->app->helper('jwt')->create($payload);

        $this->app->helper('session')->write("app.csrf.token.{$key}", $token);

        return $token;
    }

    public function isValid(string $key, string $token, bool $checkpayload = false): bool
    {

        if (!$token) {
            return false;
        }

        if ($checkpayload) {
            try {
                $payload = $this->app->helper('jwt')->decode($token);
                return isset($payload->csrf) && $payload->csrf === $key;
            } catch (Exception $e) {
                return false;
            }
        }

        $stoken = $this->app->helper('session')->read("app.csrf.token.{$key}", null);

        if ($token != $stoken) {
            return false;
        }

        try {
            $token = $this->app->helper('jwt')->decode($token);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }
}
