<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use Blog\Users\Domain\User;
use Blog\Users\Domain\UserToken;
use Common\Domain\ValueObject\Uuid;
use Common\Domain\ValueObject\Email;
use Common\Domain\ValueObject\Password;

class UserTest extends TestCase
{
    private $data;

    protected function setUp(): void
    {
        parent::setUp();

        $faker = Faker\Factory::create();

        $this->data = [
            'email'    => $faker->email,
            'token'    => $faker->password,
            'password' => $faker->password
        ];
    }

    public function testCreateUserSuccess()
    {
        $id = Uuid::create();
        $email = new Email($this->data['email']);
        $token = new UserToken($this->data['token']);
        $password = new Password($this->data['password']);

        $user = new User($id, $email, $password, $token);

        $this->assertInstanceOf(User::class, $user);
        $this->assertInstanceOf(Uuid::class, $user->id());
        $this->assertInstanceOf(Email::class, $user->email());
        $this->assertInstanceOf(UserToken::class, $user->token());
    }
}