<?php

use src\patterns\performing_tasks_and_presenting_results\strategy\src\Strategy;

use src\patterns\performing_tasks_and_presenting_results\strategy\src\FirstImplementation;
use src\patterns\performing_tasks_and_presenting_results\strategy\src\SecondImplementation;
use src\patterns\performing_tasks_and_presenting_results\strategy\src\ThirdImplementation;

/**
 * Шаблон strategy позволяет реализовать использование ситуативного выполнения кода в зависимости от того какой
 *  объект передается в объект-контейнер, который принимает объект(ы) общего родителя(имеющие одинаковый интерфейс).
 *  Объекты имеющие общий интерфейс содержат методы или поля несущие в себе параметры для выполнения ситуативного кода
 *  внутри объекта контейнера.
 */

$strategyForFirstImplementation = (new Strategy(
    new FirstImplementation()
))->executeByContext();

$strategyForSecondImplementation = (new Strategy(
  new SecondImplementation()
))->executeByContext();

$strategyForThirdImplementation = (new Strategy(
    new ThirdImplementation()
))->executeByContext();

echo "{$strategyForFirstImplementation} {$strategyForSecondImplementation} {$strategyForThirdImplementation}" . PHP_EOL;