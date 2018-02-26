<?php

namespace Exemplo;

class Foo
{
    public function createCustomer()
    {
        // Cadastra consumidores de forma XYZ
    }

    public function getCustomers()
    {
        // Fornece um array de todos os consumidores
        return $this->createRequest(
            '/customers',
        );
    }
}
