<?php

namespace src\patterns\performing_tasks_and_presenting_results\visitor\src;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\FirstVisited;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\SecondVisited;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\ThirdVisited;

interface VisitorInterface
{
    public function firstVisitor(FirstVisited $visited);

    public function secondVisitor(SecondVisited $visited);

    public function thirdVisitor(ThirdVisited $visited);
}