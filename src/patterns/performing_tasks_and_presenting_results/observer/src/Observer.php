<?php

namespace src\patterns\performing_tasks_and_presenting_results\observer\src;

use SplObserver;
use SplSubject;

class Observer implements SplObserver
{
    private array $changes = [];

    public function update(SplSubject $subject): void
    {
        $this->changes[] = clone $subject;
    }

    public function getChanges(): array
    {
        return $this->changes;
    }

    public function __clone()
    {

    }

    public function countChanges(): int
    {
        return count($this->changes);
    }
}