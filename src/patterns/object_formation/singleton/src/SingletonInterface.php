<?php

namespace src\patterns\object_formation\singleton\src;

interface SingletonInterface
{
    public function isSingleton(): bool;

    public static function initialization(): void;

    public static function get(): ?array;

    public static function changeState($option, $optionValue): ?array;
}