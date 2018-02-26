<?php

namespace Exemplo;

/**
 * Foo class
 *
 * Usada por todo o sistema.
 */
class Foo
{
    /**
     * Velho método complexo e crítico no sistema.
     *
     * @param $foo object
     * @param $bar object
     * @param $baz object
     *
     * @return object
     */
    public function oldComplicatedMethod($foo, $bar, $baz)
    {
        /*
            Muita coisa amarrada dentro do método:

            - Consulta banco de dados;
            - Realiza validações;
            - Busca dados de produto em cache;
            - Faz cafézinho;
            - Etc
         */
    }
}
