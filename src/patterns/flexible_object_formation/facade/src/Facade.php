<?php

namespace src\patterns\flexible_object_formation\facade\src;

class Facade
{
    private array $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function addElementArrayConfig(array $diff): Facade
    {
        $config = set_array_config($this->config, $diff);
        $this->config = $config;
        return $this;
    }

    public function deleteElementArrayConfig(array $diff): Facade
    {
        $config = delete_array_config($this->config, $diff);
        $this->config = $config;
        return $this;
    }

    public function getArray(): array
    {
        return $this->config;
    }
}