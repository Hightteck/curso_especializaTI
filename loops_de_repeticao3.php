<?php

//$names = ['a', 'b', 'c', 'e', 'f', 'g', 'h'];
$names = [
    'a' => '2a',
    'b' => '2b',
    'c' => '2c',
    'd' => '2d',
    'e' => '2e',
    'f' => '2f',
];

foreach ($names as $key => $name) {
    echo "{$key} => {$name} <br> ";
}