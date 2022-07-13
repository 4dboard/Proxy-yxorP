<?php

/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yxorP\Helper;

use Exception;
use Firebase\JWT\JWT;
use Lime\Helper;

class Csrf extends Helper
{

    public function initialize()
    {


    }

    public function token($key, $generate = false, $expire = null): string
    {

        $token = $this->app->helper('session')->read("yxorp.csrf.token.{$key}", null);

        if (!$token || $generate) {
            $token = $this->generateToken($key, $expire);
        }

        return $token;
    }

    public function generateToken($key, $expire = null): string
    {

        $payload = ['csrf' => $key];

        if ($expire && is_numeric($expire)) {
            $payload['exp'] = $expire;
        }

        $token = JWT::encode($payload, $this->app['sec-key']);

        $this->app->helper('session')->write("yxorp.csrf.token.{$key}", $token);

        return $token;
    }

    public function isValid($key, $token, $checkpayload = false): bool
    {

        if (!$token) {
            return false;
        }

        if ($checkpayload) {
            try {
                $payload = JWT::decode($token, $this->app['sec-key'], ['HS256']);
                return isset($payload->csrf) && $payload->csrf == $key;
            } catch (Exception $e) {
                return false;
            }
        }

        $stoken = $this->app->helper('session')->read("yxorp.csrf.token.{$key}", null);

        if ($token != $stoken) {
            return false;
        }

        try {
            $token = JWT::decode($token, $this->app['sec-key'], ['HS256']);
        } catch (Exception $e) {
            return false;
        }

        return true;
    }
}
