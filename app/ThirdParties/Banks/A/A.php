<?php

namespace App\ThirdParties\Banks\A;

use App\ThirdParties\Banks\A\Implementations\AClientInterface;
use App\ThirdParties\Banks\BankInterface;

class A implements BankInterface
{
    /**
     * @var AClientInterface
     */
    private AClientInterface $AClient;

    /**
     * @param AClientInterface $AClient
     */
    public function __construct(AClientInterface $AClient)
    {
        $this->AClient = $AClient;
    }

    /**
     * @return int
     */
    public function balance(): int
    {
        return $this->AClient->balance();
    }
}
