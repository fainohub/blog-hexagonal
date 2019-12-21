<?php
declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

use Common\Domain\ValueObject\Password;

final class PasswordStub
{
    public static function create(string $password)
    {
        return new Password($password);
    }

    public static function random()
    {
        return self::create(StubCreator::random()->password);
    }
}