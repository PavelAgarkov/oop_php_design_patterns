<?php

namespace src\patterns\object_formation\factory_method\src;

use src\patterns\object_formation\factory_method\src\BaseManager;
use src\patterns\object_formation\factory_method\src\MegaAppEncoder;


class AppEncoderManager extends BaseManager
{
    public function getAppEncoder(): BaseEncoder
    {
        return new MegaAppEncoder();
    }
}