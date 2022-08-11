<?php

namespace PayPalHttp;

/**
 * Class HttpRequest
 * @package PayPalHttp
 *
 * Request object that holds all the necessary information required by HTTPClient
 *
 * @see HttpClient
 */
class HttpRequest
{
    public string $path;

    public array | string $body;

    public string $verb;

    public  array$headers;

    function __construct(string $path, string $verb)
    {
        $this->path = $path;
        $this->verb = $verb;
        $this->body = NULL;
        $this->headers = [];
    }
}
