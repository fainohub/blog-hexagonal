<?php
declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

use DateTime;

final class DateTimeStub
{
    public static function random(): DateTime
    {
        return StubCreator::random()->dateTime;
    }
}