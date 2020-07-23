<?php

namespace src\patterns\performing_tasks_and_presenting_results\visitor\src;

abstract class BaseVisited
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }

}