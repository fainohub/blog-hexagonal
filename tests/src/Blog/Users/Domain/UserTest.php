<?php

declare(strict_types = 1);

namespace Tests\Blog\Users\Domain;

use PHPUnit\Framework\TestCase;
use Blog\Users\Domain\User;
use Blog\Users\Domain\UserToken;
use Common\Domain\ValueObject\Uuid;
use Common\Domain\ValueObject\Email;
use Tests\Common\Domain\ValueObject\PasswordStub;

class UserTest extends TestCase
{

    public function testCreateUserSuccess()
    {
        $stub = UserStub::random();
        $password = PasswordStub::random();

        $user = User::create($stub->id(), $stub->email(), $password, $stub->token());

        $this->assertInstanceOf(User::class, $user);
        $this->assertInstanceOf(Uuid::class, $user->id());
        $this->assertInstanceOf(Email::class, $user->email());
        $this->assertInstanceOf(UserToken::class, $user->token());
        $this->assertSame($stub->id()->value(), $user->id()->value());
        $this->assertSame($stub->email()->value(), $user->email()->value());
        $this->assertSame($stub->token()->value(), $user->token()->value());
    }
}