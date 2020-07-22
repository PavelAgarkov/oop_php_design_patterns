<?php

namespace src\patterns\flexible_object_formation\decorator\src\decorator_block;

use src\patterns\flexible_object_formation\decorator\src\decorator_block\Decorator;
use src\patterns\flexible_object_formation\decorator\src\ControlledEntity;

class ThirdDecorateStep extends Decorator
{
    public function decorate(ControlledEntity $entity): void
    {
        echo __CLASS__ . PHP_EOL;
        $this->decorateEntity->decorate($entity);
    }
}