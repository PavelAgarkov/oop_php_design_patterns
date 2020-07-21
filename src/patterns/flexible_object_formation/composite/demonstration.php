<?php

use src\patterns\flexible_object_formation\composite\src\Composite;
use src\patterns\flexible_object_formation\composite\src\FirstCompositeElement;
use src\patterns\flexible_object_formation\composite\src\SecondCompositeElement;

/**
 * Шаблон composite позволяет использовать композицию вместо наследования. Это достигается путем объединения
 *  в родительский объект всех необходимых дочерних( в том числе и самого себя, если нужно) и обращения с подгруппой
 *  объектов также как и с одним объектом, реализуя общий интерфейс. В данном примере образовывается рекурсия, которая
 *  успешно разрешается наличием общего интерфейса.
 */

$composite = new Composite();
$composite->addElement(new FirstCompositeElement());
$composite->addElement(new SecondCompositeElement('one'));

$embed = new Composite();
$embed->addElement(new FirstCompositeElement());
$embed->addElement(new SecondCompositeElement('two'));

$composite->addElement($embed);
echo $composite->compositeRender();