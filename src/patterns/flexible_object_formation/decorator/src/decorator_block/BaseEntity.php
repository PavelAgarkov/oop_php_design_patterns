<?php

namespace src\patterns\flexible_object_formation\decorator\src\decorator_block;

use src\patterns\flexible_object_formation\decorator\src\decorator_block\DecoratorInterface;
use src\patterns\flexible_object_formation\decorator\src\ControlledEntity;

abstract class BaseEntity implements DecoratorInterface
{
    abstract public function decorate(ControlledEntity $entity): void;
}