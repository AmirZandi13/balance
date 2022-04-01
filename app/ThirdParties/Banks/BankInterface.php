<?php

namespace App\ThirdParties\Banks;

interface BankInterface
{
    /**
     * @return int
     */
    public function balance(): int;
}
