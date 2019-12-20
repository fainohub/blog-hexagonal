<?php

declare(strict_types = 1);

namespace Blog\Users\Domain;

use Common\Domain\ValueObject\Email;
use Common\Domain\ValueObject\Password;

class User
{
    private $id;
    private $email;
    private $password;
    private $token;

    public function __construct(UserId $id, Email $email, Password $password, UserToken $token)
    {
        $this->id       = $id;
        $this->email    = $email;
        $this->password = $password;
        $this->token    = $token;
    }

    public function id(): UserId
    {
        return $this->id;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function token(): UserToken
    {
        return $this->token;
    }

    public function toArray(): array
    {
        return [
            'id'    => $this->id(),
            'email' => $this->email(),
            'token' => $this->token()
        ];
    }
}