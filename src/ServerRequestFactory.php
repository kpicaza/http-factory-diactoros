<?php

namespace Http\Factory\Diactoros;

use Interop\Http\Factory\ServerRequestFactoryInterface;
use Zend\Diactoros\ServerRequest;
use Zend\Diactoros\ServerRequestFactory as Factory;

class ServerRequestFactory implements
    ServerRequestFactoryInterface
{
    public function createServerRequest(array $server, $method = null, $uri = null)
    {
        return new ServerRequest($server, [], $uri, $method);
    }

    public function createServerRequestFromGlobals()
    {
        return Factory::fromGlobals();
    }
}
