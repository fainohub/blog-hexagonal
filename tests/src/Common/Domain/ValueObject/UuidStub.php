<?php

declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

use Common\Domain\ValueObject\Uuid;

final class UuidStub
{
    public static function create(string $value): Uuid
    {
        return Uuid::createFromData($value);
    }

    public static function random(): Uuid
    {
        return self::create(StubCreator::random()->unique()->uuid);
    }
}