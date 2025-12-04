<?php

// Laço para percorrer os argumentos passados via linha de comando 
for ($i = 1; $i <= count($argv) - 1; $i++) {
    // Verificar se o número atual é par ou ímpar
    if ($argv[$i] % 2 == 0) {
        echo "$argv[$i] é par\n";
    } else {
        echo "$argv[$i] é ímpar\n";
    }
}
