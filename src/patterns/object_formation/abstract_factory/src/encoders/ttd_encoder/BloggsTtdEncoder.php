<?php

namespace src\patterns\object_formation\abstract_factory\src\encoders\ttd_encoder;

use src\patterns\object_formation\abstract_factory\src\encoders\ttd_encoder\TtdEncoderInterface;

class BloggsTtdEncoder extends TtdEncoder implements TtdEncoderInterface
{
    public function encode(): string
    {
        return 'This object belongs ' . __CLASS__;
    }
}