<?php

use src\patterns\object_formation\factory_method\src\BlogEncoderManager;
use src\patterns\object_formation\factory_method\src\AppEncoderManager;

/**
 * Применение шаблона factory_method заключается в создании класса менеджера, который будет соответствоать классу
 *  объекта для создания. Класс менеджера создает соответсвующий объект. Такая концепция позволяет уйти от условий
 *  при решении какого типа созавать объект, но не уйти от концепции выбора типа объекта в целом.
 */

$blogManager = new BlogEncoderManager();
print $blogManager->getAppEncoder()->encode() . PHP_EOL;

$appManager = new AppEncoderManager();
print $appManager->getAppEncoder()->encode() . PHP_EOL;