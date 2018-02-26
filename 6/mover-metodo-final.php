<?php

namespace Exemplo;

class Product
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $price;

    /**
     * @return float
     */
    public function calculateTotal($quantity)
    {
        return $this->price * $quantity;
    }
}

class Cart
{
    // Continua com suas atribuições de Cart,
    // mas movemos o cálculo do valor 
    // para a classe de Produto,
    // onde os campos já existem, tornando mais
    // coerente o propósito do cálculo.
}
