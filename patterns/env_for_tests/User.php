<?php

namespace patterns\env_for_tests;

use patterns\object_formation\singleton\src\SingletonInterface;
use patterns\object_formation\singleton\src\SingletonTrait;

class User implements SingletonInterface
{
    // используем трейт SingletonTrait содержащий функционал singleton и реализовываем интерфейс SingletonInterface
    use SingletonTrait;

    public function isSingleton(): bool
    {
    }

}