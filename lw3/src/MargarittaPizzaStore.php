<?php
namespace Your\Pizzastore;

class MargarittaPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'margaritta':
                $pizza = new MargarittaPizza();
                return $pizza;
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}
