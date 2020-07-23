<?php

namespace src\patterns\performing_tasks_and_presenting_results\visitor\src\visitor;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\FirstVisited;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\SecondVisited;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\visited\ThirdVisited;

interface VisitorInterface
{
    public function firstVisitor(FirstVisited $visited): void;

    public function secondVisitor(SecondVisited $visited): void;

    public function thirdVisitor(ThirdVisited $visited): void;
}