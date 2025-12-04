<?php

$fusoHorario = 'America/Sao_Paulo';
date_default_timezone_set($fusoHorario);

$horario = date("H:i:s"); 
$hora = date("H"); 

if ($hora >= 5 && $hora < 12) {
    $saudacao = "Bom dia!";
} elseif ($hora >= 12 && $hora < 18) {
    $saudacao = "Boa tarde!";
} else {
    $saudacao = "Boa noite!";
}

echo "Hora atual: $horario\n";
echo "$saudacao\n";




