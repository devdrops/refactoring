<?php

namespace Exemplo;

class Product
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description;
    /**
     * @var float
     */
    private $price;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param $name string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    // Segue outros getters e setters
}
