<?php

$var1 = 'Algo';
$var2 = 'Outro';

$var3 = $var1 .' '. $var2 .' '. 12;
//echo $var3;

$name = 'Carlos Ferreira';
$company = 'EspecializaTI';

//echo 'o '.$name.' e fundador da empresa: '.$company; -> metodo 1 de concatena�ao
echo "O {$name} e fundador da empresa: {$company}"; // -> metodo 2 de concatena�ao