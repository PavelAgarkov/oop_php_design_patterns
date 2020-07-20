<?php

namespace src\patterns\object_formation\factory_method\src;

use src\patterns\object_formation\factory_method\src\BaseEncoder;


class MegaAppEncoder extends BaseEncoder
{
    public function encode(): ?string
    {
        return "Метод класса " . __CLASS__;
    }
}