<?php

namespace PayPalHttp;

use PayPalHttp\Dto\ResponseResultDto;

/**
 * Class HttpResponse
 * @package PayPalHttp
 *
 * Object that holds your response details
 */
class HttpResponse
{
    public int $statusCode;

    public  array | string | ResponseResultDto $result;

    public array $headers;

    public function __construct($statusCode, $body, $headers)
    {
        $this->statusCode = $statusCode;
        $this->headers = $headers;
        $this->result = $body;
    }
}
