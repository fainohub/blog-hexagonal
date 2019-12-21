<?php

declare(strict_types = 1);

namespace Common\Domain\ValueObject;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid as RamseyUuid;

class Uuid
{
    private $value;

    private function __construct(string $value)
    {
        $this->validate($value);
        $this->value = $value;
    }

    public static function create(): self
    {
        return new self(RamseyUuid::uuid4()->toString());
    }

    public static function createFromData(string $value): self
    {
        return new self($value);
    }

    public function value(): string
    {
        return $this->value;
    }

    private function validate(string $value): void
    {
        if (!RamseyUuid::isValid($value)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, is_scalar($value) ? $value : gettype($value))
            );
        }
    }

    public function __toString()
    {
        return $this->value();
    }
}