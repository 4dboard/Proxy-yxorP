<?php use yxorP\Http\EventWrapper;

class setHeadersAction extends EventWrapper
{
    public function buildHeaders(): void
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials');
    }
}