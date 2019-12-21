<?php

declare(strict_types = 1);

namespace Common\Domain\ValueObject;

use DateTime;

abstract class DateTimeValueObject
{
    /**
     * @var DateTime
     */
    protected $value;

    public function __construct(DateTime $value)
    {
        $this->value = $value;
    }

    public function value(): DateTime
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value->format('Y-m-d H:m:i');
    }
}