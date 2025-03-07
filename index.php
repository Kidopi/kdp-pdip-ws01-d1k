<?php

$nomeAplicacao = "PokeAdventure 0.0.1";

$horario = date('H:i');

$nomeTreinador = isset($argv[1]) ? $argv[1] : 'Treinador desconhecido';

$message = "Bem-vindo ao " . $nomeAplicacao . "!\n";
$message .= "Hora atual: " . $horario . "\n";
$message .= "Saudações, " . $nomeTreinador . "!";

echo $message;