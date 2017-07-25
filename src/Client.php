<?php


namespace AdServer\ClientLocal;


use AdServer\Client\ClientInterface;
use AdServer\Engine\Engine;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Client implements ClientInterface
{
    public function request(Request $request): Response
    {
        return Engine::matchRequest($request);
    }
}