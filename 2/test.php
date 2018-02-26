<?php

require __DIR__ . '/extract.php';

$foo = new \Exemplo\DateRange(
    'now',
    'next monday'
);

var_dump($foo->getStart());
var_dump($foo->getEnd());
var_dump($foo->getWeekEnding());



