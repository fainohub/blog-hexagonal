<?php

declare(strict_types = 1);

namespace Tests\Common\Domain\ValueObject;

use Faker\Factory;
use Faker\Generator;

final class StubCreator
{
    /**
     * @var StubCreator
     */
    private static $instance;

    /**
     * @var Generator
     */
    private static $faker;

    public static function getInstance(): StubCreator
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public static function random(): Generator
    {
        return self::getInstance()->faker();
    }

    public function faker(): Generator
    {
        return self::$faker = self::$faker ?: Factory::create();
    }
}