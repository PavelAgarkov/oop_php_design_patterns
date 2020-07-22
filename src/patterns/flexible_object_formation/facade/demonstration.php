<?php

use src\patterns\flexible_object_formation\facade\src\Facade;

require_once '_config_db.php';

/**
 * Шаблон facade предназначен для разграничения логики и предоставления комфортного интерфейса для дальнейшего
 *  испозльзования в приложении (класс или слой обертка, для улучшения читаемости кода и избежание последствий
 *  использования кода других разработчиков напрямую)
 */

$facade = new Facade(get_config());

$config = $facade->addElementArrayConfig(['app' => 12])->getArray();
print_r($config);
$config = $facade->deleteElementArrayConfig(['app' => 12])->getArray();
print_r($config);