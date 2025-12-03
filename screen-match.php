<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;

$quantidadeDeNotas = $argc - 1;

for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador]; 
}

// Outra forma de fazer o loop
// $contador = 1; 
// while ($argv[$contador] != 0) {
//     $somaDeNotas += $argv[$contador++];
// }




$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020; 

// '' e "" tem comportamentos diferentes, as aspas simples não interpretam variáveis.
 echo "Nome do filme: $nomeFilme\n"; 
 echo "Nota do filme: $notaFilme\n";
 echo "Ano de lançamento: $anoLancamento\n";

 if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento.\n";
 } elseif ($anoLancamento > 2020 && $anoLancamento <=2022) {
    echo "Esse filme ainda é novo."; 
 } else {
    echo "Esse filme não é um lançamento\n";
 }

 // Match funciona de forma semelhante ao switch, mas com algumas diferenças. 
 // No match, não é necessário usar break
 // Além disso, o match é uma expressão que retorna um valor, enquanto o switch é uma instrução.

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-heroi",
    "Se beber não case" => "comedia",
    default => "gênero desconhecido", 
};

echo "O gênero do filme é: $genero\n";