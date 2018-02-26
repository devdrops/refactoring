<?php

namespace Exemplo;

use \Exemplo\Foo;

/**
 * Bar class
 *
 * Nova classe, com um único propósito:
 * Mover a complexidade de Foo.
 */
class Bar
{
    /**
     * Novo método encapsulando o anterior
     *
     * @param $foo object
     *
     * @return object
     */
    public function newCleanMethod($foo)
    {
        /*
            Agora podemos agir aqui,
            sem o risco de quebrar 
            outras chamadas ao 
            método antigo :D
         */

        $riskyClass = new Foo;
        $riskyClass->oldComplicatedMethod(
            $param1, $param2, $param3
        );
    }
}
