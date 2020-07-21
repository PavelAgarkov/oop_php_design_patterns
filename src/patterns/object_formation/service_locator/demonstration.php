<?php

use src\patterns\object_formation\service_locator\src\ServiceLocator;

/**
 * Шаблон service_locator позволяет заполнить объект singleton при инициализации, в котором можно изменять состояние
 *  контекста созданного в нем объекта. При этом все равно создается только один инстанс, как и в singleton.
 */

$serviceLocator = ServiceLocator::getInstance();
print_r($serviceLocator->getCommsManager());