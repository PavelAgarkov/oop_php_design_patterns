<?php

namespace src\patterns\performing_tasks_and_presenting_results\strategy\src;


class FirstImplementation implements StrategyInterface
{
    public function strategyImplementation(): string
    {
        return 'first_implementation';
    }
}