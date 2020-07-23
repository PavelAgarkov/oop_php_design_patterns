<?php

namespace src\patterns\performing_tasks_and_presenting_results\visitor\src\visited;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\visitor\VisitorInterface;

interface VisitedInterface
{
    public function accept(VisitorInterface $visitor): void;
}