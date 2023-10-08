<?php

namespace App;

class App
{
    private static array $entries = [];

    public static function set($key, $value): void
    {
        static::$entries[$key] = $value;
    }

    public static function get($key, $default = null): static
    {

        return static::$entries[$key] ?? $default;
    }
}