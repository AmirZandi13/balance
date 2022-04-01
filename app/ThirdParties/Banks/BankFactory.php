<?php

namespace App\ThirdParties\Banks;

class BankFactory
{
    /**
     * @return BankInterface|null
     */
    public function make(string $bank): BankInterface|null
    {
        try {
            return app()->make($bank);
        } catch (\Exception $exception) {
            return null;
        }
    }
}
