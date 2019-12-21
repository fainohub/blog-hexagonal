<?php

declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

use DateTime;
use Common\Domain\ValueObject\UpdatedAt;

final class UpdatedAtStub
{
    public static function create(DateTime $date): UpdatedAt
    {
        return new UpdatedAt($date);
    }

    public static function random(): UpdatedAt
    {
        return self::create(DateTimeStub::random());
    }
}