<?php

use src\patterns\performing_tasks_and_presenting_results\visitor\src\Visitor;

use src\patterns\performing_tasks_and_presenting_results\visitor\src\FirstVisited;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\SecondVisited;
use src\patterns\performing_tasks_and_presenting_results\visitor\src\ThirdVisited;

/**
 * Шаблон visitor(посетителя) предлагает перенести логику выполнения наследуемых сущностей в сущность visitor и, в дальнейшем
 *  вызывать код управления сущностями через visitor. Visitor может хранить ссылки на посещенные объекты.
 *  У каждого visited(посещаемого) перегружен метод ::accept из интерфейса VisitedInterface.
 *  В метод ::accept() передается объект visitor, который выполняет соответствующий код для visited.
 */

$visitor = new Visitor();

$firstVisited = new FirstVisited('first');
$secondVisited = new SecondVisited('second');
$thirdVisited= new ThirdVisited('third');

$firstVisited->accept($visitor);
$secondVisited->accept($visitor);
$thirdVisited->accept($visitor);

echo $firstVisited->name() . PHP_EOL;
echo $secondVisited->name() . PHP_EOL;
echo $thirdVisited->name() . PHP_EOL;

print_r($visitor->getVisitors());