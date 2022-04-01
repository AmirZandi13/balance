<?php

namespace App\ThirdParties\Banks\B\Implementations\v1;

use App\ThirdParties\Banks\B\Implementations\BClientInterface;
use Illuminate\Support\Facades\Http;

class BClient implements BClientInterface
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
        return $this->http->get('https://hediehsara.ir/api/banks/B/balance')->json();
    }
}
