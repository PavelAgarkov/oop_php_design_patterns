<?php

use patterns\env_for_tests\User;

User::initialization();
User::changeState('opp', 1);
$User_1 = User::get();
print_r($User_1);

User::initialization();
User::changeState('ozo', 2);
$User_1 = User::get();
print_r($User_1);