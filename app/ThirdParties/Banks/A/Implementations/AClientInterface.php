<?php

namespace App\ThirdParties\Banks\A\Implementations;

interface AClientInterface
{
    /**
     * @return int
     */
    public function balance(): int;
}
