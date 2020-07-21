<?php

namespace src\patterns\object_formation\abstract_factory\src\encoders\app_encoder;

use src\patterns\object_formation\abstract_factory\src\encoders\app_encoder\AppEncoderInterface;

class MegaAppEncoder extends AppEncoder implements AppEncoderInterface
{
    public function encode(): string
    {
        return 'This object belongs ' . __CLASS__;
    }
}