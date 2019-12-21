<?php

declare(strict_types = 1);

namespace Tests\Blog\Users\Domain;

use Blog\Users\Domain\User;
use Blog\Users\Domain\UserToken;
use Common\Domain\ValueObject\Uuid;
use Common\Domain\ValueObject\Email;
use Common\Domain\ValueObject\Password;
use Tests\Common\Domain\ValueObject\UuidStub;
use Tests\Common\Domain\ValueObject\EmailStub;
use Tests\Common\Domain\ValueObject\PasswordStub;

final class UserStub
{
    public static function create(Uuid $id, Email $email, Password $password, UserToken $token): User
    {
        return User::create($id, $email, $password, $token);
    }

    public static function random()
    {
        return self::create(
            UuidStub::random(),
            EmailStub::random(),
            PasswordStub::random(),
            UserTokenStub::random()
        );
    }
}