<?php

declare(strict_types = 1);

namespace Blog\Users\Application\Login;

use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\pipe;
use Common\Domain\ValueObject\Email;
use Common\Domain\ValueObject\Password;
use Blog\Users\Application\UserLoginResponse;

final class UserLoginQueryHandler
{
    private $login;

    public function __construct(UserLogin $login)
    {
        $this->login = pipe($login, new UserLoginResponse());
    }

    public function __invoke(UserLoginQuery $query): array
    {
        $email    = new Email($query->email());
        $password = new Password($query->password());

        return apply($this->login, [$email, $password]);
    }
}