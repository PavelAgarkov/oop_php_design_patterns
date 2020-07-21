<?php
use src\patterns\object_formation\prototype\src\EarthSea;
use src\patterns\object_formation\prototype\src\EarthForest;

use src\patterns\object_formation\prototype\src\MarsSea;
use src\patterns\object_formation\prototype\src\MarsForest;

use src\patterns\object_formation\prototype\src\Prototype;

/**
 * Шаблон prototype организует фабрику, которая возращает клонированные объекты. Вместо наследования используется
 *  композиция. Клонирование объекта встроенного в объект осуществляется по ссылке. Логику клонирования можно
 *  переопределить использовав метод __clone().
 */

$prototypeEarth = new Prototype(
    new EarthSea(),
    new EarthForest()
);

print_r($prototypeEarth->getForest());
print_r($prototypeEarth->getSea());

$prototypeMars = new Prototype(
    new MarsSea(),
    new MarsForest()
);

print_r($prototypeMars->getForest());
print_r($prototypeMars->getSea());

$mixPrototype = new Prototype(
    new EarthSea(),
    new MarsForest()
);

print_r($mixPrototype->getForest());
print_r($mixPrototype->getSea());