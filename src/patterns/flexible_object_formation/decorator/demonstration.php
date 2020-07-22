<?php

use src\patterns\flexible_object_formation\decorator\src\decorator_block\FirstDecorateStep;
use src\patterns\flexible_object_formation\decorator\src\decorator_block\SecondDecorateStep;
use src\patterns\flexible_object_formation\decorator\src\decorator_block\ThirdDecorateStep;
use src\patterns\flexible_object_formation\decorator\src\decorator_block\LastDecorateStep;

use src\patterns\flexible_object_formation\decorator\src\ControlledEntity;

/**
 * Шаблон decorator заставляет объединить одним интерфейсом дочерние сущности базовой сущности и
 *  деоратора (декоратор это сущность наследуемая от базовой) и взамен дает возможность рализации
 *  пошаговой обработки контролируемой сущности в необходимой последовательности.
 *  Декоратор работает по принципу очереди. Записывает объект наверх, забирает снизу.
 */


$decorator = new FirstDecorateStep(
    new SecondDecorateStep(
        new ThirdDecorateStep(
            new LastDecorateStep()
        )
    )
);

$decorator->decorate(new ControlledEntity());