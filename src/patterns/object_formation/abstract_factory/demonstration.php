<?php
use src\patterns\object_formation\abstract_factory\src\managers\BloggsCommsManager;
use src\patterns\object_formation\abstract_factory\src\managers\MegaCommsManager;

/**
 * Шаблон abstract_factory позволяет создавать логику создания объекта при помощи менеджера. Каждый менеджер отвечает
 *  за определенные типы объектов (за ветвь реализаций), а не за один объект (как в шаблоне factory_method).
 */

$blogsManager = new BloggsCommsManager();
print $blogsManager->getAppEncoder()->encode() . PHP_EOL;
print $blogsManager->getTtdEncoder()->encode() . PHP_EOL;

$megaManager = new MegaCommsManager();
print $megaManager->getAppEncoder()->encode() . PHP_EOL;
print $megaManager->getTtdEncoder()->encode() . PHP_EOL;
