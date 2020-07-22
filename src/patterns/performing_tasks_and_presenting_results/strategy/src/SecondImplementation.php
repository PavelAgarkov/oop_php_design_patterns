<?php

namespace src\patterns\performing_tasks_and_presenting_results\strategy\src;

use src\patterns\performing_tasks_and_presenting_results\strategy\src\StrategyInterface;

class SecondImplementation implements StrategyInterface
{
    public function strategyImplementation(): string
    {
        return 'second_implementation';
    }
}