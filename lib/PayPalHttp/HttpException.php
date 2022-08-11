<?php

namespace PayPalHttp;

class HttpException extends IOException
{
    public int $statusCode;

    public array $headers;

    public function __construct(string $message, int $statusCode, array $headers)
    {
        parent::__construct($message);
        $this->statusCode = $statusCode;
        $this->headers = $headers;
    }
}
