<?php

namespace src\patterns\object_formation\prototype\src;

use src\patterns\object_formation\prototype\src\Sea;
use src\patterns\object_formation\prototype\src\Forest;

class Prototype
{
    private $sea;
    private $forest;

    public function __construct(Sea $sea, Forest $forest)
    {
        $this->sea      = $sea;
        $this->forest   = $forest;
    }

    public function getSea() : Sea
    {
        return clone $this->sea;
    }

    public function getForest() : Forest
    {
        return clone $this->forest;
    }
}