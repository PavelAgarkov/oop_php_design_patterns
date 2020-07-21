<?php

namespace src\patterns\object_formation\service_locator\src;

use src\patterns\object_formation\abstract_factory\src\managers\BloggsCommsManager;
use src\patterns\object_formation\abstract_factory\src\managers\CommsManager;
use src\patterns\object_formation\abstract_factory\src\managers\MegaCommsManager;
use src\patterns\object_formation\service_locator\src\Settings;

class ServiceLocator
{
    private static ServiceLocator $instance;

    // использование кода из abstract factory
    private CommsManager $commsManager;

    private function __construct()
    {
        $this->init();
    }

    //обычная abstract_factory
    private function init(): void
    {
        switch (Settings::$TYPE) {
            case 'Mega':
                $this->commsManager = new MegaCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManager();
                break;
        }
    }

    // singleton
    public static function getInstance(): ServiceLocator
    {
        if (empty(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function getCommsManager(): CommsManager
    {
        return $this->commsManager;
    }

}