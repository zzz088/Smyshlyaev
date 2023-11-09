<?php
namespace Your\Namespace;

class PeperoniPizza extends Pizza {
    protected $name = 'Peperoni';

    public function prepare() {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топпинги: " . implode(", ", $this->toppings) . "\n";
    }
}
