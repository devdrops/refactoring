<?php

namespace ExemploTest;

use \Exemplo\Foo; 

class FooTest extends \PHPUnit_Framework_Testcase
{
    /**
     * @test
     */
    public function createCustomers()
    {
        $foo = new Foo();

        for ($x = 0; $x <= 4; $x++) {
            $foo->createCustomer();
        }

        sleep(15);
        $this->assertEquals(
            $foo->getCustomers(),
            5
        );
    }
}
