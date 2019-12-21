<?php

declare(strict_types = 1);

namespace Tests\Blog\Users\Domain;

use Blog\Users\Domain\UserToken;
use Tests\Common\Domain\ValueObject\StubCreator;

final class UserTokenStub
{
    public static function create(string $token): UserToken
    {
        return new UserToken($token);
    }

    public static function random(): UserToken
    {
        return self::create(StubCreator::random()->password);
    }
}