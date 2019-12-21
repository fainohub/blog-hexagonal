<?php
declare(strict_types = 1);

namespace Blog\Users\Application\Login;

use Common\Domain\ValueObject\Email;
use Common\Domain\ValueObject\Password;
use Blog\Users\Domain\User;
use Blog\Users\Domain\UserNotFound;
use Blog\Users\Domain\UserRepository;

final class UserLogin
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Email $email, Password $password): User
    {
        $user = $this->repository->login($email, $password);

        if (null === $user) {
            throw new UserNotFound(sprintf('The user <%s> does not exists', $email->value()));
        }

        return $user;
    }
}