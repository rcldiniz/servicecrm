<?php

namespace ServiceCRM\Core;

class Container
{
    protected static array $services = [];

    public static function boot(): void
    {
    }

    public static function singleton(string $id, callable $resolver): void
    {
        self::$services[$id] = $resolver;
    }

    public static function get(string $id)
    {
        if (!isset(self::$services[$id])) {
            return null;
        }

        return self::$services[$id]();
    }
}
