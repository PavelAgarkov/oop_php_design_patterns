<?php

namespace src\patterns\performing_tasks_and_presenting_results\observer\src;

use SplSubject;
use SplObserver;
use SplObjectStorage;

class Observable implements SplSubject
{
    private string $record;

    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function changeRecord(string $record): void
    {
        $this->record = $record;
        $this->notify();
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}