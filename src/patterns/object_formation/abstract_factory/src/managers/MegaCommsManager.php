<?php

namespace src\patterns\object_formation\abstract_factory\src\managers;

use src\patterns\object_formation\abstract_factory\src\encoders\app_encoder\MegaAppEncoder;
use src\patterns\object_formation\abstract_factory\src\encoders\ttd_encoder\MegaTtdEncoder;

class MegaCommsManager extends CommsManager
{
    public function getAppEncoder(): MegaAppEncoder
    {
        return new MegaAppEncoder();
    }

    public function getTtdEncoder(): MegaTtdEncoder
    {
        return new MegaTtdEncoder();
    }
}