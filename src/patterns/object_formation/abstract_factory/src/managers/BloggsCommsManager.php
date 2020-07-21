<?php

namespace src\patterns\object_formation\abstract_factory\src\managers;

use src\patterns\object_formation\abstract_factory\src\encoders\app_encoder\BloggsAppEncoder;
use src\patterns\object_formation\abstract_factory\src\encoders\ttd_encoder\BloggsTtdEncoder;

class BloggsCommsManager extends CommsManager
{
    public function getAppEncoder(): BloggsAppEncoder
    {
        return new BloggsAppEncoder();
    }

    public function getTtdEncoder(): BloggsTtdEncoder
    {
        return new BloggsTtdEncoder();
    }
}