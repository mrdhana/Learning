<?php

class Product
{
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name    = $name;
        $this->price   = $price;
    }

    public function getName() { return $this->name; }
    public function getPrice() { return money_format('%.2n', $this->price); }
}
