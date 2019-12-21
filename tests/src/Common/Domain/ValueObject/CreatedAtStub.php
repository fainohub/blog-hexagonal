<?php

declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

use DateTime;
use Common\Domain\ValueObject\CreatedAt;

final class CreatedAtStub
{
    public static function create(DateTime $date): CreatedAt
    {
        return new CreatedAt($date);
    }

    public static function random(): CreatedAt
    {
        return self::create(DateTimeStub::random());
    }
}