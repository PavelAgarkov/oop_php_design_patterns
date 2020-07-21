<?php

namespace src\patterns\object_formation\abstract_factory\src\encoders\ttd_encoder;

use src\patterns\object_formation\abstract_factory\src\encoders\app_encoder\AppEncoderInterface;

class MegaTtdEncoder extends TtdEncoder implements AppEncoderInterface
{
    public function encode(): string
    {
        return 'This object belongs ' . __CLASS__;
    }
}