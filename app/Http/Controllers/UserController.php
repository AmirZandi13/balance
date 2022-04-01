<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserBalanceResource;
use App\Models\User;
use App\Services\User\UserServiceInterface;

class UserController extends Controller
{
    /**
     * @param UserServiceInterface $userService
     *
     * @return UserBalanceResource
     */
    public function balance(UserServiceInterface $userService): UserBalanceResource
    {
        /** @var User $user */
        $user = auth()->user();

        $balance = $userService->balance($user);

        return new UserBalanceResource($balance);
    }
}
