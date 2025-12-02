<?php

$nomeFilme = "A Origem";
$anoLancamento = $argv[1] ?? 2010;

$notaFilme = 10;
$planoPrime = false;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020; 

// '' e "" tem comportamentos diferentes, as aspas simples não interpretam variáveis.
 echo "Nome do filme: $nomeFilme\n"; 
 echo "Nota do filme: $notaFilme\n";
 echo "Ano de lançamento: $anoLancamento\n";

