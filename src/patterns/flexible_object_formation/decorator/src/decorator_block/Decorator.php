<?php

namespace src\patterns\flexible_object_formation\decorator\src\decorator_block;

use src\patterns\flexible_object_formation\decorator\src\decorator_block\BaseEntity;
use src\patterns\flexible_object_formation\decorator\src\decorator_block\DecoratorInterface;

abstract class Decorator extends BaseEntity
{
    protected DecoratorInterface $decorateEntity;

    public function __construct(BaseEntity $entity)
    {
        $this->decorateEntity = $entity;
    }
}