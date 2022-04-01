<?php

namespace App\Services\Balance\v1;

use App\Services\Balance\BalanceServiceInterface;
use App\ThirdParties\Banks\A\A;
use App\ThirdParties\Banks\B\B;
use App\ThirdParties\Banks\BankFactory;
use App\ThirdParties\Banks\BankInterface;

class BalanceService implements BalanceServiceInterface
{
    /**
     * @var BankFactory
     */
    private BankFactory $bankFactory;

    /**
     * @var array|string[]
     */
    private array $banks = [
        A::class,
        B::class
    ];

    /**
     * @param BankFactory $bankFactory
     */
    public function __construct(BankFactory $bankFactory)
    {
        $this->bankFactory = $bankFactory;
    }

    /**
     * @return int
     */
    public function userBalance(): int
    {
        $balance = 0;

        foreach ($this->getBanks() as $bank) {
            $bankInstance = $this->bankFactory->make($bank);

            if ($bankInstance instanceof BankInterface) {
                $balance += $bankInstance->balance();
            }
        }

        return $balance;
    }

    /**
     * @return array|string[]
     */
    public function getBanks(): array
    {
        return $this->banks;
    }

    /**
     * @param BankInterface $bank
     *
     * @return void
     */
    public function addBank(BankInterface $bank): void
    {
        $this->banks[] = $bank;
    }
}
