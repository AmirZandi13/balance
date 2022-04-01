<?php

namespace App\ThirdParties\Banks\B;

use App\ThirdParties\Banks\B\Implementations\BClientInterface;
use App\ThirdParties\Banks\BankInterface;

class B implements BankInterface
{
    /**
     * @var BClientInterface
     */
    private BClientInterface $BClient;

    /**
     * @param BClientInterface $BClient
     */
    public function __construct(BClientInterface $BClient)
    {
        $this->BClient = $BClient;
    }

    /**
     * @return int
     */
    public function balance(): int
    {
        return $this->BClient->balance();
    }
}
