<?php

namespace App\Services\User;

use App\Models\User;

interface UserServiceInterface
{
    /**
     * @param User $user
     *
     * @return array
     */
    public function balance(User $user): array;
}
