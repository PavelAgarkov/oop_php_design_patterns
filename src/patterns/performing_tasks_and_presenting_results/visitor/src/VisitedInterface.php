<?php

namespace src\patterns\performing_tasks_and_presenting_results\visitor\src;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\VisitorInterface;

interface VisitedInterface
{
    public function accept(VisitorInterface $visitor): void;
}