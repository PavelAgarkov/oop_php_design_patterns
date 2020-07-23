<?php

namespace src\patterns\performing_tasks_and_presenting_results\visitor\src\visited;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\BaseVisited;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\VisitedInterface;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\visitor\VisitorInterface;

class ThirdVisited extends BaseVisited implements VisitedInterface
{

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->thirdVisitor($this);
    }
}