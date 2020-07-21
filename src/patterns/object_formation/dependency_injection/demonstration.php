<?php

use src\patterns\object_formation\dependency_injection\src\Configurations;
use src\patterns\object_formation\dependency_injection\src\DependencyInjection;

/**
 * Шаблон dependency_injection позволяет передавать управление внутренним объектом внешнему объкту.
 */


$dependency = new DependencyInjection(
    new Configurations(
        'One',
        1,
        [0 => 'log']
    )
);

echo $dependency->getInjection();