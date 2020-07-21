<?php

namespace src\patterns\flexible_object_formation\composite\src;

use src\patterns\flexible_object_formation\composite\src\CompositeInterface;

class SecondCompositeElement implements CompositeInterface
{
    private string $inputString = '';

    public function __construct(string $string)
    {
        $this->inputString = $string;
    }

    public function compositeRender(): string
    {

        return "Composite element number {$this->inputString} " . __CLASS__;
    }
}