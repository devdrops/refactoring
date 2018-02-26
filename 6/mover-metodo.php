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
}

class Cart
{
    public function calculateProductTotal($info)
    {
        // Cálculo individual do Produto
        $this->productTotal = $priceSum * $info->quantity;
    }
}

