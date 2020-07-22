<?php

namespace src\patterns\flexible_object_formation\decorator\src\decorator_block;

use src\patterns\flexible_object_formation\decorator\src\ControlledEntity;

interface DecoratorInterface
{
    public function decorate(ControlledEntity $entity): void;
}