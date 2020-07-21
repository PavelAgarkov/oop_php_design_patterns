<?php

namespace src\patterns\flexible_object_formation\composite\src;

use src\patterns\flexible_object_formation\composite\src\CompositeInterface;

class Composite implements CompositeInterface
{
    private array $compositeElements;

    public function compositeRender(): string
    {
        $compositeText = 'Start text' . PHP_EOL;

        if(!empty($this->compositeElements)) {
            foreach ($this->compositeElements as $element) {
                $compositeText .= $element->compositeRender() . PHP_EOL;
            }
        }

        $compositeText .= 'End text' . PHP_EOL;

        return $compositeText;
    }

    public function addElement(CompositeInterface $element)
    {
        $this->compositeElements[] = $element;
    }
}