<?php

use src\env_for_tests\User;

/**
 * Применение шаблона singleton обусловллено необходимостью выделить глобальный объект, который записывается только
 *  один раз за запуск скрипта, после чего может долько модифицироваться. Реадизация шаблона singleton в данном коде
 *  позволяет назначать классу возможность стать singleton(trait & interface).
 */

User::initialization();
User::changeState('opp', 1);
$User_1 = User::get();
print_r($User_1);

User::initialization();
User::changeState('ozo', 2);
$User_1 = User::get();
print_r($User_1);