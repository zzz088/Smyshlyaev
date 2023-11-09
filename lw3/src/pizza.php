<?php
namespace Your\Namespace;

abstract class Pizza {
    protected $name;
    protected $sauce;
    protected $toppings = [];

    abstract public function prepare();

    public function cut() {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}
