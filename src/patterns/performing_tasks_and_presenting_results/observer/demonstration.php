<?php

use src\patterns\performing_tasks_and_presenting_results\observer\src\Observable;
use src\patterns\performing_tasks_and_presenting_results\observer\src\Observer;

/**
 * Шаблон observer позволяет подписываться на события объекта observable любому количеству объектов observer,
 *  получающих уведомления при изменении observable (при вызове метода notify() контракта SplSubject).
 *  SplObjectStorage (стандартный класс) используется объектом observable как хранилище observers.
 *  Объект observer реализует контракт SplSubject, а observable - SplSubject.
 *  Использование стандартных средств облегчает работу создания шаблона observer.
 */

$observable = new Observable();

$firstObserver = new Observer();
$secondObserver = new Observer();

$observable->attach($firstObserver);
$observable->attach($secondObserver);

$observable->changeRecord('one_record');
$observable->changeRecord('two_records');
$observable->changeRecord('tree_records');

// number of observers in the observed
echo $count = $observable->count() . PHP_EOL;

// number of events in the first observer
echo $countChangesInFirstObserver = $firstObserver->countChanges() . PHP_EOL;

// number of events in the second observer
echo $countChangesInSecondObserver = $secondObserver->countChanges() . PHP_EOL;

//print_r($firstObserver->getChanges());
//print_r($secondObserver->getChanges());
