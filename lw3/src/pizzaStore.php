<?php

namespace Your\Namespace;

abstract class PizzaStore {
    abstract public function createPizza($type): Pizza;

    public function orderPizza($type) {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->cut();
    }
}