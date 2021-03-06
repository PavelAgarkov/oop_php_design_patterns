<?php

namespace src\patterns\performing_tasks_and_presenting_results\visitor\src\visitor;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\VisitedInterface;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\FirstVisited;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\SecondVisited;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\ThirdVisited;

class Visitor implements VisitorInterface
{

    private array $visited = [];

    public function firstVisitor(FirstVisited $visited): void
    {
        $this->visited[] = $visited;
    }

    public function secondVisitor(SecondVisited $visited): void
    {
        $this->visited[] = $visited;
    }

    public function thirdVisitor(ThirdVisited $visited): void
    {
        $this->visited[] = $visited;
    }

    public function getVisitors(): array
    {
        return $this->visited;
    }
}