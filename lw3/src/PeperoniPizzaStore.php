<?php
namespace Your\Namespace;

class PeperoniPizzaStore extends PizzaStore {
    public function createPizza($type): Pizza {
        switch ($type) {
            case 'peperoni':
                return new PeperoniPizza();
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}
