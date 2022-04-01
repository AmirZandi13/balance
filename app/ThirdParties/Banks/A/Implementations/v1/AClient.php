<?php

namespace App\ThirdParties\Banks\A\Implementations\v1;

use App\ThirdParties\Banks\A\Implementations\AClientInterface;
use Illuminate\Support\Facades\Http;

class AClient implements AClientInterface
{
    /**
     * @var Http
     */
    private Http $http;

    /**
     * @param Http $http
     */
    public function __construct(Http $http)
    {
        $this->http = $http;
    }

    /**
     * @return int
     */
    public function balance(): int
    {
        return $this->http->get('https://hediehsara.ir/api/banks/A/balance')->json();
    }
}
