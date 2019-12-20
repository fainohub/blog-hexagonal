<?php

declare(strict_types = 1);

namespace Blog\Users\Domain;

use Common\Domain\ValueObject\Email;
use Common\Domain\ValueObject\Password;

interface UserRepository
{
    public function login(Email $email, Password $password): ?User;

    public function add(Email $email, Password $password): void;
}