<?php

namespace PayPalHttp\Dto;

/**
 * Class HttpResponse
 * @package PayPalHttp
 *
 * Object that holds your response details
 */
class ResponseResultDto
{
    public string $id;

    public string $intent;

    public string $status;

    public object $purchase_units;

    public object $create_time;

    public object $links;
}
