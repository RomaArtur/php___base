<?php

echo "Meu nome é Artur!\n";

// Cálculo da média de três notas 

$nota1 = $argv[1] ?? 8;
$nota2 = $argv[2] ?? 4; 
$nota3 = $argv[3] ?? 3.5;
$media = ($nota1 + $nota2 + $nota3) / 3; 

echo "A média das notas é: $media\n";

// Transforma metros em centímetros

$metros = $argv[4] ?? 2;
$centimetros = $metros * 100;

echo "$metros metros equivalem a $centimetros centímetros.\n";

// Verifica se o ano é bissexto

$ano = $argv[5] ?? 2025; 

if ($ano % 4 == 0 && $ano % 100 != 0) {
    echo "O ano de $ano é bissexto.\n";
} elseif ($ano % 400 == 0) {
    echo "O ano de $ano é bissexto.\n";
} else {
    echo "O ano de $ano não é bissexto.\n";
}

