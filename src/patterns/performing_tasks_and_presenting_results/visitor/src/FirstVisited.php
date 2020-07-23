<?php

namespace src\patterns\performing_tasks_and_presenting_results\visitor\src;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\BaseVisited;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\VisitedInterface;

class FirstVisited extends BaseVisited implements VisitedInterface
{

    public function accept(VisitorInterface $visitor)
    {
        $visitor->firstVisitor($this);
    }
}