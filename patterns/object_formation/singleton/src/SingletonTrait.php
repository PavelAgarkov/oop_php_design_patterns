<?php

namespace patterns\object_formation\singleton\src;

trait SingletonTrait
{
    private static array $singletonInstance =
        [
            'app' => null,
            'options' => []
        ];

    public static function initialization(): void
    {
        if (empty(static::$singletonInstance['app'])) {
            static::$singletonInstance['app'] = new static();
        }
    }

    public static function get(): ?array
    {
        return static::$singletonInstance ?? null;
    }

    public static function changeState($option, $optionValue): ?array
    {
        static::$singletonInstance['options'][$option] = $optionValue;

        return static::$singletonInstance;
    }
}