<?php

namespace src\patterns\flexible_object_formation\decorator\src\decorator_block;

use src\patterns\flexible_object_formation\decorator\src\ControlledEntity;
use src\patterns\flexible_object_formation\decorator\src\decorator_block\Decorator;

class FirstDecorateStep extends Decorator
{
    public function decorate(ControlledEntity $entity): void
    {
        echo __CLASS__ . PHP_EOL;
        $this->decorateEntity->decorate($entity);
    }
}