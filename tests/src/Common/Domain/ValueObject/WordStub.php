<?php

declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

final class WordStub
{
    public static function random(): string
    {
        return StubCreator::random()->word;
    }
}