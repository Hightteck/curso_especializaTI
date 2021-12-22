<?php

$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];

//echo $ages[count($ages) - 1]; -> utilizando count para verificar ultimo elemento da variavel utilizando um numero negativo.

//echo end($ages); -> simplificando mesmo metodo da variavel a cima, pois utilizando o END.

$agesFiltered = array_filter($ages, function ($age){
    return $age >= 18;
});

//var_dump($agesFiltered); -> funcão para visualizar arrays filtradas entre numeros

$name = ['carlos', 'especializati', 'company'];
/*
$name[0] = strtoupper($name[0]);
$name[1] = strtoupper($name[1]);
$name[2] = strtoupper($name[2]);
*/

$name = array_map('applyToupper', $name);
   

function applyToupper($value)
{
    return strtoupper($value);
}

var_dump($name);