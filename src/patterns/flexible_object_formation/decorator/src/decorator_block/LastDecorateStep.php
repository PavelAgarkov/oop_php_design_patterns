<?php

namespace src\patterns\flexible_object_formation\decorator\src\decorator_block;

use src\patterns\flexible_object_formation\decorator\src\ControlledEntity;
use src\patterns\flexible_object_formation\decorator\src\decorator_block\BaseEntity;

class LastDecorateStep extends BaseEntity
{
    public function decorate(ControlledEntity $entity): void
    {
        echo __CLASS__ . PHP_EOL;
    }
}