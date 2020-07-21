<?php

namespace src\patterns\object_formation\abstract_factory\src\managers;

use src\patterns\object_formation\abstract_factory\src\encoders\app_encoder\AppEncoder;
use src\patterns\object_formation\abstract_factory\src\encoders\ttd_encoder\TtdEncoder;

abstract class CommsManager
{
    abstract public function getAppEncoder() : AppEncoder;
    abstract public function getTtdEncoder() : TtdEncoder;
}