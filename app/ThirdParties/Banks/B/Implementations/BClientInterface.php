<?php

namespace App\ThirdParties\Banks\B\Implementations;

interface BClientInterface
{
    /**
     * @return int
     */
    public function balance(): int;
}
