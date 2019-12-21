<?php

declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

use Common\Domain\ValueObject\Email;

final class EmailStub
{
    public static function create(string $email): Email
    {
        return new Email($email);
    }

    public static function random(): Email
    {
        return self::create(StubCreator::random()->email);
    }
}