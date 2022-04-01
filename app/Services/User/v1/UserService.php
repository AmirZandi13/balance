<?php

namespace App\Services\User\v1;

use App\Models\User;
use App\Services\Balance\v1\BalanceService;
use App\Services\User\UserServiceInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var BalanceService
     */
    private BalanceService $balanceService;

    /**
     * @param BalanceService $balanceService
     */
    public function __construct(BalanceService $balanceService)
    {
        $this->balanceService = $balanceService;
    }

    /**
     * @param User $user
     *
     * @return array
     */
    public function balance(User $user): array
    {
        return [
            'balance' => $this->balanceService->userBalance()
        ];
    }
}
