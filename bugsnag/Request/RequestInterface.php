<?php namespace yxorP\bugsnag\Request;
interface RequestInterface
{
    public function isRequest();

    public function getSession();

    public function getCookies();

    public function getMetaData();

    public function getContext();

    public function getUserId();
}