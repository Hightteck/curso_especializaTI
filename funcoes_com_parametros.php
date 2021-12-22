<?php

function pt(String $value) 
{
    echo "{$value} <br>";
}

/*
$teste = 123;
pt($teste);
pt(34);
pt(1900);
pt(140);
pt('coisas');
*/

//METODOS 1 DE CALCULO COM PARAMETRO

function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}

//echo sum(24, 84);

function sumTwo(int $n1, int $n2):int
{
    return ($n1 + $n2);
}

echo sumTwo(2, 5);