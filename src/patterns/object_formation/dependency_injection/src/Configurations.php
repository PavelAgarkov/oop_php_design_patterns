<?php

namespace src\patterns\object_formation\dependency_injection\src;

class Configurations
{
    private string $firstConfig;
    private int $secondConfig;
    private array $thirdConfig;

    public function __construct(string $firstConfig, int $secondConfig, array $thirdConfig)
    {
        $this->firstConfig  = $firstConfig;
        $this->secondConfig = $secondConfig;
        $this->thirdConfig  = $thirdConfig;
    }

    public function getFirstConfig() :string
    {
        return $this->firstConfig;
    }

    public function getSecondConfig() :int
    {
        return $this->secondConfig;
    }

    public function getThirdConfig() :array
    {
        return $this->thirdConfig;
    }
}