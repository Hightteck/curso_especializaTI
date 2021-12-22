<?php

$cart = [
    0 => 'macarrao',
    1 => 'feijao',
    2 => 'arroz',
    3 => 'batata',
];

echo '<pre>';

//ORDENAR EM FORMA DECRESCENTE!!
arsort($cart);
var_dump($cart);

echo '<hr>';


// ORDERNAR DE FORMA CRESCENTE
asort($cart);
var_dump($cart);

echo '<hr>';

//ORDENAR OS NUMERAIS DE FORMA CRESCENTE
sort($cart);
var_dump($cart);

echo '<hr>';