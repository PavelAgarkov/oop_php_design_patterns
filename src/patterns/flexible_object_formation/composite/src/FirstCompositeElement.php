<?php

namespace src\patterns\flexible_object_formation\composite\src;

use src\patterns\flexible_object_formation\composite\src\CompositeInterface;

class FirstCompositeElement implements CompositeInterface
{
    public function compositeRender(): string
    {
        return 'Composite element number ' . __CLASS__;
    }
}