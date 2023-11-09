<?php
namespace Your\Namespace;

class MargarittaPizzaStore extends PizzaStore {
    public function createPizza($type): Pizza {
        switch ($type) {
            case 'margaritta':
                return new MargarittaPizza();
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}
