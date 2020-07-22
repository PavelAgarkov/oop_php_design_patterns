<?php

namespace src\patterns\performing_tasks_and_presenting_results\strategy\src;

use src\patterns\performing_tasks_and_presenting_results\strategy\src\StrategyInterface;

class Strategy
{
    private const ARRAY = [
        'first_implementation' => 'first',
        'second_implementation' => 'second',
        'third_implementation' => 'third'
    ];

    public StrategyInterface $strategyContext;

    public function __construct(StrategyInterface $context)
    {
        $this->strategyContext = $context;
    }

    public function executeByContext(): string
    {
        return static::ARRAY[$this->strategyContext->strategyImplementation()];
    }
}