<?php

namespace src\patterns\object_formation\dependency_injection\src;

use src\patterns\object_formation\dependency_injection\src\Configurations;

class DependencyInjection
{
    private Configurations $configurations;

    public function __construct(Configurations $configurations)
    {
        $this->configurations = $configurations;
    }

    public function getInjection(): string
    {
        return "{$this->configurations->getFirstConfig()}" . PHP_EOL
            . "{$this->configurations->getSecondConfig()}" . PHP_EOL
            . "{$this->configurations->getThirdConfig()[0]}" . PHP_EOL;
    }

}