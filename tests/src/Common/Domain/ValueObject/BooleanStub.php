<?php

declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

final class BooleanStub
{
    public static function random(): bool
    {
        return StubCreator::random()->boolean;
    }
}