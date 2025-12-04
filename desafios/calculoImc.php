<?php

$altura = $argv[1] ?? 1.70;
$peso = $argv[2] ?? 65;

$imc = $peso / ($altura * $altura); 

echo "Altura: $altura m\n";
echo "Peso: $peso kg\n";
echo "IMC: " . number_format($imc, 2) . "\n";



