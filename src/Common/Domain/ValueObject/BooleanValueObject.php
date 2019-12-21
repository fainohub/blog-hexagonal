<?php

declare(strict_types = 1);

namespace Common\Domain\ValueObject;

abstract class BooleanValueObject
{
    /**
     * @var bool
     */
    protected $value;

    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    public function value(): bool
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value ? 'true' : 'false';
    }
}