<?php

declare(strict_types = 1);

namespace Blog\Users\Application;

use Blog\Users\Domain\User;

final class UserLoginResponse
{
    public function __invoke(User $user): array
    {
        return [
            'id'    => $user->id()->value(),
            'email' => $user->email()->value(),
            'token' => $user->token()->value(),
        ];
    }
}