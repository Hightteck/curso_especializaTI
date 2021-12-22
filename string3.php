<?php

/*
$states = 'São Paulo/SP';
$arrayStates = explode('/', $states);
var_dump($arrayStates[1]);
*/

$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);

var_dump($arrayInfo);

echo '<hr>';

$arrayTest = [1,2,3,4,5];
echo implode($arrayTest, ' # ');